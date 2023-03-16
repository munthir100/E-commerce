<div>
    <form method="post" wire:submit.prevent="save">

        <div class="modal-body">
            <div class="mb-1">
                <label class="form-label" for="selectLarge">Select Category</label>
                <select class="form-select form-select-lg" id="selectLarge" wire:model="category_id">
                    <option>Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="mb-1">
                <label class="form-label" for="basicInput">brand name</label>
                <input type="text" wire:model="name" class="form-control" id="basicInput" placeholder="Brand name">
                @error('name')<small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <div class="form-check form-switch form-check-primary me-25">
                        <input type="checkbox" class="form-check-input" id="saveCard" wire:model.lazy="is_active" />
                        <label class="form-check-label" for="saveCard">
                            <span class="switch-icon-left"><i data-feather="check"></i></span>
                            <span class="switch-icon-right"><i data-feather="x"></i></span>
                        </label>
                    </div>
                    <label class="form-check-label fw-bolder" for="saveCard">save brand in store</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>