<form wire:submit.prevent="save" enctype="multipart/form-data">
    <input type="file" wire:model="photos" multiple>
    @error('photos.*') <span class="error">{{ $message }}</span> @enderror
    <button type="submit">Bilder hochladen</button>
</form>

@if ($panoramaPath)
    <div id="panorama" style="width: 100%; height: 500px;"></div>
@endif

<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
<script>
    document.addEventListener('livewire:load', () => {
        window.addEventListener('panoramaCreated', event => {
            pannellum.viewer('panorama', {
                type: 'equirectangular',
                panorama: event.detail.panoramaPath,
                autoLoad: true,
            });
        });
    });
</script>
