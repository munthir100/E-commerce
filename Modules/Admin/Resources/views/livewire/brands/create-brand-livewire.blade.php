<div>
    <form method="post" wire:submit.prevent="save">
        <input type="hidden" wire:model="store_id">
        <input type="hidden" wire:model="user_id">
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
                <input type="text" wire:model="name" class="form-control" id="basicInput" placeholder="Enter email">
                @error('name')<small class="text-danger">{{$message}}</small>@enderror
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
        </div>
    </form>
</div>