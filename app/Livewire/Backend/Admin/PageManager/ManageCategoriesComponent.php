<?php

namespace App\Livewire\Backend\Admin\PageManager;

use App\Models\ModCategory;
use Livewire\Component;

class ManageCategoriesComponent extends Component
{
    public $categories, $name, $slug, $editingCategory = null;

    protected $rules = [
        'name' => 'required|string|max:255|unique:mod_categories,name',
        'slug' => 'nullable|string|max:255|unique:mod_categories,slug',
    ];

    public function mount()
    {
        $this->loadCategories();
    }

    public function loadCategories()
    {
        $this->categories = ModCategory::orderBy('name')->get();
    }

    public function saveCategory()
    {
        $this->validate();

        if (!$this->slug) {
            $this->slug = \Str::slug($this->name);
        }

        ModCategory::create([
            'name' => $this->name,
            'slug' => $this->slug,
        ]);

        $this->resetForm();
        $this->loadCategories();
        session()->flash('message', 'Kategorie erfolgreich erstellt!');
    }

    public function editCategory(ModCategory $category)
    {
        $this->editingCategory = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    public function updateCategory()
    {
        $this->validate();

        $category = ModCategory::findOrFail($this->editingCategory);
        $category->update([
            'name' => $this->name,
            'slug' => $this->slug,
        ]);

        $this->resetForm();
        $this->loadCategories();
        session()->flash('message', 'Kategorie erfolgreich aktualisiert!');
    }

    public function deleteCategory(ModCategory $category)
    {
        $category->delete();
        $this->loadCategories();
        session()->flash('message', 'Kategorie erfolgreich gelöscht!');
    }

    public function resetForm()
    {
        $this->name = '';
        $this->slug = '';
        $this->editingCategory = null;
    }

    public function render()
    {
        return view('livewire.backend.admin.page-manager.manage-categories-component');
    }
}
