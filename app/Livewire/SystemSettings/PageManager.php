<?php

namespace App\Livewire\SystemSettings;

use Livewire\Component;
use App\Models\SysPages;
use Livewire\WithPagination;

class PageManager extends Component
{
    use WithPagination;

    public $title, $slug, $content, $is_active = true, $editMode = false, $editId;

    protected $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|unique:pages,slug',
        'content' => 'nullable|string',
        'is_active' => 'boolean',
    ];

    public function resetFields()
    {
        $this->title = '';
        $this->slug = '';
        $this->content = '';
        $this->is_active = true;
        $this->editMode = false;
        $this->editId = null;
    }

    public function createPage()
    {
        $this->validate();

        SysPages::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 'Page created successfully.');
        $this->resetFields();
    }

    public function editPage($id)
    {
        $page = Page::findOrFail($id);
        $this->editMode = true;
        $this->editId = $page->id;
        $this->title = $page->title;
        $this->slug = $page->slug;
        $this->content = $page->content;
        $this->is_active = $page->is_active;
    }

    public function updatePage()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:pages,slug,' . $this->editId,
            'content' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        SysPages::findOrFail($this->editId)->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 'Page updated successfully.');
        $this->resetFields();
    }

    public function deletePage($id)
    {
        SysPages::findOrFail($id)->delete();
        session()->flash('message', 'Page deleted successfully.');
    }

    public function render()
    {
        return view('livewire.system-settings.page-manager', [
            'pages' => SysPages::paginate(10),
        ]);
    }
}
