<?php

namespace App\Livewire\Backend\Admin\ProfileSettings;

use Livewire\Component;

class SettingsNavigationComponent extends Component
{


    public $tabs = [
        'profile' => ['icon' => 'ph-user-circle-gear', 'label' => 'Profile'],
        'activity' => ['icon' => 'ph-alarm', 'label' => 'Activity'],
        'security' => ['icon' => 'ph-shield-check', 'label' => 'Security'],
        'privacy' => ['icon' => 'ph-lock-open', 'label' => 'Privacy'],
        'notification' => ['icon' => 'ph-notification', 'label' => 'Notification'],
        'subscription' => ['icon' => 'ph-bell-simple', 'label' => 'Subscription'],
        'connection' => ['icon' => 'ph-graph', 'label' => 'Connection'],
        'delete' => ['icon' => 'ph-trash', 'label' => 'Delete'],
    ];

    public $activeTab = 'profile';

    public function switchTab($tab)
    {
        if (array_key_exists($tab, $this->tabs)) {
            $this->activeTab = $tab;

            // Trigger Daten-Logik, wenn `ActivityTab` aktiv ist
            if ($tab === 'activity') {
                $this->dispatch('loadActivityData');
            }
        }
    }

    public function render()
    {
        return view('livewire.backend.admin.profile-settings.settings-navigation-component');
    }
}
