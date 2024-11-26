<?php

namespace App\Livewire\Backend\Admin\PageManager;

use App\Models\ModLink;
use App\Models\ModCategory;
use App\Models\ModPage;
use Livewire\Component;

class ManageLinksComponent extends Component
{
    public $links, $label, $url, $categoryId, $pageId, $active = true, $order = 0, $editingLink = null;
    public $categories, $pages;

    protected $rules = [
        'label' => 'required|string|max:255',
        'url' => 'nullable|string|max:255',
        'categoryId' => 'nullable|exists:mod_categories,id',
        'pageId' => 'nullable|exists:mod_pages,id',
        'active' => 'boolean',
        'order' => 'nullable|integer',
    ];

    public function mount()
    {
        $this->loadLinks();
        $this->categories = ModCategory::orderBy('name')->get();
        $this->pages = ModPage::orderBy('title')->get();
    }

    public function loadLinks()
    {
        $this->links = ModLink::with(['category', 'page'])->orderBy('order')->get();
    }

    public function saveLink()
    {
        $this->validate();

        ModLink::create([
            'label' => $this->label,
            'url' => $this->url,
            'category_id' => $this->categoryId,
            'page_id' => $this->pageId,
            'active' => $this->active,
            'order' => $this->order,
        ]);

        $this->resetForm();
        $this->loadLinks();
        session()->flash('message', 'Link erfolgreich erstellt!');
    }

    public function editLink(ModLink $link)
    {
        $this->editingLink = $link->id;
        $this->label = $link->label;
        $this->url = $link->url;
        $this->categoryId = $link->category_id;
        $this->pageId = $link->page_id;
        $this->active = $link->active;
        $this->order = $link->order;
    }

    public function updateLink()
    {
        $this->validate();

        $link = ModLink::findOrFail($this->editingLink);
        $link->update([
            'label' => $this->label,
            'url' => $this->url,
            'category_id' => $this->categoryId,
            'page_id' => $this->pageId,
            'active' => $this->active,
            'order' => $this->order,
        ]);

        $this->resetForm();
        $this->loadLinks();
        session()->flash('message', 'Link erfolgreich aktualisiert!');
    }

    public function deleteLink(ModLink $link)
    {
        $link->delete();
        $this->loadLinks();
        session()->flash('message', 'Link erfolgreich gelöscht!');
    }

    public function resetForm()
    {
        $this->label = '';
        $this->url = '';
        $this->categoryId = null;
        $this->pageId = null;
        $this->active = true;
        $this->order = 0;
        $this->editingLink = null;
    }

    public function render()
    {
        return view('livewire.backend.admin.page-manager.manage-links-component');
    }
}
