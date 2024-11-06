<div class="container">
    <h2>Seitenverwaltung</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <!-- Page Form -->
    <form wire:submit.prevent="{{ $editMode ? 'updatePage' : 'createPage' }}">
        <div class="form-group">
            <label>Titel</label>
            <input type="text" wire:model="title" class="form-control" required>
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" wire:model="slug" class="form-control" required>
            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Inhalt</label>
            <textarea wire:model="content" class="form-control"></textarea>
            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group form-check">
            <input type="checkbox" wire:model="is_active" class="form-check-input">
            <label>Aktiv</label>
        </div>



        <button type="submit" class="btn btn-{{ $editMode ? 'success' : 'primary' }}">
            {{ $editMode ? 'Aktualisieren' : 'Erstellen' }}
        </button>
        <button type="button" wire:click="resetFields" class="btn btn-secondary">Abbrechen</button>
    </form>

    <!-- Pages Table -->
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Titel</th>
                <th>Slug</th>
                <th>Aktiv</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->slug }}</td>
                    <td>{{ $page->is_active ? 'Ja' : 'Nein' }}</td>
                    <td>
                        <button wire:click="editPage({{ $page->id }})" class="btn btn-sm btn-primary">Bearbeiten</button>
                        <button wire:click="deletePage({{ $page->id }})" class="btn btn-sm btn-danger" onclick="confirm('Möchten Sie diese Seite wirklich löschen?') || event.stopImmediatePropagation()">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="mt-2">
        {{ $pages->links() }}
    </div>
</div>
