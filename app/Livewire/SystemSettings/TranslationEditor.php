<?php

namespace App\Livewire\SystemSettings;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AutoTranslations;

class TranslationEditor extends Component
{
    use WithPagination;

    public $search = '';
    public $editMode = false;
    public $editId;
    public $key;
    public $locale;
    public $text;
    public $confirmingDelete = false;
    public $deleteId;

    protected $rules = [
        'key' => 'required|string',
        'locale' => 'required|string',
        'text' => 'required|string',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function editTranslation($id)
    {
        $this->editMode = true;
        $translation = AutoTranslations::findOrFail($id);
        $this->editId = $translation->id;
        $this->key = $translation->key;
        $this->locale = $translation->locale;
        $this->text = $translation->text;
    }

    public function updateTranslation()
    {
        $this->validate();

        AutoTranslations::findOrFail($this->editId)->update([
            'key' => $this->key,
            'locale' => $this->locale,
            'text' => $this->text,
        ]);

        $this->resetForm();
        session()->flash('message', 'Translation updated successfully.');
    }

    public function confirmDelete($id)
    {
        $this->confirmingDelete = true;
        $this->deleteId = $id;
    }

    public function deleteTranslation()
    {
        AutoTranslations::findOrFail($this->deleteId)->delete();
        $this->confirmingDelete = false;
        $this->deleteId = null;
        session()->flash('message', 'Translation deleted successfully.');
    }

    public function resetForm()
    {
        $this->editMode = false;
        $this->editId = null;
        $this->key = '';
        $this->locale = '';
        $this->text = '';
    }

    public function render()
    {
        $translations = AutoTranslations::where('key', 'like', '%' . $this->search . '%')
                            ->orWhere('text', 'like', '%' . $this->search . '%')
                            ->paginate(10);

        return view('livewire.system-settings.translation-editor', [
            'translations' => $translations,
        ]);
    }

    public function paginationView()
    {
        return 'livewire.custom-pagination-links-view';
    }

}
