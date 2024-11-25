<div class="container mt-5">
    <h2>Blöcke verwalten</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <!-- Seitenauswahl -->
    <div class="form-group mb-4">
        <label for="page-select">Seite auswählen</label>
        <select id="page-select" class="form-control" wire:model.live="pageId">
            <option value="">Bitte wählen</option>
            @foreach ($pages as $page)
                <option value="{{ $page->id }}">{{ $page->title }}</option>
            @endforeach
        </select>
        @error('pageId') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <!-- Formular für Blöcke -->
    @if ($pageId)
        <form wire:submit.prevent="{{ $editingBlock ? 'updateBlock' : 'saveBlock' }}" class="mb-4">
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" id="title" class="form-control" wire:model="title">
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="type">Typ</label>
                <select id="type" class="form-control" wire:model.live="type">
                    <option value="text">Text</option>
                    <option value="image">Bild</option>
                    <option value="gallery">Galerie</option>
                    <option value="accordion">Akkordeon</option>
                    <option value="pricing">Preise</option>
                    <option value="testimonial">testimonial</option>
                </select>
                @error('type') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Akkordeon-Eingaben -->
<!-- Akkordeon-Inhalte -->
@if ($type === 'accordion')
    <h5>Akkordeon-Inhalte</h5>
    @foreach ($accordionItems as $index => $item)
        <div class="mb-3">
            <label>Frage</label>
            <input type="text" class="form-control" wire:model="accordionItems.{{ $index }}.question">
            <label>Antwort</label>
            <textarea class="form-control" wire:model="accordionItems.{{ $index }}.answer"></textarea>
            <button type="button" class="btn btn-danger mt-2" wire:click="removeAccordionItem({{ $index }})">Entfernen</button>
        </div>
    @endforeach
    <button type="button" class="btn btn-primary mt-2" wire:click="addAccordionItem">+ Frage hinzufügen</button>
@endif
@if ($type === 'text')
    <div class="form-group">
        <label for="content">Inhalt</label>
        <div wire:ignore>
            <div id="quill-editor" style="height: 300px;">{!! $content !!}</div>
        </div>
        @error('content') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
@endif


            <div class="form-group">
                <label for="order">Reihenfolge</label>
                <input type="number" id="order" class="form-control" wire:model="order">
                @error('order') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-check">
                <input type="checkbox" id="active" class="form-check-input" wire:model="active">
                <label for="active" class="form-check-label">Aktiv</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">
                {{ $editingBlock ? 'Aktualisieren' : 'Speichern' }}
            </button>
        </form>


        @if ($type === 'testimonial')
        <h5>Testimonials</h5>
        @foreach ($testimonialItems as $index => $item)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-group">
                        <label for="quote-{{ $index }}">Zitat</label>
                        <textarea id="quote-{{ $index }}" class="form-control" wire:model="testimonialItems.{{ $index }}.quote"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author-{{ $index }}">Autor</label>
                        <input type="text" id="author-{{ $index }}" class="form-control" wire:model="testimonialItems.{{ $index }}.author">
                    </div>
                    <div class="form-group">
                        <label for="position-{{ $index }}">Position</label>
                        <input type="text" id="position-{{ $index }}" class="form-control" wire:model="testimonialItems.{{ $index }}.position">
                    </div>
                    <div class="form-group">
                        <label for="avatar-{{ $index }}">Avatar URL</label>
                        <input type="text" id="avatar-{{ $index }}" class="form-control" wire:model="testimonialItems.{{ $index }}.avatar">
                    </div>
                    <div class="form-group">
                        <label for="rating-{{ $index }}">Bewertung</label>
                        <input type="number" id="rating-{{ $index }}" class="form-control" wire:model="testimonialItems.{{ $index }}.rating" min="1" max="5">
                    </div>
                    <button class="btn btn-danger mt-2" wire:click="removeTestimonialItem({{ $index }})">- Testimonial entfernen</button>
                </div>
            </div>
        @endforeach
        <button class="btn btn-primary mt-3" wire:click="addTestimonialItem">+ Testimonial hinzufügen</button>
    @endif


        @if ($type === 'pricing')
        <h5>Pricing-Blöcke</h5>
        @foreach ($pricingItems as $index => $item)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-group">
                        <label for="price-{{ $index }}">Preis</label>
                        <input type="text" id="price-{{ $index }}" class="form-control" wire:model="pricingItems.{{ $index }}.price">
                    </div>
                    <div class="form-group">
                        <label for="title-{{ $index }}">Titel</label>
                        <input type="text" id="title-{{ $index }}" class="form-control" wire:model="pricingItems.{{ $index }}.title">
                    </div>
                    <div class="form-group">
                        <label for="description-{{ $index }}">Beschreibung</label>
                        <textarea id="description-{{ $index }}" class="form-control" wire:model="pricingItems.{{ $index }}.description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Features</label>
                        @foreach ($pricingItems[$index]['features'] as $featureIndex => $feature)
                            <div class="d-flex align-items-center mb-2">
                                <input type="text" class="form-control" wire:model="pricingItems.{{ $index }}.features.{{ $featureIndex }}">
                                <button class="btn btn-danger ms-2" wire:click="removeFeature({{ $index }}, {{ $featureIndex }})">-</button>
                            </div>
                        @endforeach
                        <button class="btn btn-primary mt-2" wire:click="addFeature({{ $index }})">+ Feature hinzufügen</button>
                    </div>
                    <button class="btn btn-danger mt-2" wire:click="removePricingItem({{ $index }})">- Preisblock entfernen</button>
                </div>
            </div>
        @endforeach
        <button class="btn btn-primary mt-3" wire:click="addPricingItem">+ Preisblock hinzufügen</button>
    @endif

        <!-- Blöcke-Liste -->
        <table class="table table-striped" id="sortableTable">
            <thead>
                <tr>
                    <th></th>
                    <th>Reihenfolge</th>
                    <th>Titel</th>
                    <th>Typ</th>
                    <th>Inhalt</th>
                    <th>Aktionen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blocks as $block)
                <tr draggable="true" class="sortable-row" data-id="{{ $block->id }}">
                    <td><i class="ti ti-arrows-move fs-4 text-secondary"></i></td>
                    <td>{{ $block->order }}</td>
                    <td>{{ $block->title }}</td>
                    <td>{{ $block->type }}</td>
                        <td>
                            @if ($block->type === 'accordion')
                                <span class="badge bg-info">Akkordeon</span>
                            @else
                                {{ Str::limit($block->content, 50) }}
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-sm btn-warning" wire:click="editBlock({{ $block->id }})">Bearbeiten</button>
                            <button class="btn btn-sm btn-danger" wire:click="deleteBlock({{ $block->id }})">Löschen</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-danger">Bitte wähle eine Seite aus, um Blöcke hinzuzufügen oder anzuzeigen.</p>
    @endif

    
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>


    <script>
        let quill;

        function initializeQuill() {
            const editorElement = document.getElementById('quill-editor');
            if (editorElement) {
                // Quill-Editor-Instanz erstellen
                quill = new Quill(editorElement, {
                    theme: 'snow', // Standard-Theme
                    placeholder: 'Text hier eingeben...',
                });

                // Livewire bei Änderungen benachrichtigen
                quill.on('text-change', function () {
                    @this.set('content', quill.root.innerHTML);
                });
            }
        }

        // Quill beim Laden der Seite und nach Livewire-Updates initialisieren
        document.addEventListener('DOMContentLoaded', () => {
            initializeQuill();
        });

        document.addEventListener('livewire:update', () => {
            initializeQuill();
        });

        // Optional: Livewire-Reset-Event für Quill
        Livewire.on('resetEditor', () => {
            if (quill) {
                quill.root.innerHTML = '';
            }
        });
    </script>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const sortableTable = document.getElementById('sortableTable');
    if (sortableTable) {
        const sortable = new Sortable(sortableTable.querySelector('tbody'), {
            animation: 150,
            onEnd: function (evt) {
                let rows = sortableTable.querySelectorAll('tbody tr');
                let order = [];

                rows.forEach((row, index) => {
                    const id = row.getAttribute('data-id');
                    if (id && !isNaN(id)) {
                        order.push({ id: parseInt(id), position: index + 1 });
                    }
                });

                @this.call('updateUserOrder', order);
            }
        });
    }
});
</script>


