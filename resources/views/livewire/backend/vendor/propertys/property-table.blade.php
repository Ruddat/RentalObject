<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Immobilienübersicht</h5>
            <button class="btn btn-primary">Neue Immobilie hinzufügen</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Titel</th>
                            <th>Typ</th>
                            <th>Adresse</th>
                            @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('superadmin'))
                                <th>Benutzer</th> <!-- Zeigt den Benutzer für Admins an -->
                            @endif
                            <th>Aktionen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($properties as $property)
                        <tr>
                            <td>{{ $property->id }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ $property->getMediumPhotoPath() }}" alt="Property Thumbnail" class="img-thumbnail" style="width: 60px; height: auto;">
                                    </div>
                                    <div>
                                        <h6 class="mb-0">{{ $property->title }}</h6>
                                        <small class="text-muted">{{ $property->created_at->format('d.m.Y') }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $property->propertyType->name ?? 'Unbekannt' }}</td>
                            <td>{{ $property->street }}, {{ $property->zip }} {{ $property->city }}</td>
                            @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('superadmin'))
                            <td>{{ $property->user->name }}</td> <!-- Benutzernamen anzeigen -->
                            @endif
                            <td>
                                <button wire:click="selectProperty({{ $property->id }})" class="btn btn-sm btn-primary">
                                    Bearbeiten
                                </button>
                                <button wire:click="deleteProperty({{ $property->id }})" class="btn btn-sm btn-danger">
                                    Löschen
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $properties->links() }}
            </div>
        </div>
    </div>

<!-- Bearbeitungsbereich -->
@if($selectedProperty)
<div class="card mt-4">
    <div class="card-header">
        <h5>Bearbeiten: {{ $selectedProperty->title }}</h5>
        <button wire:click="loadEditComponent('ObjDetailsComponent')" class="btn btn-link">Details</button>
        <button wire:click="loadEditComponent('ObjFloors')" class="btn btn-link">Etagen</button>
        <button wire:click="loadEditComponent('ObjDocs')" class="btn btn-link">Dokumente</button>
        <button wire:click="loadEditComponent('PhotoManagerComponent')" class="btn btn-link">Fotos</button>
    </div>
    <div class="card-body">
        @if($editComponent)
            @livewire("backend.vendor.propertys.$editComponent", ['propertyId' => $selectedProperty->id], key($selectedProperty->id . $editComponent))
        @endif
    </div>
</div>
@endif

</div>
