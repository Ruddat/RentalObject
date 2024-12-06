<div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="addProduct">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel2">Add Product</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="demo-form">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="name">Product Name <span class="text-danger">*</span>
                                :</label>
                            <input type="text" id="name" wire:model="name"class="form-control"
                                name="name" />
                            @error('name')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12">

                            <label for="description">Product Description
                                :</label>
                            <input type="text" id="description" wire:model="description"class="form-control"
                                name="description" required />
                        </div>

                        <div class="col-12 mt-2">
                            <hr>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <span class="btn btn-primary">add</span>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
