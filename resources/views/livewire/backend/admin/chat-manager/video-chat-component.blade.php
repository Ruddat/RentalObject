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
        <!-- Chat Section -->
        <div class="chat-box" style="height: 300px; overflow-y: scroll; border: 1px solid #ccc; padding: 10px;">
            @foreach($messages as $message)
                <div class="chat-message">
                    <!-- Überprüfung, ob der Benutzer geladen wurde -->
                    <strong>
                        {{ isset($message['user']) ? $message['user']['name'] : 'Unknown User' }}:
                    </strong>
                    <span>{{ $message['content'] }}</span>
                    <small class="text-muted">
                        {{ isset($message['created_at']) ? \Carbon\Carbon::parse($message['created_at'])->format('H:i A') : 'Time Unknown' }}
                    </small>
                </div>
            @endforeach
        </div>

        <!-- Nachricht senden -->
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


    <!-- WebRTC Script -->
    <script>
        const localVideo = document.getElementById('localVideo');
        const remoteVideo = document.getElementById('remoteVideo');
        let localStream, peerConnection;

        const config = {
            iceServers: [{ urls: 'stun:stun.l.google.com:19302' }]
        };

        async function initVideoChat() {
            try {
                // Get Local Media
                localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
                localVideo.srcObject = localStream;

                // Initialize PeerConnection
                peerConnection = new RTCPeerConnection(config);
                localStream.getTracks().forEach(track => peerConnection.addTrack(track, localStream));

                // Set Remote Stream
                peerConnection.ontrack = event => {
                    remoteVideo.srcObject = event.streams[0];
                };

                // Handle ICE Candidates
                peerConnection.onicecandidate = event => {
                    if (event.candidate) {
                        Livewire.emit('iceCandidate', event.candidate);
                    }
                };

                // Listen to Livewire Events
                Livewire.on('offerReceived', async offer => {
                    await peerConnection.setRemoteDescription(new RTCSessionDescription(offer));
                    const answer = await peerConnection.createAnswer();
                    await peerConnection.setLocalDescription(answer);
                    Livewire.emit('sendAnswer', answer);
                });

                Livewire.on('answerReceived', async answer => {
                    await peerConnection.setRemoteDescription(new RTCSessionDescription(answer));
                });

                Livewire.on('candidateReceived', async candidate => {
                    await peerConnection.addIceCandidate(new RTCIceCandidate(candidate));
                });
            } catch (error) {
                console.error('Error initializing video chat:', error);
            }
        }

        initVideoChat();
    </script>
</div>
