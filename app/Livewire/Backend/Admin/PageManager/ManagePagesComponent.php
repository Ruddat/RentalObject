<?php

namespace App\Livewire\Backend\Admin\PageManager;

use App\Models\ModPage;
use Livewire\Component;
use Illuminate\Support\Str;

class ManagePagesComponent extends Component
{
    public $pages, $title, $slug, $active = true, $editingPage = null;

    protected $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255|unique:mod_pages,slug',
        'active' => 'boolean',
    ];

    public function mount()
    {
        $this->loadPages();
    }

    public function loadPages()
    {
        $this->pages = ModPage::orderBy('created_at', 'desc')->get();
    }

    public function savePage()
    {
        $this->validate();

        if (!$this->slug) {
            $this->slug = Str::slug($this->title);
        }

        ModPage::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'active' => $this->active,
        ]);

        $this->resetForm();
        $this->loadPages();
        session()->flash('message', 'Seite erfolgreich erstellt!');
    }

    public function editPage(ModPage $page)
    {
        $this->editingPage = $page->id;
        $this->title = $page->title;
        $this->slug = $page->slug;
        $this->active = $page->active;
    }

    public function updatePage()
    {
        $this->validate();

        $page = ModPage::findOrFail($this->editingPage);
        $page->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'active' => $this->active,
        ]);

        $this->resetForm();
        $this->loadPages();
        session()->flash('message', 'Seite erfolgreich aktualisiert!');
    }

    public function deletePage(ModPage $page)
    {
        $page->delete();
        $this->loadPages();
        session()->flash('message', 'Seite erfolgreich gelöscht!');
    }

    public function resetForm()
    {
        $this->title = '';
        $this->slug = '';
        $this->active = true;
        $this->editingPage = null;
    }

    public function render()
    {
        return view('livewire.backend.admin.page-manager.manage-pages-component');
    }
}
