<div class="main-content">
    <div class="main-content-inner">

        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <form wire:submit.prevent="save" class="form-box">
            <div class="row">
                <div class="col-md-6">
                    <label for="site_name" class="form-label">Seitenname:</label>
                    <input type="text" wire:model="site_name" id="site_name" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="owner_name" class="form-label">Inhaber:</label>
                    <input type="text" wire:model="owner_name" id="owner_name" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="facebook_url" class="form-label">Facebook URL:</label>
                    <input type="url" wire:model="facebook_url" id="facebook_url" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="twitter_url" class="form-label">Twitter URL:</label>
                    <input type="url" wire:model="twitter_url" id="twitter_url" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="instagram_url" class="form-label">Instagram URL:</label>
                    <input type="url" wire:model="instagram_url" id="instagram_url" class="form-control">
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4 mb-3">
                <button type="submit" class="btn btn-primary">Speichern</button>
            </div>
        </form>
    </div>
</div>
