<div class="container mt-5">
    <h2>Seitenverwaltung</h2>
    <form wire:submit.prevent="{{ $editingPage ? 'updatePage' : 'savePage' }}">
        <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" id="title" wire:model="title" class="form-control">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" id="slug" wire:model="slug" class="form-control">
            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-check">
            <input type="checkbox" id="active" wire:model="active" class="form-check-input">
            <label for="active" class="form-check-label">Aktiv</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">{{ $editingPage ? 'Aktualisieren' : 'Speichern' }}</button>
    </form>
    <hr>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Titel</th>
                <th>Slug</th>
                <th>Aktiv</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->slug }}</td>
                    <td>{{ $page->active ? 'Ja' : 'Nein' }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" wire:click="editPage({{ $page->id }})">Bearbeiten</button>
                        <button class="btn btn-danger btn-sm" wire:click="deletePage({{ $page->id }})">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
