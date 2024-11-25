<?php

namespace App\Livewire\Backend\Admin\PageManager;

use App\Models\ModBlock;
use App\Models\ModPage;
use Livewire\Component;

class ManageBlocksComponent extends Component
{
    public $blocks, $title, $content, $type = 'text', $order, $active = true, $editingBlock = null;
    public $pageId, $pages, $pricingItems = [], $testimonialItems = [], $accordionItems = [];

    protected $rules = [
        'pageId' => 'required|exists:mod_pages,id',
        'title' => 'required|string|max:255',
        'content' => 'nullable|string',
        'type' => 'required|string|in:text,image,gallery,accordion,pricing,testimonial',
        'order' => 'nullable|integer',
        'active' => 'boolean',
    ];

    public function mount()
    {
        $this->pages = ModPage::orderBy('title')->get();
        $this->pageId = $this->pages->first()->id ?? null;
        $this->loadBlocks();
    }

    public function updatedPageId()
    {
        $this->loadBlocks();
    }

    public function loadBlocks()
    {
        $this->blocks = $this->pageId ? ModBlock::where('page_id', $this->pageId)->orderBy('order')->get() : [];
    }

    public function saveBlock()
    {
        $this->validate();

        // Spezifische Content-Verarbeitung je nach Typ
        if ($this->type === 'pricing') {
            $this->content = json_encode($this->pricingItems);
        } elseif ($this->type === 'testimonial') {
            $this->content = json_encode($this->testimonialItems);
        } elseif ($this->type === 'accordion') {
            $this->content = json_encode($this->accordionItems);
        }

        ModBlock::create([
            'title' => $this->title,
            'content' => $this->content,
            'type' => $this->type,
            'order' => $this->order,
            'active' => $this->active,
            'page_id' => $this->pageId,
        ]);

        $this->resetForm();
        $this->loadBlocks();
        session()->flash('message', 'Block erfolgreich hinzugefügt!');
    }

    public function editBlock(ModBlock $block)
    {
        $this->editingBlock = $block->id;
        $this->title = $block->title;
        $this->content = $block->content;
        $this->type = $block->type;
        $this->order = $block->order;
        $this->active = $block->active;

        if ($this->type === 'pricing') {
            $this->pricingItems = json_decode($block->content, true) ?? [];
        } elseif ($this->type === 'testimonial') {
            $this->testimonialItems = json_decode($block->content, true) ?? [];
        } elseif ($this->type === 'accordion') {
            $this->accordionItems = json_decode($block->content, true) ?? [];
        }
    }

    public function updateBlock()
    {
        $this->validate();

        if ($this->type === 'pricing') {
            $this->content = json_encode($this->pricingItems);
        } elseif ($this->type === 'testimonial') {
            $this->content = json_encode($this->testimonialItems);
        } elseif ($this->type === 'accordion') {
            $this->content = json_encode($this->accordionItems);
        }

        $block = ModBlock::findOrFail($this->editingBlock);
        $block->update([
            'title' => $this->title,
            'content' => $this->content,
            'type' => $this->type,
            'order' => $this->order,
            'active' => $this->active,
        ]);

        $this->resetForm();
        $this->loadBlocks();
        session()->flash('message', 'Block erfolgreich aktualisiert!');
    }

    public function deleteBlock(ModBlock $block)
    {
        $block->delete();
        $this->loadBlocks();
        session()->flash('message', 'Block erfolgreich gelöscht!');
    }

    public function addAccordionItem()
    {
        $this->accordionItems[] = [
            'question' => '',
            'answer' => '',
        ];
    }

    public function removeAccordionItem($index)
    {
        unset($this->accordionItems[$index]);
        $this->accordionItems = array_values($this->accordionItems);
    }


    public function addPricingItem()
    {
        $this->pricingItems[] = [
            'price' => '',
            'duration' => '/month',
            'title' => '',
            'description' => '',
            'features' => [], // Eine leere Liste für die Features
        ];
    }

    public function removePricingItem($index)
    {
        unset($this->pricingItems[$index]);
        $this->pricingItems = array_values($this->pricingItems); // Neu indizieren
    }

    public function addFeature($pricingIndex)
    {
        $this->pricingItems[$pricingIndex]['features'][] = '';
    }

    public function removeFeature($pricingIndex, $featureIndex)
    {
        unset($this->pricingItems[$pricingIndex]['features'][$featureIndex]);
        $this->pricingItems[$pricingIndex]['features'] = array_values($this->pricingItems[$pricingIndex]['features']); // Reindizieren
    }


    public function updateUserOrder($order)
    {
        \Log::info('Order received', ['order' => $order]);

        foreach ($order as $item) {
            if (isset($item['id']) && isset($item['position'])) {
                $block = ModBlock::find($item['id']);
                if ($block) {
                    $block->order = $item['position'];
                    $block->save();
                }
            }
        }

        $this->loadBlocks();
        session()->flash('message', 'Blöcke erfolgreich neu sortiert!');
    }



public function resetForm()
{
    $this->title = '';
    $this->content = '';
    $this->type = 'text';
    $this->order = 0;
    $this->active = true;
    $this->editingBlock = null;
    $this->pricingItems = [];
    $this->testimonialItems = [];
    $this->accordionItems = [];

    $this->dispatch('resetEditor');
}


    public function render()
    {
        return view('livewire.backend.admin.page-manager.manage-blocks-component');
    }
}
