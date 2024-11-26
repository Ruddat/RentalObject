<div class="container mt-5">
    <h2>Kategorien verwalten</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="{{ $editingCategory ? 'updateCategory' : 'saveCategory' }}" class="mb-4">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" id="slug" class="form-control" wire:model="slug">
            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">
            {{ $editingCategory ? 'Aktualisieren' : 'Speichern' }}
        </button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" wire:click="editCategory({{ $category->id }})">Bearbeiten</button>
                        <button class="btn btn-sm btn-danger" wire:click="deleteCategory({{ $category->id }})">Löschen</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
