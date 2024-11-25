<?php

namespace App\Http\Controllers\Backend\Admin\PagesSystem;

use App\Models\ModLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterLinksController extends Controller
{
    /**
     * Liefert die Footer-Links, aufgeteilt in Kategorien.
     *
     * @return array
     */
    public static function getFooterLinks(): array
    {
        return [
            'categories' => ModLink::where('active', true)->where('category', 'categories')->orderBy('order')->get(),
            'company' => ModLink::where('active', true)->where('category', 'company')->orderBy('order')->get(),
            'legal' => ModLink::where('active', true)->where('category', 'legal')->orderBy('order')->get(),
        ];
    }
}
