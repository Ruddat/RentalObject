<?php

namespace App\Http\Controllers\Backend\Admin\PagesSystem;

use App\Models\ModLink;
use App\Models\ModPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Zeigt eine Seite an.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */

     public function show($slug)
     {
         $page = ModPage::where('slug', $slug)->with('blocks')->firstOrFail();
         $blocks = $page->blocks;

         return view('rentalobj.dynamic-pages.show', compact('page', 'blocks'));
     }
}
