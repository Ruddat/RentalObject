<div class="container mt-5">
    <h2>Links verwalten</h2>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="{{ $editingLink ? 'updateLink' : 'saveLink' }}" class="mb-4">
        <div class="form-group">
            <label for="label">Label</label>
            <input type="text" id="label" class="form-control" wire:model="label">
            @error('label') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" id="url" class="form-control" wire:model="url">
            @error('url') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="category">Kategorie</label>
            <select id="category" class="form-control" wire:model="categoryId">
                <option value="">Keine Kategorie</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('categoryId') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="page">Seite</label>
            <select id="page" class="form-control" wire:model="pageId">
                <option value="">Keine Seite</option>
                @foreach ($pages as $page)
                    <option value="{{ $page->id }}">{{ $page->title }}</option>
                @endforeach
            </select>
            @error('pageId') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
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
            {{ $editingLink ? 'Aktualisieren' : 'Speichern' }}
        </button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Label</th>
                <th>URL</th>
                <th>Kategorie</th>
                <th>Seite</th>
                <th>Aktiv</th>
                <th>Reihenfolge</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($links as $link)
                <tr>
                    <td>{{ $link->label }}</td>
                    <td>{{ $link->url }}</td>
                    <td>{{ $link->category->name ?? '-' }}</td>
                    <td>{{ $link->page->title ?? '-' }}</td>
                    <td>{{ $link->active ? 'Ja' : 'Nein' }}</td>
                    <td>{{ $link->order }}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" wire:click="editLink({{ $link->id }})">Bearbeiten</button>
                        <button class="btn btn-sm btn-danger" wire:click="deleteLink({{ $link->id }})">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
