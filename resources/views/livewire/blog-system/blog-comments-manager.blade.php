<div>
    <!-- Kommentarübersicht -->
    <div class="wrap-review">
        <div class="pb-12 line-b mb-0">
            <h5 class="text-black-2">Kommentare ({{ count($comments) }})</h5>
        </div>
        <ul class="box-review">
            @foreach($comments as $comment)
                <li class="list-review-item">
                    <div class="avatar avt-60">
                        <img src="{{ asset('images/avatar/default.jpg') }}" alt="avatar">
                    </div>
                    <div class="content">
                        <div class="name">{{ $comment->user->name }}</div>
                        <p>{{ $comment->content }}</p>
                        <small>{{ $comment->created_at->format('F j, Y, g:i a') }}</small>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Fehlermeldung anzeigen und Login-Modal-Button, falls Benutzer nicht eingeloggt ist -->
    @if ($errorMessage)
        <div class="alert alert-warning mt-4">
            {{ $errorMessage }}
            <a href="#modalLogin" data-bs-toggle="modal" class="tf-btn btn-line btn-login">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.1251 5C13.1251 5.8288 12.7959 6.62366 12.2099 7.20971C11.6238 7.79576 10.8289 8.125 10.0001 8.125C9.17134 8.125 8.37649 7.79576 7.79043 7.20971C7.20438 6.62366 6.87514 5.8288 6.87514 5C6.87514 4.1712 7.20438 3.37634 7.79043 2.79029C8.37649 2.20424 9.17134 1.875 10.0001 1.875C10.8289 1.875 11.6238 2.20424 12.2099 2.79029C12.7959 3.37634 13.1251 4.1712 13.1251 5ZM3.75098 16.765C3.77776 15.1253 4.44792 13.5618 5.61696 12.4117C6.78599 11.2616 8.36022 10.6171 10.0001 10.6171C11.6401 10.6171 13.2143 11.2616 14.3833 12.4117C15.5524 13.5618 16.2225 15.1253 16.2493 16.765C14.2888 17.664 12.1569 18.1279 10.0001 18.125C7.77014 18.125 5.65348 17.6383 3.75098 16.765Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Einloggen
            </a>
        </div>
    @endif

    <!-- Kommentarformular -->
    <div class="wrap-form-comment">
        <h5 class="text-black-2">Einen Kommentar hinterlassen</h5>
        <p class="text-variant-1 mt-8">Deine E-Mail-Adresse wird nicht veröffentlicht. Erforderliche Felder sind markiert *</p>
        <form wire:submit.prevent="submitComment" class="comment-form form-submit">
            <div class="form-wg">
                <label class="sub-ip">Kommentar</label>
                <textarea wire:model="newComment" rows="4" placeholder="Schreibe deinen Kommentar..." required></textarea>
                @error('newComment') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button class="form-wg tf-btn primary w-100" type="submit">
                <span>Kommentar absenden</span>
            </button>
        </form>
    </div>

    <!-- popup login -->
    <livewire:auth.login-user />
    <!-- popup register -->
    <livewire:auth.register-user />

</div>


