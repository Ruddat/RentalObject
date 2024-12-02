<div>
    <section class="flat-section">
        <div class="container">

    <!-- Fortschrittsanzeige -->
    <div class="widget-box-2 mb-20">

    <div class="breadcrumb-steps">
        <ul class="breadcrumb">
            <li class="{{ $currentStep === 1 ? 'active' : ($currentStep > 1 ? 'completed' : '') }}">
                <a href="#stepOne" wire:click.prevent="goToStep(1)">
                    Schritt 1: Allgemein
                </a>
            </li>
            <li class="{{ $currentStep === 2 ? 'active' : ($currentStep > 2 ? 'completed' : '') }}">
                <a href="#stepOne" wire:click.prevent="goToStep(2)">
                    Schritt 2: Beschreibung
                </a>
            </li>
            <li class="{{ $currentStep === 3 ? 'active' : '' }}">
                <a href="#stepOne" wire:click.prevent="goToStep(3)">
                    Schritt 3: Veröffentlichung
                </a>
            </li>
        </ul>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="{{ $currentStep }}" aria-valuemin="1" aria-valuemax="3" style="width:{{ ($currentStep / 3) * 100 }}%;">
            Schritt {{ $currentStep }} von 3
        </div>
      </div>

    </div>

    <!-- Schritt 1 -->
    @if($currentStep == 1)
    <div class="widget-box-2 mb-20">
        <div class="step-header">Schritt 1: Allgemeine Angaben</div>

        <!-- User Type -->
        <div class="form-section">
            <div class="form-group">
                <label>Möchten Sie als Privatperson oder gewerblicher Anbieter inserieren? *</label>
                <div class="d-flex gap-3">
                    <label>
                        <input type="radio" wire:model="stepOne.userType" value="privat"> Privatperson
                    </label>
                    <label>
                        <input type="radio" wire:model="stepOne.userType" value="gewerblich"> Gewerblicher Anbieter
                    </label>
                </div>
                @error('stepOne.userType') <span class="error-message">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Überschrift -->
        <div class="form-section">
            <div class="form-group">
                <label>Überschrift des Exposés *</label>
                <input type="text" wire:model.lazy="stepOne.title" class="form-control" placeholder="Überschrift eingeben">
                @error('stepOne.title') <span class="error-message">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Immobilienart und Kategorie -->
        <div class="form-section">
            <div class="form-group">
                <label>Immobilienart *</label>
                <select wire:model.lazy="stepOne.propertyType" wire:change="loadCategories($event.target.value)" class="form-control">
                    <option value="">Bitte wählen</option>
                    @foreach($propertyTypes as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('stepOne.propertyType') <span class="error-message">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mt-3">
                <label>Kategorie *</label>
                <select wire:model.lazy="stepOne.category" class="form-control" @if(empty($categories) || $categories->isEmpty()) disabled @endif>
                    <option value="">Bitte wählen</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @if(empty($categories) || $categories->isEmpty())
                    <small class="text-muted">Keine Kategorien verfügbar.</small>
                @endif
                @error('stepOne.category') <span class="error-message">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Vermietung / Verkauf -->
        <div class="form-section">
            <div class="form-group">
                <label>Vermietung / Verkauf *</label>
                <select wire:model.lazy="stepOne.transactionType" class="form-control" @if($disableBuy && $disableSell) disabled @endif>
                    <option value="">Bitte wählen</option>
                    @if(!$disableSell)
                        <option value="verkaufen">Verkaufen</option>
                    @endif
                    @if(!$disableBuy)
                        <option value="vermieten">Vermieten</option>
                    @endif
                </select>
                @if($disableBuy && $disableSell)
                    <small class="text-muted">Diese Option ist für die ausgewählte Immobilienart nicht verfügbar.</small>
                @endif
                @error('stepOne.transactionType') <span class="error-message">{{ $message }}</span> @enderror
            </div>

            <!-- Checkbox für Nachmieter -->
            @if($stepOne['transactionType'] === 'vermieten')
            <div class="form-check mt-3">
                <input type="checkbox" wire:model="stepOne.lookingForTenant" id="nachmieterGesucht" class="form-check-input">
                <label class="form-check-label" for="nachmieterGesucht">Ich bin Mieter und suche einen Nachmieter</label>
            </div>
            @endif
        </div>

        <!-- Standort der Immobilie -->
        <div class="form-section">
            <div class="form-group">
                <label>Land *</label>
                <select wire:model.lazy="stepOne.country" class="form-control">
                    <option value="">Bitte wählen</option>
                    <option value="deutschland">Deutschland</option>
                    <option value="österreich">Österreich</option>
                    <option value="schweiz">Schweiz</option>
                </select>
                @error('stepOne.country') <span class="error-message">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mt-3">
                <label>Straße *</label>
                <input type="text" wire:model.lazy="stepOne.street" class="form-control" placeholder="Straße">
                @error('stepOne.street') <span class="error-message">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mt-3">
                <label>PLZ / Ort *</label>
                <div class="d-flex">
                    <input type="text" wire:model.lazy="stepOne.zip" class="form-control me-2" placeholder="PLZ">
                    <input type="text" wire:model.lazy="stepOne.city" class="form-control" placeholder="Ort">
                </div>
                @error('stepOne.zip') <span class="error-message">{{ $message }}</span> @enderror
                @error('stepOne.city') <span class="error-message">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Veröffentlichung der Kontaktdaten -->
        <div class="form-section">
            <h4>Welche Kontaktdaten sollen im Exposé angezeigt werden?</h4>
            <div class="form-group">
                <label>
                    <input type="radio" wire:model.lazy="stepOne.contactDetails" value="none">
                    Keine Veröffentlichung Ihrer Kontaktdaten (Kontaktaufnahme nur über Formular möglich)
                </label><br>
                <label>
                    <input type="radio" wire:model.lazy="stepOne.contactDetails" value="name_phone">
                    Veröffentlichung Ihres Namens und Ihrer Telefonnummer
                </label><br>
                <label>
                    <input type="radio" wire:model.lazy="stepOne.contactDetails" value="full_address">
                    Veröffentlichung Ihrer kompletten Adresse
                </label>
                @error('stepOne.contactDetails') <span class="error-message">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Navigation -->
        <div class="mt-4">
            <button wire:click="nextStep" class="btn btn-primary">Weiter</button>
        </div>
    </div>

    @endif


    <!-- Schritt 2 -->
    @if($currentStep == 2)
    <div>
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link @if($activeTab === 'data') active @endif" href="#" wire:click.prevent="setActiveTab('data')" role="tab">
                    2a Basisdaten
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link @if($activeTab === 'data_description') active @endif" href="#" wire:click.prevent="setActiveTab('data_description')" role="tab">
                    2b Beschreibung
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link @if($activeTab === 'data_floors') active @endif" href="#" wire:click.prevent="setActiveTab('data_floors')" role="tab">
                    2c Etagen
                </a>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content mt-3">
            @if($activeTab === 'data')
            <div class="tab-pane active" id="data" role="tabpanel">

                <livewire:frontend.rental-object.prices-and-costs :transactionType="$stepOne['transactionType']" :prices="$prices" />

                <livewire:frontend.rental-object.basis-data-form
                :transactionType="$stepOne['transactionType']"
                :data="$data"
                :propertyTypeName="$stepOne['propertyTypeName']" />

                <!-- Energieausweis Formular -->
                @livewire('frontend.rental-object.energy-certificate-form', ['existingCertificates' => $collectedData['stepTwo']['energyCertificates'] ?? []])

                <!-- Übergabe der Attribute an die untergeordnete Komponente -->
                @livewire('frontend.rental-object.attribute-form', ['selectedAttributes' => $selectedAttributes])

                <!-- Basisdaten Inhalt -->
                <h4>Basisdaten</h4>
                <div class="form-group">
                    <label>Adresse</label>
                    <input type="text" wire:model="stepTwo.address" class="form-control">
                    @error('stepTwo.address') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group mt-3">
                    <label>Stadt</label>
                    <input type="text" wire:model="stepTwo.city" class="form-control">
                    @error('stepTwo.city') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            @elseif($activeTab === 'data_description')
            <div class="tab-pane active" id="data_description" role="tabpanel">

                @foreach ($sections as $index => $section)
                    <div class="widget-box-2 mb-20 bg-primary-new">
                        <div class="boxtop">
                            <span class="inner"></span>
                        </div>
                        <div class="boxcontent bg-primary-new">
                            <div class="hd"></div>
                            <div class="bd">
                                <h6>
                                    Abschnitt {{ $index + 1 }}
                                </h6>
                                <fieldset class="formfield_13">
                                    <legend>Text-Abschnitt {{ $index + 1 }}</legend>
                                    <div class="grid_12o16">
                                        <!-- Überschrift -->
                                        <dl class="d-flex align-items-start">
                                            <dt style="width: 25%;">
                                                <strong>Überschrift</strong>
                                            </dt>
                                            <dd style="width: 75%;">
                                                <input type="text" maxlength="30"
                                                       wire:model.lazy="sections.{{ $index }}.headline"
                                                       class="form-control"
                                                       placeholder="Überschrift eingeben">
                                                @error('sections.' . $index . '.headline')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </dd>
                                        </dl>

                                        <!-- Beschreibung -->
                                        <dl class="d-flex align-items-start">
                                            <dt style="width: 25%;">
                                                <strong>Beschreibung</strong>
                                            </dt>
                                            <dd style="width: 75%;">
                                                <textarea rows="5"
                                                          cols="20"
                                                          wire:model.lazy="sections.{{ $index }}.description"
                                                          class="form-control"
                                                          placeholder="Beschreibung eingeben"></textarea>
                                                @error('sections.' . $index . '.description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </dd>
                                        </dl>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="boxbottom">
                            <span class="inner"></span>
                        </div>
                    </div>
                @endforeach

                <!-- Buttons für Abschnitt-Verwaltung -->
                <div class="button_wrap">
                    <button type="button" wire:click="addSection" class="btn btn-outline-success btn-sm mt-3"
                            {{ count($sections) >= $maxSections ? 'disabled' : '' }}>
                        Weitere Abschnitte hinzufügen
                    </button>
                    <button type="button" wire:click="removeSection" class="btn btn-outline-danger btn-sm mt-3"
                            {{ count($sections) <= 1 ? 'disabled' : '' }}>
                        Abschnitt entfernen
                    </button>
                </div>
            </div>





            @elseif($activeTab === 'data_floors')
            <div class="tab-pane active" id="data_floors" role="tabpanel">
                @livewire('backend.property-system.floor-component')

                <!-- Added Floors Section -->
                @if($floors)
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>@autotranslate("Added Floors", app()->getLocale())</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($floors as $index => $floor)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>Floor {{ $index + 1 }}:</strong> {{ $floor['floorName'] }} |
                                            <strong>Price:</strong> {{ $floor['floorPrice'] ?? 'N/A' }} {{ $floor['pricePostfix'] ?? '' }} |
                                            <strong>Size:</strong> {{ $floor['floorSize'] ?? 'N/A' }} {{ $floor['sizePostfix'] ?? '' }} |
                                            <strong>Bedrooms:</strong> {{ $floor['bedrooms'] ?? 0 }} |
                                            <strong>Bathrooms:</strong> {{ $floor['bathrooms'] ?? 0 }}

                                            <!-- Floor Plan Link -->
                                            @if(isset($floor['floorPlanPath']))
                                                <br><strong>Floor Plan:</strong>
                                                <a href="{{ asset('storage/' . $floor['floorPlanPath']) }}" target="_blank">View Plan</a>
                                            @endif
                                        </div>
                                        <button wire:click="removeFloor({{ $index }})" class="btn btn-danger btn-sm">
                                            Remove
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <!-- Beschreibung Inhalt -->
                <h4>Beschreibung</h4>
                <div class="form-group">
                    <label>Beschreibung der Immobilie</label>
                    <textarea wire:model="stepTwo.floors" class="form-control"></textarea>
                    @error('stepTwo.floors') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            @endif
        </div>

        <button wire:click="previousStep" class="btn btn-secondary mt-3">Zurück</button>
        <button wire:click="nextStep" class="btn btn-primary mt-3">Weiter</button>
    </div>
    @endif





    <!-- Schritt 3 -->

    <div x-data="{ isSaving: false, message: '' }" @form-saving.window="isSaving = true; message = $event.detail.message;" @form-saved.window="isSaving = false; message = ''; alert($event.detail.message);" @form-save-failed.window="isSaving = false; alert($event.detail.message);">

        <!-- Ladeanzeige -->
        <div x-show="isSaving" class="fixed top-0 left-0 w-full h-full bg-gray-500 bg-opacity-75 flex items-center justify-center">
            <div class="text-white text-xl">
                <i class="fa fa-spinner fa-spin"></i> <span x-text="message"></span>
            </div>
        </div>

        <!-- Schritt 3 Inhalte -->
        <div id="Step-3 Container" style="display: {{ $currentStep === 3 ? 'block' : 'none' }};">
            <!-- Inhalte -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Media Upload Component -->
                    <livewire:backend.property-system.media-upload-component :temporaryUuid="$temporaryUuid" />
                </div>
                <div class="col-md-6">
                    <!-- Virtual Tour Component -->
                    @livewire('backend.property-system.virtual-tour-component')
                    <!-- Video Component -->
                    @livewire('backend.property-system.video-component')
                </div>
            </div>

            <!-- Buttons -->
            <button wire:click="previousStep" class="btn btn-secondary mt-3">Zurück</button>
            <button wire:click="submitForm" class="btn btn-success mt-3" x-on:click="isSaving = true">Abschließen</button>
        </div>
    </div>



    <!-- Schritt 3 -->
    @if($currentStep == 3)


    @endif

    @if (session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif



    <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mapModalLabel">Karte anzeigen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
                </div>
                <div class="modal-body">
                    <div id="map-1234" style="height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div wire:loading wire:target="nextStep, previousStep, goToStep" class="preload preload-container">
            <div class="preload-logo">
                <div class="spinner"></div>
                <span class="icon icon-villa-fill"></span>
            </div>
        </div>
    </div>

<style>
    .progress {
    height: 20px;
    background-color: #f0f0f0;
    border-radius: 10px;
    overflow: hidden;
}

.progress-bar {
    background-color: #1563df;
    color: white;
    font-size: 14px;
    line-height: 20px;
    text-align: center;
    transition: width 0.4s ease;
}

.widget-box-2.mb-20.bg-primary-new {
    background-color: #f3f7fd;
}

.map-preview:hover .overlay {
    background: rgba(0, 0, 0, 0.5);
}

.map-preview .overlay {
    display: none;
}

/* --------------------------------
Step 1: Allgemeine Angaben
-------------------------------- */
.step-header {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .form-section {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .map-preview {
        border: 1px solid #ddd;
        border-radius: 8px;
        height: 250px;
        background: url('https://via.placeholder.com/400x250') no-repeat center center;
        background-size: cover;
    }

    .form-check-label, .form-group label {
        font-weight: 500;
        margin-bottom: 5px;
    }

    .error-message {
        color: red;
        font-size: 12px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 16px;
    }




.breadcrumb-steps {
    width: 100%;
    margin-bottom: 20px;
}

.breadcrumb {
    display: flex;
    list-style: none;
    padding: 0;
    justify-content: space-between;
    font-size: 16px;
    font-weight: bold;
}

.breadcrumb li {
    position: relative;
    flex: 1;
    text-align: center;
    padding: 10px 15px;
    border-bottom: 2px solid #ddd;
    color: #aaa;
    cursor: pointer;
}

.breadcrumb li:not(:last-child)::after {
    content: '>';
    position: absolute;
    right: -20px;
    top: 50%;
    transform: translateY(-50%);
    color: #ddd;
}

.breadcrumb li.completed {
    color: #28a745;
    border-bottom-color: #28a745;
}

.breadcrumb li.active {
    color: #007bff;
    border-bottom-color: #007bff;
}

.breadcrumb li.completed:hover,
.breadcrumb li.active:hover {
    color: #0056b3;
}

.breadcrumb li:not(.completed):hover {
    color: #333;
}

.breadcrumb li a {
    text-decoration: none;
    color: inherit;
    display: inline-block;
}


.fixed {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
}

.bg-gray-500 {
    background-color: rgba(128, 128, 128, 0.5);
}

.text-white {
    color: #fff;
}

.fa-spin {
    animation: spin 1s infinite linear;
}

@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}


/* --------------------------------
Step 2: Beschreibung
-------------------------------- */

.nav-tabs {
    border-bottom: 1px solid #ddd;
    margin-bottom: 20px;
}

.nav-tabs .nav-item {
    margin-bottom: -1px;
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-radius: 0;
    color: #333;
}

.nav-tabs .nav-link.active {
    background-color: #f9f9f9;
    border-color: #ddd #ddd #f9f9f9;
}

.tab-content {
    border: 1px solid #ddd;
    border-top: 0;
    padding: 20px;
    border-radius: 0 0 8px 8px;
}

.tab-pane {
    display: none;
}

.tab-pane.active {
    display: block;
}

.widget-box-2.mb-20.bg-primary-new {
    background-color: #f3f7fd;
}

.boxtop {
    background: url('https://via.placeholder.com/400x250') no-repeat center center;
    background-size: cover;
    height: 250px;
    position: relative;
}

.boxtop .inner {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
}

.boxcontent {
    background: #f3f7fd;
    border: 1px solid #ddd;
    border-top: 0;
    border-bottom: 0;
    padding: 20px;
}

.boxcontent .hd {
    height: 20px;
}

.boxcontent .bd {
    padding: 20px;
}

.formfield_13 {
    margin-bottom: 20px;
}

.formfield_13 legend {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 10px;
}

.formfield_13 dl {
    margin-bottom: 20px;
}

.formfield_13 dl dt {
    font-weight: bold;
    margin-bottom: 5px;
}

.formfield_13 dl dd {
    margin-bottom: 10px;
}

.formfield_13 dl dd input,
.formfield_13 dl dd textarea {
    width: 100%;
}

.button_wrap {
    margin-top: 20px;
}

/* --------------------------------
Step 3: Veröffentlichung
-------------------------------- */





    </style>

@auth
    @if(auth()->user()->hasRole('super admin')) <!-- Adjust the role name if needed -->
        <div class="container mt-5">
            <h4>Gesammelte Daten (Debugging)</h4>
            <pre style="background: #f8f9fa; padding: 15px; border: 1px solid #ddd; border-radius: 5px; overflow-x: auto;">
                {{ json_encode($collectedData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}
            </pre>
        </div>
    @endif
@endauth

</div>
</div>



</section>



</div>
</div>

@assets


<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>


@endassets


<script>

function openMapPopup() {
    $('#mapModal').modal('show');
    setTimeout(() => {
        if (map) {
            const lat = {{ $stepOne['latitude'] ?? 51.505 }};
            const lng = {{ $stepOne['longitude'] ?? -0.09 }};
            map.setView([lat, lng], 13);
            marker.setLatLng([lat, lng]);
        }
    }, 500);
}
</script>
