<?php

namespace App\Livewire\Backend\Admin\ProfileSettings;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\SysUserTimeLog;
use Illuminate\Support\Facades\Auth;

class UserTimeSpentChart extends Component
{
    public $timeSpentData = [];
    public $averageTimeData = [];

    public function mount()
    {
        $this->loadChartData();
    }

    public function loadChartData()
    {
        $userId = Auth::id();

        // Daten abrufen und nach Datum gruppieren
        $logs = SysUserTimeLog::where('user_id', $userId)
            ->selectRaw('DATE(created_at) as date, SUM(time_spent) as total_time')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        // Durchschnittliche Zeit berechnen
        $totalTime = $logs->sum('total_time');
        $daysCount = $logs->count();
        $averageTime = $daysCount > 0 ? round($totalTime / $daysCount / 60, 2) : 0; // In Minuten

        // Daten für den Chart formatieren
        $this->timeSpentData = [
            'categories' => $logs->pluck('date')->map(function ($date) {
                return Carbon::parse($date)->format('Y-m-d'); // Formatieren des Datums
            })->toArray(),
            'timeSpent' => $logs->pluck('total_time')->map(function ($time) {
                return round($time / 60, 2); // In Minuten umrechnen
            })->toArray(),
        ];

        // Durchschnittsdaten für jede Kategorie (Konstante Linie)
        $this->averageTimeData = array_fill(0, $daysCount, $averageTime);
    }

    public function render()
    {
        return view('livewire.backend.admin.profile-settings.user-time-spent-chart');
    }
}
