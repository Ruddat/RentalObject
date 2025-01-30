<div>
    <div class="mb-4">
        <input
            type="text"
            class="form-control"
            placeholder="Search recipients..."
            wire:model.debounce.300ms="search">
    </div>

    <div class="mb-4">
        <button class="btn btn-success" wire:click="addRecipient">Add New Recipient</button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($recipients as $recipient)
                    <tr>
                        <td>{{ $recipient->name }}</td>
                        <td>{{ $recipient->email }}</td>
                        <td>{{ ucfirst($recipient->customer_type) }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary" wire:click="editRecipient({{ $recipient->id }})">Edit</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No recipients found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $recipients->links() }}
    </div>

    @if ($showForm)
        <div class="modal show d-block" style="background: rgba(0, 0, 0, 0.5);">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $editingRecipient ? 'Edit Recipient' : 'Add New Recipient' }}</h5>
                        <button type="button" class="btn-close" wire:click="resetForm"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="saveRecipient">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-control" wire:model.defer="recipientData.name">
                                @error('recipientData.name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" wire:model.defer="recipientData.email">
                                @error('recipientData.email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" id="phone" class="form-control" wire:model.defer="recipientData.phone">
                                @error('recipientData.phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="is_active" class="form-label">Active</label>
                                <input type="checkbox" id="is_active" wire:model.defer="recipientData.is_active">
                            </div>

                            <div class="mb-3">
                                <label for="default_currency" class="form-label">Default Currency</label>
                                <select id="default_currency" class="form-select" wire:model.defer="recipientData.default_currency">
                                    <option value="EUR">EUR</option>
                                    <option value="USD">USD</option>
                                    <option value="GBP">GBP</option>
                                </select>
                                @error('recipientData.default_currency') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="e_invoice_format" class="form-label">E-Invoice Format</label>
                                <select id="e_invoice_format" class="form-select" wire:model.defer="recipientData.e_invoice_format">
                                    <option value="ZUGFeRD">ZUGFeRD</option>
                                    <option value="XRechnung">XRechnung</option>
                                </select>
                                @error('recipientData.e_invoice_format') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="newsletter_opt_in" class="form-label">Newsletter Opt-In</label>
                                <input type="checkbox" id="newsletter_opt_in" wire:model.defer="recipientData.newsletter_opt_in">
                            </div>

                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-secondary" wire:click="resetForm">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
