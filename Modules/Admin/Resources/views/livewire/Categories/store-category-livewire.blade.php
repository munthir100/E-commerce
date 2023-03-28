<div>
    <form id="addCategoryValidation" class="row gy-1 gx-2 mt-75" wire:submit.prevent="save">
        <div class="col-md-6">
            <label class="form-label" for="Title">{{translate('Title')}}</label>
            <div class="input-group input-group-merge">
                <input id="Title" wire:model.lazy="title" class="form-control add-credit-card-mask" type="text" placeholder="{{translate('Title')}}" />

            </div>
            @error('title') <small class="text-danger"> {{$message}} </small> @enderror
        </div>

        <div class="col-md-6 mb-1">
            <label class="form-label" for="select2-multiple">{{translate('Parent Category')}}</label>
            <select wire:model.lazy="parent_id" class="form-select" id="basicSelect">
                <option value="">{{translate('Select a parent')}}</option>
                @forelse($categories as $category)
                <option value="{{$category->id}}" id="row-{{$category->id}}">{{$category->title}}</option>
                @empty
                {{translate('no category found')}}
                @endforelse
            </select>
            @error('parent_id') <small class="text-danger"> {{$message}} </small> @enderror
        </div>



        <div class="col-12">
            <div class="d-flex align-items-center">
                <div class="form-check form-switch form-check-primary me-25">
                    <input type="checkbox" class="form-check-input" id="saveCard" wire:model.lazy="is_active" />
                </div>
                <label class="form-check-label fw-bolder" for="saveCard">{{translate('save category in store?')}}</label>
            </div>
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-1 mt-1">{{ translate('Save')}}</button>

            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                {{translate('Cancel')}}
            </button>
        </div>
    </form>
</div>