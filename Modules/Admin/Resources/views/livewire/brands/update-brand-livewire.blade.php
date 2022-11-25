<div>
    <form wire:submit.prevent="save">
        <div class="mb-1">
            <label class="form-label" for="basicSelect">category</label>
            <select class="form-select" id="basicSelect" wire:model="category_id">
                <option value="{{$brand->category_id}}" selected>{{$brand->category->title}}</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="mb-1">
            <label class="form-label" for="disabledSelect">name</label>
            <input wire:model="name" type="text" class="form-control" id="basicInput" placeholder="Enter name">
            @error('name')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="col-12" style="text-align: end;">
            <button class="btn btn-primary" type="submit">save</button>
        </div>
    </form>
</div>