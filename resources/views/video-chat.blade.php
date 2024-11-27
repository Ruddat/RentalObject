<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Chat</title>
</head>
<body>
    <video id="localVideo" autoplay muted playsinline></video>
    <video id="remoteVideo" autoplay playsinline></video>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.1/socket.io.js"></script>
    <script>
        const localVideo = document.getElementById('localVideo');
        const remoteVideo = document.getElementById('remoteVideo');

        let localStream;
        let peerConnection;

        const configuration = {
            iceServers: [
                { urls: 'stun:stun.l.google.com:19302' }
            ]
        };

        const socket = io('https://rentalobject.test:4000', { secure: true });

        async function startVideo() {
            try {
                localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
                localVideo.srcObject = localStream;
            } catch (error) {
                console.error('Error accessing media devices:', error.message);
                alert('Bitte Kamera- und Mikrofonzugriff aktivieren.');
            }
        }

        startVideo();

        socket.on('offer', async (data) => {
            if (!peerConnection) createPeerConnection();

            try {
                await peerConnection.setRemoteDescription(new RTCSessionDescription(data.offer));
                const answer = await peerConnection.createAnswer();
                await peerConnection.setLocalDescription(answer);

                socket.emit('answer', { answer: peerConnection.localDescription });
            } catch (error) {
                console.error('Error handling offer:', error);
            }
        });

        socket.on('answer', async (data) => {
            try {
                if (peerConnection) {
                    await peerConnection.setRemoteDescription(new RTCSessionDescription(data.answer));
                }
            } catch (error) {
                console.error('Error handling answer:', error);
            }
        });

        socket.on('ice-candidate', async (data) => {
            try {
                if (peerConnection) {
                    await peerConnection.addIceCandidate(new RTCIceCandidate(data.candidate));
                }
            } catch (error) {
                console.error('Error adding ICE candidate:', error);
            }
        });

        function createPeerConnection() {
            peerConnection = new RTCPeerConnection(configuration);

            // Füge lokale Tracks hinzu
            localStream?.getTracks().forEach((track) => {
                peerConnection.addTrack(track, localStream);
            });

            // Verarbeite Remote-Tracks
            peerConnection.ontrack = (event) => {
                if (!remoteVideo.srcObject) {
                    remoteVideo.srcObject = event.streams[0];
                }
            };

            // ICE-Kandidaten weiterleiten
            peerConnection.onicecandidate = (event) => {
                if (event.candidate) {
                    socket.emit('ice-candidate', { candidate: event.candidate });
                }
            };

            // Verbindungsstatus überwachen
            peerConnection.onconnectionstatechange = () => {
                console.log(`Connection state: ${peerConnection.connectionState}`);
                if (peerConnection.connectionState === 'disconnected') {
                    alert('Verbindung unterbrochen');
                }
            };
        }

        // Angebot senden
        async function sendOffer() {
            if (!localStream) {
                console.error('Local stream is not initialized.');
                return;
            }

            createPeerConnection();

            try {
                const offer = await peerConnection.createOffer();
                await peerConnection.setLocalDescription(offer);
                socket.emit('offer', { offer: peerConnection.localDescription });
            } catch (error) {
                console.error('Error creating offer:', error);
            }
        }

        sendOffer();
    </script>
</body>
</html>
