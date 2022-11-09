<div>
    <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" wire:submit.prevent="store">
        <div class="row">
            <div class="col-6">
                <label class="form-label" for="modalAddCardNumber">Title</label>
                <div class="input-group input-group-merge">
                    <input id="modalAddCardNumber" wire:model="title" class="form-control add-credit-card-mask" type="text" placeholder="Category Title" aria-describedby="modalAddCard2" data-msg="Please enter your credit card number" />
                </div>
                @error('title') <small class="text-danger"> this field is required </small> @enderror
            </div>
            <div class="col-6">
                <label class="form-label" for="modalAddCardNumber">Parent Category</label>
                <select class="form-select" id="selectLarge" wire:model="parent_id">
                    <option selected="" value="1">Main Categoru</option>
                </select>
                @error('parent_id') <small class="text-danger"> this field is required </small> @enderror
            </div>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-primary me-1 mt-1">Submit</button>
            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                Cancel
            </button>
        </div>
    </form>
    <script>
        window.addEventListener('closeModal', event => {
            $('#addCategory').modal('hide');
        })
    </script>
</div>