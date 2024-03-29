<div>
    <form wire:submit.prevent="save">
        <div class="col-12" style="text-align: end;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" wire:model.defer="is_active">
                <label class="form-check-label" for="inlineCheckbox1">{{__('Publish in store')}}</label>
            </div>
        </div>
        <div class="mb-1">
            <label class="form-label" for="basicSelect">{{__('Parent')}}</label>
            <select class="form-select" id="basicSelect" wire:model.defer="parent_id">
                @if ($category->parent_id != null)
                <option value="{{$category->parent_id}}" selected>{{$category->parent->title}}</option>
                @else
                <option value="">{{__('None')}}</option>
                @endif
                @if ($category->parent_id != null)
                <option value="">{{__('None')}}</option>
                @endif

                
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            @error('parent_id')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="mb-1">
            <label class="form-label" for="disabledSelect">{{__('title')}}</label>
            <input wire:model.defer="title" type="text" class="form-control" id="basicInput" placeholder="Enter title">
            @error('title')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="col-12" style="text-align: end;">
            <button class="btn btn-primary" type="submit">{{__('save')}}</button>
        </div>
    </form>
</div>