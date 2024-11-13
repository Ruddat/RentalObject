<div class="card mb-4">
    <div class="card-header">
        <h5>Virtual Tour</h5>
    </div>
    <div class="card-body">
        @if (session()->has('message'))
        <div class="alert alert-success">
            @autotranslate(session('message'), app()->getLocale())
        </div>
    @endif
        <form wire:submit.prevent="submitVirtualTour">
            <!-- Auswahl für die Tourart -->
            <div class="mb-3">
                <label class="form-label">Virtual Tour Type</label>
                <select wire:model.change="tourType" class="form-select">
                    <option value="embedded_code">Embedded Code</option>
                    <option value="image_upload">Upload Images/Files</option>
                </select>
            </div>

            <!-- Eingabefeld für den Einbettungscode, wenn 'Embedded Code' ausgewählt ist -->
            @if ($tourType === 'embedded_code')
                <div class="mb-3">
                    <label class="form-label">Embedded Code</label>
                    <textarea wire:model.defer="embeddedCode" class="form-control" rows="3" placeholder="Enter your embedded code here"></textarea>
                    @error('embeddedCode') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            <!-- Mehrfach-Datei-Upload für die Tourbilder, wenn 'Image/File Upload' ausgewählt ist -->
            @if ($tourType === 'image_upload')
                <div class="mb-3">
                    <label class="form-label">Upload Virtual Tour Images/Files</label>
                    <input type="file" wire:model="tourImages" class="form-control" multiple>
                    @error('tourImages.*') <span class="text-danger">{{ $message }}</span> @enderror

                    <!-- Ladeanzeige für die Bilder -->
                    <div wire:loading wire:target="tourImages" class="mt-2">Uploading...</div>

                    <!-- Vorschau der hochgeladenen Bilder -->
                    <div class="mt-3">
                        @foreach ($tourImages as $image)
                            @if (str_starts_with($image->getMimeType(), 'image/'))
                                <img src="{{ $image->temporaryUrl() }}" alt="Virtual Tour Image Preview" class="img-thumbnail mt-2" style="max-width: 150px;">
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Save Virtual Tour</button>
            </div>
        </form>
    </div>
</div>
