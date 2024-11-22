<!-- resources/views/livewire/log-page-access-table.blade.php -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>Page Access Logs</h5>
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search Logs..." class="form-control" />
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-sm table-hover table-striped align-middle mb-0">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">URL</th>
                        <th scope="col">Method</th>
                        <th scope="col">IP</th>
                        <th scope="col">User Agent</th>
                        <th scope="col">User Id</th>
                        <th scope="col">Count</th>
                        <th scope="col">Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>{{ $log->id }}</td>
                            <td>{{ $log->url }}</td>
                            <td>{{ $log->method }}</td>
                            <td>{{ $log->ip }}</td>
                            <td>{{ $log->user_agent }}</td>
                            <td>{{ $log->user_id ?? 'Guest' }}</td>
                            <td>{{ $log->count }}</td>
                            <td>{{ $log->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <div class="small text-muted">
                    Showing {{ $logs->firstItem() }} to {{ $logs->lastItem() }} of {{ $logs->total() }} logs
                </div>
                <div>
                    {{ $logs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
