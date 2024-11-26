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
        console.log("Initializing video chat...");

        // Zugriff auf lokale Medien
        localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
        console.log("Local stream initialized:", localStream);

        localVideo.srcObject = localStream;

        // PeerConnection erstellen
        peerConnection = new RTCPeerConnection(config);
        console.log("PeerConnection initialized:", peerConnection);

        // Tracks hinzufügen
        localStream.getTracks().forEach(track => {
            peerConnection.addTrack(track, localStream);
            console.log("Track added to PeerConnection:", track);
        });

        // Remote-Stream empfangen
        peerConnection.ontrack = event => {
            console.log("Remote stream received:", event.streams[0]);
            remoteVideo.srcObject = event.streams[0];
        };

        // ICE-Kandidaten verarbeiten
        peerConnection.onicecandidate = event => {
            if (event.candidate) {
                console.log("ICE Candidate generated:", event.candidate);
                Livewire.dispatch('iceCandidate', event.candidate.toJSON());
            }
        };

        // Events von Livewire empfangen
        Livewire.on('offerReceived', async ({ offer }) => {
            console.log("Offer received:", offer);
            await peerConnection.setRemoteDescription(new RTCSessionDescription(offer));
            const answer = await peerConnection.createAnswer();
            console.log("Answer created:", answer);
            await peerConnection.setLocalDescription(answer);
            Livewire.dispatch('answer', peerConnection.localDescription.toJSON());
        });

        Livewire.on('answerReceived', async ({ answer }) => {
            console.log("Answer received:", answer);
            await peerConnection.setRemoteDescription(new RTCSessionDescription(answer));
        });

        Livewire.on('candidateReceived', async ({ candidate }) => {
            console.log("Candidate received:", candidate);
            await peerConnection.addIceCandidate(new RTCIceCandidate(candidate));
        });

        // Entscheide, ob dieser Client der Initiator ist
        if (isInitiator()) {
            console.log("This client is the initiator.");
            const offer = await peerConnection.createOffer();
            console.log("Offer created:", offer);
            await peerConnection.setLocalDescription(offer);
            Livewire.dispatch('offer', peerConnection.localDescription.toJSON());
        } else {
            console.log("This client is waiting for an offer.");
        }

    } catch (error) {
        console.error('Error initializing video chat:', error);
    }
}

function isInitiator() {
    // Deine Logik, um zu bestimmen, wer der Initiator ist
    return true; // Placeholder
}

initVideoChat();

    </script>

</div>
