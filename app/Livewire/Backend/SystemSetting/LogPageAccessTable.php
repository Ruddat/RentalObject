<?php

namespace App\Livewire\Backend\SystemSetting;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PageAccessLog;
use Livewire\WithoutUrlPagination;

class LogPageAccessTable extends Component
{
use WithPagination;

public $search = '';

public function updatingSearch()
{
    $this->resetPage();
}

public function render()
{
    $logs = PageAccessLog::where('url', 'like', '%' . $this->search . '%')
        ->orWhere('user_agent', 'like', '%' . $this->search . '%')
        ->orWhere('ip', 'like', '%' . $this->search . '%')
        ->orderBy('created_at', 'desc')
        ->paginate(30);

    return view('livewire.backend.system-setting.log-page-access-table', [
        'logs' => $logs,
    ]);
}

public function paginationView()
{
    return 'livewire.custom-pagination-links-view';
}

}

