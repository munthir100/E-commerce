<div>
    <form wire:submit.prevent="save">
        <div class="col-12" style="text-align: end;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" wire:model="is_active">
                <label class="form-check-label" for="inlineCheckbox1">{{__('Publish in store')}}</label>
            </div>
        </div>
        <div class="mb-1">
            <label class="form-label" for="basicSelect">{{__('category')}}</label>
            <select class="form-select" id="basicSelect" wire:model="parent_id">
                <option value="{{$brand->category_id}}" selected>{{$brand->category->title}}</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="mb-1">
            <label class="form-label" for="disabledSelect">{{__('name')}}</label>
            <input wire:model="name" type="text" class="form-control" id="basicInput" placeholder="{{__('Enter name')}}">
            @error('name')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="col-12" style="text-align: end;">
            <button class="btn btn-primary" type="submit">{{__('save')}}</button>
        </div>
    </form>
</div>