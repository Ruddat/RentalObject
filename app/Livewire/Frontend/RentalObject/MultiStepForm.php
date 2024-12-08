<?php

namespace App\Livewire\Frontend\RentalObject;

use Livewire\Component;
use App\Models\ObjPhotos;
use App\Models\ObjPrices;
use App\Models\ObjDetails;
use App\Models\ObjSections;
use Illuminate\Support\Str;
use App\Models\PropertyType;
use App\Models\ObjProperties;
use Livewire\WithFileUploads;
use App\Models\ObjNearbyPlaces;
use App\Models\PropertyCategory;
use App\Services\GeocodeService;
use Illuminate\Support\Facades\DB;
use App\Models\ObjEnergyCertificate;
use App\Services\NearbyPlacesService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $formData = [];
    public $propertyTypes = [];
    public $categories = [];
    public $disableBuy = false;
    public $disableSell = false;
    public $activeTab = 'data';
    public $floors = [];
    public $prices = [];
    public $selectedAttributes = [];
    public $sections = [];
    public $canProceed = false;
    public $data = [];
    public $selectedCertificates = [];
    public $slectedSections = [];

    public $pricesValidationPassed = false; // Status der Validierung


    public $maxSections = 10;

    public $temporaryUuid;

    public $previewData;

    public $virtualTourLink;
    public $tourLink;
    public $description;

    public $videoLink;
    public $videoDescription;

    public $collectedData = [
        'stepOne' => [],
        'stepTwo' => [],
        'stepThree' => [],
    ];

    protected $listeners = [
        'floorAdded' => 'handleFloorAdded',
        //'removeFloor',
        'updatePrices' => 'handlePricesUpdate',
        //'pricesValidationResponse' => 'updateCanProceed',
        'pricesValidationResponse',
        'updateFloors' => 'handleFloorsUpdate',
        'updateSections' => 'handleSectionsUpdate',
        'updateBasisData' => 'handleBasisDataUpdate',
        'syncEnergyCertificates' => 'handleEnergyCertificatesUpdate',
        'updateAttributes' => 'handleAttributesUpdate',
        'handleVideoLinkUpdate' => 'handleVideoLinkUpdate',
        'handleTourLinkUpdate' => 'handleTourLinkUpdate',

    ];


    public $stepOne = [
        'userType' => '',
        'title' => '',
        'propertyType' => '',
        'category' => '',
        'transactionType' => '',
        'lookingForTenant' => false,
        'country' => '',
        'street' => '',
        'zip' => '',
        'city' => '',
        'latitude' => '51.505',
        'longitude' => '-0.09',
        'contactDetails' => 'none',
    ];

    public $stepTwo = [
        'address' => '',
        'city' => '',
        'description' => '',
    ];

    public $stepThree = [
        'payment_method' => '',
        'card_number' => '',
        'photos' => [],
    ];

    protected $validationRules = [
        1 => [
            'stepOne.userType' => 'required',
            'stepOne.title' => 'required|min:3',
            'stepOne.propertyType' => 'required',
            'stepOne.transactionType' => 'required_unless:disableBuy,true|required_unless:disableSell,true',
            'stepOne.category' => 'required_if:categories,!empty',
            'stepOne.street' => 'required',
            'stepOne.zip' => 'required|digits:5',
            'stepOne.city' => 'required',
            'stepOne.country' => 'required',
            'stepOne.contactDetails' => 'required',
        ],
        2 => [
           // 'stepTwo.coldRent' => 'required|min:3',
            'stepTwo.city' => 'nullable',
            'stepTwo.zip' => 'nullable|digits:5',
        ],
        3 => [
            'tourLink' => 'required|url',
            'description' => 'nullable|string',
            'videoLink' => 'nullable|url|max:255',
            'videoDescription' => 'nullable|string|max:500',
            'virtualTourLink' => 'nullable|url|max:255',
            'stepThree.payment_method' => 'nullable',
            'stepThree.card_number' => 'nullable',
            'stepThree.photos.*' => 'image|max:5120',
        ],
    ];

    public function mount()
    {
        // Prüfe, ob es Daten in der Session gibt
        $sessionData = session()->get('multiStepFormData', []);

        if (!empty($sessionData)) {
            // Daten aus der Session wiederherstellen
            $this->stepOne = $sessionData['stepOne'] ?? $this->getDefaultStepOne();
            $this->stepTwo = $sessionData['stepTwo'] ?? [];
            $this->stepThree = $sessionData['stepThree'] ?? $this->getDefaultStepThree();

            // UUID aus der Session wiederherstellen oder neue UUID generieren
            $this->temporaryUuid = $sessionData['stepOne']['temporaryUuid'] ?? (string) \Illuminate\Support\Str::uuid();

            // Zusätzliche Werte initialisieren
            $this->videoLink = $this->stepThree['videoLink'] ?? null;
            $this->videoDescription = $this->stepThree['videoDescription'] ?? null;
            $this->tourLink = $this->stepThree['tourLink'] ?? null;
            $this->tourDescription = $this->stepThree['tourDescription'] ?? null;

            // Session-Daten nach Wiederherstellung löschen
            session()->forget('multiStepFormData');
        } else {
            // Standardwerte initialisieren
            $this->temporaryUuid = (string) \Illuminate\Support\Str::uuid();
            $this->stepOne = $this->getDefaultStepOne();
            $this->stepTwo = [];
            $this->stepThree = $this->getDefaultStepThree();
            $this->videoLink = null;
            $this->videoDescription = null;
            $this->tourLink = null;
            $this->tourDescription = null;
        }

        // Initialisiere propertyTypes und sections
        $this->propertyTypes = PropertyType::all();
        $this->sections = $this->getDefaultSections();
    }

    /**
     * Gibt die Standardwerte für Step One zurück.
     */
    protected function getDefaultStepOne()
    {
        return [
            'userType' => '',
            'title' => '',
            'propertyType' => '',
            'category' => '',
            'transactionType' => '',
            'lookingForTenant' => false,
            'country' => '',
            'street' => '',
            'zip' => '',
            'city' => '',
            'latitude' => '',
            'longitude' => '',
            'contactDetails' => '',
            'propertyTypeName' => '',
            'temporaryUuid' => $this->temporaryUuid,
            'nearbyPlaces' => collect(),
        ];
    }

    /**
     * Gibt die Standardwerte für Step Three zurück.
     */
    protected function getDefaultStepThree()
    {
        return [
            'videoLink' => null,
            'videoDescription' => null,
            'tourLink' => null,
            'tourDescription' => null,
            'photos' => [],
        ];
    }

    /**
     * Gibt die Standardwerte für die Sections zurück.
     */
    protected function getDefaultSections()
    {
        return [
            [
                'headline' => 'Objektbeschreibung',
                'description' => '',
                'backgroundImage' => asset('build/images/sections/objektbeschreibung.png'),
            ],
            [
                'headline' => 'Lagebeschreibung',
                'description' => '',
                'backgroundImage' => asset('build/images/sections/lagebeschreibung.png'),
            ],
            [
                'headline' => 'Raumaufteilung',
                'description' => '',
                'backgroundImage' => asset('build/images/sections/raumaufteilung.png'),
            ],
            [
                'headline' => 'Besichtigungstermine',
                'description' => '',
                'backgroundImage' => asset('build/images/sections/besichtigungstermine.png'),
            ],
        ];
    }

    public function pricesValidationResponse($isValid)
    {
        if ($isValid) {
            $this->nextStepConfirmed(); // Weiter zum nächsten Schritt
        } else {
            session()->flash('error', 'Bitte füllen Sie alle erforderlichen Felder in den Preisen aus.');
        }
    }


    public function addSection()
    {
        if (count($this->sections) < $this->maxSections) {
            $this->sections[] = [
                'headline' => '',
                'description' => '',
                'backgroundImage' => asset('build/images/sections/Real_Estate_Additional_Fields_400x250.png'), // Standardbild hinzufügen
            ];
        }
    }

    public function removeSection()
    {
        if (count($this->sections) > 1) {
            array_pop($this->sections);
        }
    }

    public function updatedSections()
    {
        $this->collectedData['stepTwo']['sections'] = $this->sections;
        \Log::info('Updated Sections:', $this->sections);
    }


    // Video Section
    public function saveVideo()
    {
        $this->validate();
        session()->flash('message', 'YouTube-Video erfolgreich hinzugefügt.');
        $this->dispatch('close-modal', 'videoModal');
    }



    public function openExternalTourModal()
    {
        $htmlContent = '<input type="text" class="form-control" placeholder="Externer Rundgang-Link" wire:model="externalTourLink">';

        $this->dispatch('openModal', [
            'modalId' => 'externalTourModal',
            'title' => 'Externen Rundgang hinzufügen',
            'body' => $htmlContent, // Achte darauf, dass dies ein String ist
        ]);
    }


    // Virtual Tour
    public function saveVirtualTour()
    {
        try {
            $this->validate([
                'tourLink' => 'required|url',
                'description' => 'nullable|string',
            ]);

            // Speichern der Daten
            // ...

            // Modal schließen
            $this->dispatch('close-modal', ['modalId' => 'virtualTourModal']);

            // Rückmeldung
            session()->flash('message', '360°-Rundgang erfolgreich gespeichert.');
        } catch (ValidationException $e) {

          //  dd($e->getMessage(), $e->errors());
            // Modal erneut öffnen
           // $this->dispatch('close-modal', ['modalId' => 'virtualTourModal']);
         //   $this->dispatch('open-modal', ['modalId' => 'virtualTourModal']);

            // Fehler anzeigen
            $this->addError('tourLink', 'Bitte einen gültigen Link eingeben.');
        }
    }


    public function removeVirtualTour()
    {
        $this->virtualTourLink = null;
        session()->flash('message', '360°-Rundgang erfolgreich entfernt.');
    }




    public function updated($propertyName)
    {
        if (str_starts_with($propertyName, 'stepOne.') || $propertyName === 'disableBuy' || $propertyName === 'disableSell') {
            $this->updateCanProceed();
        }

        if ($propertyName === 'stepOne.propertyType') {
            $this->updatedStepOnePropertyType($this->stepOne['propertyType']);
        }

        if (in_array($propertyName, ['stepOne.street', 'stepOne.zip', 'stepOne.city'])) {
            if (!empty($this->stepOne['street']) && !empty($this->stepOne['zip']) && !empty($this->stepOne['city'])) {
                $this->geocodeAddress();
            }
        }

        if (str_starts_with($propertyName, 'prices')) {
            $this->collectedData['stepTwo']['prices'] = $this->prices;
            \Log::info('Updated Prices:', $this->prices);
        }

        if (str_starts_with($propertyName, 'data')) {
            $this->collectedData['stepTwo']['data'] = $this->data;
            \Log::info('Updated data:', $this->data);
        }

        if (str_starts_with($propertyName, 'energyCertificates')) {
            $this->collectedData['stepTwo']['energyCertificates'] = $this->data;
            \Log::info('Updated energyCertificates:', $this->energyCertificates);
        }
    }

    public function updatedStepOnePropertyType($typeId)
    {
        if ($typeId) {
            $propertyType = PropertyType::find($typeId);
            $this->categories = PropertyCategory::where('property_type_id', $typeId)->get();
            $this->disableBuy = $propertyType->no_buy;
            $this->disableSell = $propertyType->no_sell;
            $this->stepOne['propertyTypeName'] = $propertyType->name ?? 'Unknown';
            $this->stepOne['transactionType'] = ($this->disableBuy && $this->disableSell) ? null : '';
            $this->stepOne['temporaryUuid'] = $this->temporaryUuid;
        } else {
            $this->categories = [];
            $this->disableBuy = false;
            $this->disableSell = false;
            $this->stepOne['transactionType'] = '';
            $this->stepOne['propertyTypeName'] = null;
        }
        $this->stepOne['category'] = '';
    }

    public function updatedStepOneCategory($value)
    {
        if ($value == 'specific_category_id') {
            $this->someAdditionalData = AdditionalData::where('category_id', $value)->get();
        }
    }

    public function updatedStepOneTransactionType($value)
    {
        $this->stepOne['transactionType'] = $value;
    }

    public function geocodeAddress()
    {
        $geocodeService = new GeocodeService();
        $fullAddress = $this->stepOne['street'] . ', ' . $this->stepOne['zip'] . ' ' . $this->stepOne['city'] . ', ' . $this->stepOne['country'];

        try {
            $response = $geocodeService->searchByAddress($fullAddress);
            if (!empty($response)) {
                $this->stepOne['latitude'] = $response[0]['lat'] ?? '';
                $this->stepOne['longitude'] = $response[0]['lon'] ?? '';
                $this->dispatch('updateMap', [
                    'latitude' => $this->stepOne['latitude'],
                    'longitude' => $this->stepOne['longitude'],
                ]);


                // Suche nach Orten in der Nähe
                $nearbyPlaces = $this->getNearbyPlaces($this->stepOne['latitude'], $this->stepOne['longitude']);
                $this->stepOne['nearbyPlaces'] = $nearbyPlaces;

            } else {
                $this->stepOne['latitude'] = '';
                $this->stepOne['longitude'] = '';
                session()->flash('error', 'Adresse konnte nicht geokodiert werden. Bitte Koordinaten manuell eingeben.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Fehler beim Abrufen der Geodaten: ' . $e->getMessage());
        }
    }


    public function getNearbyPlaces($latitude, $longitude, $radius = 5000, $categories = [])
    {
        try {
            $nearbyPlacesService = app(NearbyPlacesService::class);

            \Log::info('Latitude:', ['value' => $latitude]);
            \Log::info('Longitude:', ['value' => $longitude]);
            \Log::info('Radius:', ['value' => $radius]);

            // Suche in der Datenbank nach vorhandenen Einträgen
            $existingPlaces = DB::table('near_by_places')
                ->select('*')
                ->selectRaw("
                    ( 6371 * acos(
                        cos( radians(?) ) *
                        cos( radians( latitude ) ) *
                        cos( radians( longitude ) - radians(?) ) +
                        sin( radians(?) ) *
                        sin( radians( latitude ) )
                    )) AS distance
                ", [$latitude, $longitude, $latitude])
                ->having('distance', '<', $radius / 1000)
                ->get();

            \Log::info('Existing Places:', $existingPlaces->toArray());

            // Wenn keine Einträge in der Datenbank vorhanden sind, API abfragen
            if ($existingPlaces->isEmpty()) {
                $apiPlaces = $nearbyPlacesService->fetchNearbyPlacesFromAPI($latitude, $longitude, $radius, $categories);

                \Log::info('API Places Response:', ['response' => $apiPlaces]);

                foreach ($apiPlaces as $place) {
                    // Duplikat-Prüfung
                    $existing = DB::table('near_by_places')
                        ->where('latitude', $place['lat'])
                        ->where('longitude', $place['lon'])
                        ->exists();

                    if (!$existing) {
                        // Bestimme die Kategorie
                        $type = $place['tags']['amenity']
                        ?? $place['tags']['shop']
                        ?? $place['tags']['scool']
                        ?? $place['tags']['healthcare']
                        ?? $place['tags']['leisure']          // Freizeitorte (z. B. Parks, Fitnessstudios)
                        ?? $place['tags']['tourism']          // Touristische Orte (z. B. Museen, Sehenswürdigkeiten)
                        ?? $place['tags']['office']           // Büros (z. B. Architekturbüros)
                        ?? $place['tags']['craft']            // Handwerksbetriebe
                        ?? $place['tags']['landuse']          // Landnutzung (z. B. Gewerbegebiete)
                        ?? $place['tags']['natural']          // Natürliche Features (z. B. Wälder, Seen)
                        ?? 'Unbekannt'; // Fallback


                        // Berechne die Entfernung
                        $distance = $this->calculateDistance($latitude, $longitude, $place['lat'], $place['lon']);

                        // Daten vorbereiten
                        $data = [
                            'name' => $place['tags']['name'] ?? 'Unbekannt',
                            'latitude' => $place['lat'],
                            'longitude' => $place['lon'],
                            'distance' => $distance,
                            'type' => $type,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];

                        \Log::info('Inserting Place:', $data);

                        // In die Datenbank einfügen
                        DB::table('near_by_places')->insert($data);
                    } else {
                        \Log::info('Duplicate Place Skipped:', [
                            'latitude' => $place['lat'],
                            'longitude' => $place['lon'],
                        ]);
                    }
                }

                return $apiPlaces;
            }

            return $existingPlaces;
        } catch (\Exception $e) {
            \Log::error('Fehler beim Abrufen der Orte:', ['message' => $e->getMessage()]);
            return [];
        }
    }




    public function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371; // Radius der Erde in Kilometern

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) +
             cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
             sin($dLon / 2) * sin($dLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadius * $c; // Entfernung in Kilometern
    }




    public function nextStep()
    {
        $rules = $this->rules();
        $this->validate($rules);

        switch ($this->currentStep) {
            case 1:
                $propertyType = PropertyType::find($this->stepOne['propertyType']);
                $this->stepOne['propertyTypeName'] = $propertyType->name ?? 'Unknown';
                $this->collectedData['stepOne'] = $this->stepOne;
                $this->dispatch('validatePricesRequest', to: 'frontend.rental-object.prices-and-costs');

                break;
            case 2:
                $this->collectedData['stepTwo'] = $this->stepTwo;
                $this->collectedData['stepTwo']['prices'] = $this->prices;
                $this->collectedData['stepTwo']['data'] = $this->data;
                $this->collectedData['stepTwo']['floors'] = $this->floors;
                $this->collectedData['stepTwo']['energyCertificates'] = $this->selectedCertificates;
                $this->collectedData['stepTwo']['attributes'] = $this->selectedAttributes;
                $this->collectedData['stepTwo']['sections'] = $this->slectedSections;
                // Validierungsanfrage an die externe Komponente senden
                //$this->dispatch('validatePricesRequest');
                $this->dispatch('validatePricesRequest', to: 'frontend.rental-object.prices-and-costs');


                break;
            case 3:

                $this->collectedData['stepThree'] = $this->stepThree;
                $this->collectedData['stepThree']['photos'] = $this->stepThree['photos'];
                $this->collectedData['stepThree']['energyCertificates'] = $this->selectedCertificates;
                break;
        }

        $this->currentStep++;
        $this->loadStepData();
    }

    public function previousStep()
    {
        $this->currentStep--;
        $this->loadStepData();
    }

    private function loadStepData()
    {
        switch ($this->currentStep) {
            case 1:
                $this->stepOne = $this->collectedData['stepOne'] ?? $this->stepOne;
                break;
            case 2:
                $this->stepTwo = $this->collectedData['stepTwo'] ?? $this->stepTwo;
                $this->prices = $this->collectedData['stepTwo']['prices'] ?? $this->prices;
                $this->dispatch('syncPrices', $this->prices);
                $this->dispatch('updateTransactionType', $this->stepOne['transactionType']);
                $this->data = $this->collectedData['stepTwo']['data'] ?? $this->data;
                $this->dispatch('syncData', $this->data);
                $this->dispatch('updateDataType', $this->stepOne['transactionType']);

                $this->floors = $this->collectedData['stepTwo']['floors'] ?? $this->floors;
                $this->dispatch('syncFloors', $this->floors);

                $this->selectedCertificates = $this->collectedData['stepTwo']['energyCertificates'] ?? [];
                $this->dispatch('syncLoadedCertificates', $this->collectedData['stepTwo']['energyCertificates'] ?? []);

//dd($this->collectedData['stepTwo']);


                $this->slectedSections = $this->collectedData['stepTwo']['sections'] ?? [];
                $this->dispatch('updateSections', $this->sections);

                $this->selectedAttributes = $this->collectedData['stepTwo']['attributes'] ?? [];
                $this->dispatch('syncAttributes', $this->selectedAttributes);
                break;
            case 3:
                $this->stepThree = $this->collectedData['stepThree'] ?? $this->stepThree;
                $this->selectedCertificates = $this->collectedData['stepTwo']['energyCertificates'] ?? [];
                //$this->slectedSections = $this->collectedData['stepTwo']['sections'] ?? [];


                $this->dispatch('initializeMediaUploadComponent');
                $this->stepThree['photos'] = Storage::files('uploads/properties/temp/' . $this->temporaryUuid);

                break;
        }
    }

    public function submitForm()
    {
        // Überprüfen, ob der Benutzer eingeloggt ist
        if (!auth()->check()) {
            // Daten temporär in der Session speichern
            session()->put('multiStepFormData', [
                'stepOne' => $this->stepOne,
                'stepTwo' => $this->stepTwo,
                'stepThree' => $this->stepThree,
            ]);

            // Benutzer zur Login-/Registrierungsseite weiterleiten
            session()->flash('warning', 'Bitte melden Sie sich an oder erstellen Sie einen kostenlosen Account, um fortzufahren.');


            // Event auslösen, um das Modal zu öffnen
            $this->dispatch('show-login-modal');
            return;

//            return redirect()->route('login');
        }

        // Validierung und Speicherung der Daten
      //  $this->validate();
        $this->saveData();

        session()->flash('message', 'Formular erfolgreich gesendet!');
        return redirect()->route('home');
    }

    public function rules()
    {
        $rules = $this->validationRules[$this->currentStep];

        if ($this->currentStep === 1 && $this->disableBuy && $this->disableSell) {
            unset($rules['stepOne.transactionType']);
        }

        return $rules;
    }

    public function canProceed(): bool
    {
        $rules = $this->rules();
        $validator = Validator::make($this->getFormDataForCurrentStep(), $rules);
        return !$validator->fails();
    }

    public function updateCanProceed()
    {
        $rules = $this->rules();
        $formData = $this->getFormDataForCurrentStep();

        \Log::info('Flattened Data for Can Proceed:', $formData);
        \Log::info('Validation Rules:', $rules);

        $validator = Validator::make($formData, $rules);
        if ($validator->fails()) {
            \Log::error('Validation Errors:', $validator->errors()->toArray());
        }

        $this->canProceed = !$validator->fails();
    }

    private function getFormDataForCurrentStep()
    {
        switch ($this->currentStep) {
            case 1:
                return $this->stepOne;
            case 2:
                return $this->stepTwo;
            case 3:
                return $this->stepThree;
            default:
                return [];
        }
    }

    public function loadCategories($typeId)
    {
        if ($typeId) {
            $this->categories = PropertyCategory::where('property_type_id', $typeId)->get();
        } else {
            $this->categories = [];
        }
        $this->stepOne['category'] = '';
    }

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;

        if ($tab === 'data_description') {
            $this->dispatch('updateSections', $this->collectedData['stepTwo']['sections'] ?? []);
        }

    }


    public function handleFloorAdded($floorData)
    {
        \Log::info('Event floorAdded empfangen in MultiStepForm.', $floorData);
        $this->floors[] = $floorData;
    }

    public function removeFloor($index)
    {
        unset($this->floors[$index]);
        $this->floors = array_values($this->floors);
    }

    public function saveStepThreePhotos()
    {
        $this->validate([
            'stepThree.photos.*' => 'image|max:5120',
        ]);

        foreach ($this->stepThree['photos'] as $photo) {
            $filePath = $photo->store('uploads/properties/temp/' . $this->temporaryUuid, 'public');
            \Log::info("Uploaded File Path: " . $filePath);
        }

        session()->flash('message', 'Fotos erfolgreich hochgeladen!');
    }

    public function removePhoto($index)
    {
        unset($this->stepThree['photos'][$index]);
        $this->stepThree['photos'] = array_values($this->stepThree['photos']);
    }

    public function handleBasisDataUpdate($data)
    {
        $this->data = $data;
        $this->collectedData['stepTwo']['data'] = $data;
    }

    public function handlePricesUpdate($prices)
    {
        $this->prices = $prices;
        $this->collectedData['stepTwo']['prices'] = $prices;
    }


    public function handleVideoLinkUpdate($videoLink = null, $videoDescription = null)
    {
        $this->videoLink = $videoLink;
     //   $this->videoDescription = $videoDescription;

        // Speichere die Werte korrekt in stepThree
        $this->stepThree['videoLink'] = $videoLink;
       // $this->stepThree['videoDescription'] = $videoDescription;

        // Optional: Aktualisiere auch collectedData
        $this->collectedData['stepThree']['videoLink'] = $videoLink;
       // $this->collectedData['stepThree']['videoDescription'] = $videoDescription;

        // Feedback für den Benutzer
        session()->flash('success', 'YouTube-Video wurde erfolgreich aktualisiert!');
    }

    public function handleTourLinkUpdate($tourLink = null)
    {
        $this->tourLink = $tourLink;

        // Optional: Speichere die Werte in stepThree oder einer anderen Struktur
        $this->stepThree['tourLink'] = $tourLink;

        // Optional: Aktualisiere auch collectedData
        $this->collectedData['stepThree']['tourLink'] = $tourLink;

        // Feedback für den Benutzer
        session()->flash('success', '360° Rundgang wurde erfolgreich aktualisiert!');
    }

    public function handleAttributesUpdate($attributes)
    {
        $this->selectedAttributes = $attributes;
        $this->collectedData['stepTwo']['attributes'] = $attributes;
    }

    public function handleFloorsUpdate($floors)
    {
        $this->collectedData['stepTwo']['floors'] = $floors;
    }

    public function handleEnergyCertificatesUpdate($certificates)
    {
        $this->selectedCertificates = $certificates;
        $this->collectedData['stepTwo']['energyCertificates'] = $certificates;

        \Log::info('Energy Certificates in MultiStepForm:', $certificates);
    }

    public function handleSectionsUpdate($sections)
    {
        $this->slectedSections = $sections;
        $this->collectedData['stepTwo']['sections'] = $sections;
        \Log::info('Updated Sections:', $sections);
    }


    public function saveData()
    {
        $propertyData = $this->collectedData['stepOne'];
        $priceData = $this->collectedData['stepTwo']['prices'];
        $detailData = $this->collectedData['stepTwo']['data'];
        $energyCertificates = $this->collectedData['stepTwo']['energyCertificates'];
        $attributes = $this->collectedData['stepTwo']['attributes']; // Array mit Attribut-IDs
        $sections = $this->collectedData['stepTwo']['sections']; // Dynamische Sections
        $nearbyPlacesData = $this->collectedData['stepOne']['nearbyPlaces'];
        //   dd($this->collectedData);
        //dd($nearbyPlacesData);

       // \Log::info('Nearby Places:', $nearbyPlacesData);
        \Log::info('Property Data:', $propertyData);
        \Log::info('Price Data:', $priceData);
        \Log::info('Energy Certificates:', $energyCertificates);
    //    \Log::info('Sections:', $sections);

        if (!auth()->check()) {
            session()->flash('error', 'Sie müssen eingeloggt sein, um Daten zu speichern.');
            return;
        }

        DB::beginTransaction();

        try {
            // Hauptdaten speichern
            $property = ObjProperties::create([
                'user_id' => auth()->id(),
                'user_type' => $propertyData['userType'],
                'title' => $propertyData['title'],
                'property_type' => $propertyData['propertyType'],
                'category' => $propertyData['category'],
                'transaction_type' => $propertyData['transactionType'] ?? null,
                'looking_for_tenant' => $propertyData['lookingForTenant'],
                'country' => $propertyData['country'],
                'street' => $propertyData['street'],
                'zip' => $propertyData['zip'],
                'city' => $propertyData['city'],
                'latitude' => $propertyData['latitude'],
                'longitude' => $propertyData['longitude'],
                'contact_details' => $propertyData['contactDetails'],
                'ad_number' => strtoupper(uniqid('AD-')),
                'status' => 'pending',
            ]);

// **2. Fotos verknüpfen**
$temporaryDir = 'uploads/' . $this->temporaryUuid;
$finalDir = 'uploads/' . $property->id;

if (Storage::disk('public')->exists($temporaryDir)) {
    // Verschiebe alle Dateien und Unterverzeichnisse aus dem temporären Verzeichnis
    $files = Storage::disk('public')->allFiles($temporaryDir);

    foreach ($files as $file) {
        $newPath = str_replace($this->temporaryUuid, $property->id, $file);
        Storage::disk('public')->move($file, $newPath);
    }

    // Lösche das temporäre Verzeichnis
    Storage::disk('public')->deleteDirectory($temporaryDir);
}

// Aktualisiere die Datenbankeinträge
ObjPhotos::where('temporary_uuid', $this->temporaryUuid)->update([
    'property_id' => $property->id,
    'file_path' => DB::raw("REPLACE(file_path, '{$this->temporaryUuid}', '{$property->id}')"),
]);

// Nearby Places speichern
if (!empty($nearbyPlacesData)) {
    foreach ($nearbyPlacesData as $place) {
        ObjNearbyPlaces::create([
            'property_id' => $property->id,
            'place_id' => $place->id, // Verwende -> statt []
            'distance' => $place->distance, // Verwende -> statt []
        ]);
    }
}

            // Attribute speichern
            if (!empty($attributes)) {
                $property->attributes()->sync($attributes);
            }

            // Sections speichern
            if (!empty($sections)) {
                foreach ($sections as $section) {
                    ObjSections::create([
                        'property_id' => $property->id,
                        'headline' => $section['headline'],
                        'description' => $section['description'] ?? null,
                    ]);
                }
            }


        // **3. Detaildaten speichern**
        if (!empty($detailData)) {
        ObjDetails::create([
            'property_id' => $property->id,
            'area' => $detailData['area'] ?? null,
            'land_area' => $detailData['land_area'] ?? null,
            'rooms' => $detailData['rooms'] ?? null,
            'reference_number' => $detailData['reference_number'] ?? null,
            'divisible_min' => $detailData['divisible_min'] ?? null,
            'divisible_max' => $detailData['divisible_max'] ?? null,
            'furniture' => $detailData['furniture'] ?? null,
            'position' => $detailData['position'] ?? null,
            'available_from' => $detailData['available_from'] ?? null,
            'available_to' => $detailData['available_to'] ?? null,
            'max_persons' => $detailData['max_persons'] ?? null,
            'wg_size' => $detailData['wg_size'] ?? null,
            'build_year' => $detailData['build_year'] ?? null,
            'move_in' => $detailData['move_in'] ?? null,
            'seats' => $detailData['seats'] ?? null,
            'floor' => $detailData['floor'] ?? null,
            'window_area' => $detailData['window_area'] ?? null,
            'min_lease' => $detailData['min_lease'] ?? null,
            'preferences_gender' => $detailData['preferences_gender'] ?? null,
            'preferences_age_from' => $detailData['preferences_age_from'] ?? null,
            'preferences_age_to' => $detailData['preferences_age_to'] ?? null,
        ]);

    }



            // Preisdaten speichern
            if (!empty($priceData)) {
                ObjPrices::create([
                    'property_id' => $property->id,
                    'purchase_price' => $priceData['purchasePrice'] ?? null,
                    'cold_rent' => $priceData['coldRent'] ?? null,
                    'warm_rent' => $priceData['warmRent'] ?? null,
                    'maintenance_fee' => $priceData['maintenanceFee'] ?? null,
                    'capital_investment' => $priceData['capitalInvestment'] ?? false,
                    'renovation_depreciation' => $priceData['renovationDepreciation'] ?? false,
                    'historic_preservation' => $priceData['historicPreservation'] ?? false,
                    'additional_information' => $priceData['additionalInformation'] ?? null,
                    'price_per_square_meter' => $priceData['pricePerSquareMeter'] ?? null,
                    'parking_slots' => $priceData['parkingSlots'] ?? null,
                    'parking_price' => $priceData['parkingPrice'] ?? null,
                    'multiple_of_rent' => $priceData['multipleOfRent'] ?? null,
                    'utilities' => $priceData['utilities'] ?? null,
                    'heating_costs' => $priceData['heatingCosts'] ?? null,
                    'no_specification' => $priceData['noSpecification'] ?? null,
                    'price_per_sqm' => $priceData['pricePerSqm'] ?? null,
                    'number_parking_spaces' => $priceData['numberParkingSpaces'] ?? null,
                    'price_parking_space' => $priceData['priceParkingSpace'] ?? null,
                    'deposit' => $priceData['deposit'] ?? null,
                ]);
            }


            // Energiezertifikate speichern
            if (!empty($energyCertificates)) {
                foreach ($energyCertificates as $certificate) {
                    ObjEnergyCertificate::create([
                        'property_id' => $property->id,
                        'name' => $certificate['name'] ?? '',
                        'certificate_type' => $certificate['certificateType'] ?? '',
                        'building_type' => $certificate['buildingType'] ?? '',
                        'certificate_art' => $certificate['certificateArt'] ?? '',
                        'issue_date' => !empty($certificate['issueDate']) ? $certificate['issueDate'] : null,
                        'valid_until' => !empty($certificate['validUntil']) ? $certificate['validUntil'] : null,
                        'primary_energy_carrier' => $certificate['primaryEnergyCarrier'] ?? '',
                        'construction_year' => !empty($certificate['constructionYear']) ? $certificate['constructionYear'] : null,
                        'energy_consumption' => !empty($certificate['energyConsumption']) ? $certificate['energyConsumption'] : null,
                        'efficiency_class' => $certificate['efficiencyClass'] ?? '',
                        'water_included' => $certificate['waterIncluded'] ?? false,
                    ]);
                }
            }

            DB::commit();

            session()->flash('success', 'Die Daten wurden erfolgreich gespeichert.');
            return redirect()->route('properties.index');
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Speicherfehler:', [
                'message' => $e->getMessage(),
                'propertyData' => $propertyData,
                'priceData' => $priceData,
                'energyCertificates' => $energyCertificates,
            ]);
            session()->flash('error', 'Es gab einen Fehler beim Speichern: ' . $e->getMessage());
        }
    }

    public function openPreviewModal()
    {
        // Daten für die Vorschau laden
        $this->refreshCollectedDataForPreview();

        // Event auslösen
        $this->dispatch('open-preview-modal');
    }

    public function closePreviewModal()
{
    $this->dispatch('close-preview-modal');
}

    public function loadPreview()
    {
       // dd($this->collectedData);
        $this->dispatch('openPreview', $this->collectedData);
    }

    public function refreshCollectedDataForPreview()
    {
        $this->dispatch('updatePreviewData', $this->collectedData);
    }

    public function getPreviewData()
    {
        return [
            'temporaryUuid' => $this->temporaryUuid,
            'stepOne' => $this->stepOne,
            'stepTwo' => $this->stepTwo,
            'stepThree' => $this->stepThree,
        ];
    }

   public function render()
    {
        return view('livewire.frontend.rental-object.multi-step-form');
    }
}
