<div>
    <!-- Flash-Messages -->
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="mb-4">
        <h2>Attributgruppen</h2>
        <ul>
            @foreach ($groups as $group)
                <li>
                    <strong>{{ $group->name }}</strong>
                    <button wire:click="deleteGroup({{ $group->id }})" class="btn btn-danger btn-sm">Löschen</button>
                </li>
            @endforeach
        </ul>

        <input type="text" wire:model="newGroupName" placeholder="Neue Gruppe hinzufügen" class="form-control">
        <button wire:click="addGroup" class="btn btn-primary mt-2">Gruppe hinzufügen</button>
    </div>

    <div class="mb-4">
        <h2>Attribute</h2>
        <select wire:model="selectedGroup" class="form-control">
            <option value="">Wähle eine Gruppe</option>
            @foreach ($groups as $group)
                <option value="{{ $group->id }}">{{ $group->name }}</option>
            @endforeach
        </select>

        @if ($attributes)
            <ul class="mt-3">
                @foreach ($attributes as $attribute)
                    <li>
                        {{ $attribute->name }}
                        <button wire:click="deleteAttribute({{ $attribute->id }})" class="btn btn-danger btn-sm">Löschen</button>
                    </li>
                @endforeach
            </ul>
        @endif

        <input type="text" wire:model="newAttributeName" placeholder="Neues Attribut hinzufügen" class="form-control mt-3">
        <button wire:click="addAttribute" class="btn btn-primary mt-2" @if (!$selectedGroup) disabled @endif>Attribut hinzufügen</button>
    </div>
</div>
