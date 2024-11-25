<?php

namespace App\Livewire\Backend\Admin\TicketManager;

use Livewire\Component;
use App\Models\ModTicket;
use Illuminate\Validation\ValidationException;

class TicketManager extends Component
{
    public $tickets;
    public $title, $client, $priority, $status, $date, $due_date, $ticketId;

    protected $listeners = ['closeModal' => 'closeModal', 'openModal' => 'openModal'];

    public function mount()
    {
        $this->tickets = ModTicket::all();
    }

    public function create()
    {
        $this->resetForm();
        $this->dispatch('openModal');
    }

    public function store()
    {


        try {
            $this->validate([
                'title' => 'required|string|max:255',
                'client' => 'required|string|max:255',
                'priority' => 'required|string',
                'status' => 'required|string',
                'date' => 'required|date',
                'due_date' => 'required|date|after_or_equal:date',
            ]);

            ModTicket::create([
                'title' => $this->title,
                'client' => $this->client,
                'priority' => $this->priority,
                'status' => $this->status,
                'date' => $this->date,
                'due_date' => $this->due_date,
            ]);

            $this->dispatch('closeModal'); // Close modal on success
        } catch (ValidationException $e) {

           // dd($this->title, $this->client);

            $this->dispatch('validationFailed'); // Trigger JS to reopen modal
            throw $e; // Re-throw to allow Livewire to show errors
        }
    }

    public function edit($id)
    {
        $ticket = ModTicket::findOrFail($id);
        $this->ticketId = $ticket->id;
        $this->title = $ticket->title;
        $this->client = $ticket->client;
        $this->priority = $ticket->priority;
        $this->status = $ticket->status;
        $this->date = $ticket->date;
        $this->due_date = $ticket->due_date;

        $this->dispatch('openModal');
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'priority' => 'required|string',
            'status' => 'required|string',
            'date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:date',
        ]);

        $ticket = ModTicket::findOrFail($this->ticketId);
        $ticket->update([
            'title' => $this->title,
            'client' => $this->client,
            'priority' => $this->priority,
            'status' => $this->status,
            'date' => $this->date,
            'due_date' => $this->due_date,
        ]);

        $this->tickets = ModTicket::all();
        $this->dispatch('closeModal');
    }

    public function delete($id)
    {
        ModTicket::findOrFail($id)->delete();
        $this->tickets = ModTicket::all();
    }

    public function resetForm()
    {
        $this->title = '';
        $this->client = '';
        $this->priority = '';
        $this->status = '';
        $this->date = '';
        $this->due_date = '';
    }


    public function cancel()
    {
        $this->resetForm(); // Beispiel: Formularfelder zurücksetzen
        $this->dispatch('closeModal');
    }


    public function render()
    {
        return view('livewire.backend.admin.ticket-manager.ticket-manager');
    }
}
