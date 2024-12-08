<?php

namespace App\Services;

use Illuminate\Support\Facades\Schema;
use App\Models\SysSetting;

class SettingLoaderService
{
    public function load()
    {
        if (Schema::hasTable('sys_settings')) {
            $settings = SysSetting::all()->pluck('value', 'key')->toArray();
            config(['app.settings' => $settings]);
        }
    }
}
