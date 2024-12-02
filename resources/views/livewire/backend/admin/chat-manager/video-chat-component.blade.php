<div>
    <!-- Video Section -->
    <div class="row">
        <div class="col-md-6">
            <div class="video-container">
                <video id="localVideo" autoplay muted class="w-100"></video>
            </div>
        </div>
        <div class="col-md-6">
            <div class="video-container">
                <video id="remoteVideo" autoplay class="w-100"></video>
            </div>
        </div>
    </div>

    <!-- Chat Section -->
    <div>
        <div class="chat-box" style="height: 300px; overflow-y: scroll; border: 1px solid #ccc; padding: 10px;">
            @foreach($messages as $message)
                <div class="chat-message">
                    <strong>{{ $message['user']['name'] ?? 'Unknown User' }}:</strong>
                    <span>{{ $message['content'] }}</span>
                    <small class="text-muted">
                        {{ \Carbon\Carbon::parse($message['created_at'] ?? now())->format('H:i A') }}
                    </small>
                </div>
            @endforeach
        </div>

        <form wire:submit.prevent="sendMessage" class="mt-3">
            <div class="input-group">
                <input wire:model="messageText" type="text" class="form-control" placeholder="Type your message here...">
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
            @error('messageText') <span class="text-danger">{{ $message }}</span> @enderror
        </form>
    </div>

    <div>
        <h4>Invite User</h4>
        <form wire:submit.prevent="inviteUser">
            <div class="input-group">
                <input type="email" wire:model="email" class="form-control" placeholder="User Email">
                <button class="btn btn-primary" type="submit">Invite</button>
            </div>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </form>

        <h5>Room Members</h5>
        <ul>
            @foreach($roomMembers as $member)
                <li>{{ $member->name }}</li>
            @endforeach
        </ul>
    </div>

    @assets
    <script src="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.11.1/echo.iife.min.js"></script>
Pizza Express Food Service    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.4.1/socket.io.min.js"></script>

    @endassets


@script
<script>
    window.io = io;

    window.Echo = new Echo({
        broadcaster: 'socket.io',
        host: window.location.hostname + ':6001'
    });

    let localStream;
    let remoteStream;
    let peerConnection;
    const servers = {
        iceServers: [
            {
                urls: "stun:stun.l.google.com:19302", // STUN-Server von Google
            },
        ],
    };

    const localVideo = document.getElementById("localVideo");
    const remoteVideo = document.getElementById("remoteVideo");

    // Hole lokale Medien
    async function startLocalStream() {
        try {
            localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
            localVideo.srcObject = localStream;
        } catch (error) {
            console.error("Fehler beim Abrufen des lokalen Streams:", error);
        }
    }

    // Erstelle eine Peer-Verbindung
    function createPeerConnection() {
        peerConnection = new RTCPeerConnection(servers);

        // Lokale Tracks hinzufügen
        if (localStream) {
            localStream.getTracks().forEach((track) => {
                peerConnection.addTrack(track, localStream);
            });
        }

        peerConnection.ontrack = (event) => {
            if (!remoteStream) {
                remoteStream = new MediaStream();
                remoteVideo.srcObject = remoteStream;
            }
            remoteStream.addTrack(event.track);
        };

        peerConnection.onicecandidate = (event) => {
            if (event.candidate) {
                // Schicke den ICE-Kandidaten an den Signalisierungsserver
                sendToServer({
                    type: "ice-candidate",
                    candidate: event.candidate,
                });
            }
        };
    }

    // Beispielhafte Signalisierung (funktioniert mit Laravel Echo)
    function sendToServer(message) {
        window.Echo.private('video-room.' + @json($roomId))
            .whisper('signaling', message);
    }

    // Erstelle ein Angebot für die Verbindung
    async function createOffer() {
        try {
            const offer = await peerConnection.createOffer();
            await peerConnection.setLocalDescription(offer);
            sendToServer({
                type: "offer",
                offer: offer,
            });
        } catch (error) {
            console.error("Fehler beim Erstellen des Angebots:", error);
        }
    }

    // Beispiel für die Reaktion auf eingehende Signalisierung
    function handleSignalingMessage(message) {
        switch (message.type) {
            case "offer":
                peerConnection.setRemoteDescription(new RTCSessionDescription(message.offer));
                createAnswer();
                break;
            case "answer":
                peerConnection.setRemoteDescription(new RTCSessionDescription(message.answer));
                break;
            case "ice-candidate":
                peerConnection.addIceCandidate(new RTCIceCandidate(message.candidate));
                break;
        }
    }

    // Antwort auf das Angebot erstellen
    async function createAnswer() {
        try {
            const answer = await peerConnection.createAnswer();
            await peerConnection.setLocalDescription(answer);
            sendToServer({
                type: "answer",
                answer: answer,
            });
        } catch (error) {
            console.error("Fehler beim Erstellen der Antwort:", error);
        }
    }

    // Starte den lokalen Stream
    startLocalStream().then(() => {
        createPeerConnection();
    });

    // Empfange Signalisierung über Laravel Echo
    window.Echo.private('video-room.' + @json($roomId))
        .listenForWhisper('signaling', (e) => {
            handleSignalingMessage(e);
        });
</script>
@endscript
</div>
