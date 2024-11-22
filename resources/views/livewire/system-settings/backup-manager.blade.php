<div class="main-content">
    <div class="main-content-inner">
        <!-- Backup Management Section -->
        <div class="widget-box-2">

            @if(session()->has('message'))
                <div class="alert alert-success mb-3">{{ session('message') }}</div>
            @endif

            <!-- Start Backup Button -->
            <button wire:click="startBackup" class="btn btn-primary mb-3">
                <i data-feather="database"></i> Backup starten
            </button>

            <!-- Backup Table -->
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Backup-Datei</th>
                            <th>Erstellt am</th>
                            <th>Aktionen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($backups as $backup)
                            <tr>
                                <td>{{ $backup->file_name }}</td>
                                <td>{{ $backup->created_at->format('d.m.Y H:i:s') }}</td>
                                <td>
                                    <button wire:click="downloadBackup({{ $backup->id }})" class="btn btn-sm btn-success me-1"> <i data-feather="download"></i> Download</button>
                                    <button wire:click="deleteBackup({{ $backup->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Möchten Sie dieses Backup wirklich löschen?')"><i data-feather="trash-2"></i> Löschen</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
