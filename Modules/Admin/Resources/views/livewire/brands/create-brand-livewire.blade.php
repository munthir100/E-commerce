<div>
    <form method="post" wire:submit.prevent="save">

        <div class="modal-body">
            <div class="mb-1">
                <label class="form-label" for="selectLarge">{{__('Select Category')}}</label>
                <select class="form-select form-select-lg" id="selectLarge" wire:model.defer="category_id">
                    <option>{{__('Select Category')}}</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="mb-1">
                <label class="form-label" for="basicInput">{{__('brand name')}}</label>
                <input type="text" wire:model.defer="name" class="form-control" id="basicInput" placeholder="{{__('Brand name')}}">
                @error('name')<small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <div class="form-check form-switch form-check-primary me-25">
                        <input type="checkbox" class="form-check-input" id="saveCard" wire:model.lazy="is_active" />
                    </div>
                    <label class="form-check-label fw-bolder" for="saveCard">{{__('save brand in store')}}</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
        </div>
    </form>
</div>