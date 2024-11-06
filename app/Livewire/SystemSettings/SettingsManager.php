<?php

namespace App\Livewire\SystemSettings;

use Livewire\Component;
use App\Models\SysSetting;

class SettingsManager extends Component
{

    public $site_name;
    public $owner_name;
    public $facebook_url;
    public $twitter_url;
    public $instagram_url;

    public function mount()
    {
        $this->site_name = SysSetting::get('site_name', 'My Website');
        $this->owner_name = SysSetting::get('owner_name', 'Owner');
        $this->facebook_url = SysSetting::get('facebook_url');
        $this->twitter_url = SysSetting::get('twitter_url');
        $this->instagram_url = SysSetting::get('instagram_url');
    }

    public function save()
    {
        SysSetting::set('site_name', $this->site_name);
        SysSetting::set('owner_name', $this->owner_name);
        SysSetting::set('facebook_url', $this->facebook_url);
        SysSetting::set('twitter_url', $this->twitter_url);
        SysSetting::set('instagram_url', $this->instagram_url);

        session()->flash('message', 'Settings updated successfully.');
    }


    public function render()
    {
        return view('livewire.system-settings.settings-manager');
    }
}
