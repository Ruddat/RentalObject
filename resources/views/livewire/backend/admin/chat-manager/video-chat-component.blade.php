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

    <!-- Include Echo and Pusher -->
<!-- Include Pusher and Echo -->
<!-- Include Laravel Echo and Pusher -->
<script type="module">
    import { echoInstance } from "../build/js/echo.js";

    // Example Usage
    const roomId = "{{ $roomId }}";
    echoInstance.private(`room.${roomId}`)
        .listenForWhisper("iceCandidate", (data) => {
            console.log("Received ICE Candidate:", data);
        })
        .listenForWhisper("offer", (data) => {
            console.log("Received Offer:", data);
        })
        .listenForWhisper("answer", (data) => {
            console.log("Received Answer:", data);
        });
</script>

<script>
    // Initialize Echo
    const roomId = "{{ $roomId }}";

    // WebRTC Example
    const localVideo = document.getElementById('localVideo');
    const remoteVideo = document.getElementById('remoteVideo');
    let localStream, peerConnection;

    const config = {
        iceServers: [{ urls: 'stun:stun.l.google.com:19302' }],
    };

    async function initVideoChat() {
        try {
            localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
            localVideo.srcObject = localStream;

            peerConnection = new RTCPeerConnection(config);

            localStream.getTracks().forEach(track => peerConnection.addTrack(track, localStream));

            peerConnection.ontrack = event => {
                remoteVideo.srcObject = event.streams[0];
            };

            peerConnection.onicecandidate = event => {
                if (event.candidate) {
                    window.Echo.channel(`room.${roomId}`).whisper('iceCandidate', {
                        candidate: event.candidate.toJSON(),
                    });
                }
            };

            window.Echo.private(`room.${roomId}`)
                .listenForWhisper('offer', async ({ offer }) => {
                    await peerConnection.setRemoteDescription(new RTCSessionDescription(offer));
                    const answer = await peerConnection.createAnswer();
                    await peerConnection.setLocalDescription(answer);
                    window.Echo.channel(`room.${roomId}`).whisper('answer', {
                        answer: peerConnection.localDescription.toJSON(),
                    });
                })
                .listenForWhisper('answer', async ({ answer }) => {
                    await peerConnection.setRemoteDescription(new RTCSessionDescription(answer));
                })
                .listenForWhisper('iceCandidate', async ({ candidate }) => {
                    await peerConnection.addIceCandidate(new RTCIceCandidate(candidate));
                });

            if (isInitiator()) {
                const offer = await peerConnection.createOffer();
                await peerConnection.setLocalDescription(offer);
                window.Echo.channel(`room.${roomId}`).whisper('offer', {
                    offer: peerConnection.localDescription.toJSON(),
                });
            }
        } catch (error) {
            console.error('Error initializing video chat:', error);
        }
    }

    function isInitiator() {
        return Math.random() < 0.5;
    }

    initVideoChat();
</script>


</div>
