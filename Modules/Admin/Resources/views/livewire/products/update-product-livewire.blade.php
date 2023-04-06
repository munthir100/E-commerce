<div>
    <form class="form" wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="first-name-column">{{__('product title')}} <span class="text-danger">*</span> </label>
                    <input type="text" id="first-name-column" class="form-control" placeholder="{{__('product title')}}" wire:model="title" />
                    @error('title') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="row col-md-6">

                <div class="col-md-4 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="last-name-column">{{__('product sku')}}</label>
                        <input type="text" id="last-name-column" class="form-control" placeholder="{{__('product sku')}}" wire:model="sku" />
                        @error('sku') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="city-column">{{__('quantity')}}</label>
                        <input type="text" id="city-column" class="form-control" placeholder="{{__('quantity')}}" wire:model="quantity" />
                        @error('quantity') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="mb-1">
                        <label class="form-label" for="country-floating">{{__('wheight')}}</label>
                        <input type="text" id="country-floating" class="form-control" wire:model="wheight" placeholder="{{__('wheight')}}" />
                        @error('wheight') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
            </div>

            <div class="row col-md-6">
                <div class="col-md-6 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="city-column">{{__('price')}}<span class="text-danger">*</span></label>
                        <input type="text" id="city-column" class="form-control" placeholder="{{__('price')}}" wire:model="price" />
                        @error('price') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="country-floating">{{__('product cost')}}</label>
                        <input type="text" id="country-floating" class="form-control" wire:model="cost" placeholder="{{__('hidden field from clients')}}" />
                        @error('cost') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
            </div>



            <div class="col-md-6 col-12">
                <label class="form-label" for="select2-multiple">{{__('Category')}}</label>
                <div class="input-group mb-1">

                    <select class="form-select form-select-lg" id="selectLarge" wire:model="category_id">
                        <option value="">{{__('No Category')}}</option>
                        @forelse($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @empty
                        <option>{{__('no category found')}}</option>
                        @endforelse
                    </select>


                    <button class="btn btn-outline-primary waves-effect" id="button-addon2" type="button">{{__('Add')}}</button>
                </div>
                @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="col-md-8 col-12">
                <div class="mb-1">
                    <label class="form-label" for="city-column">{{__('short description')}}</label>
                    <input type="text" id="city-column" class="form-control" placeholder="{{__('short description e.g: discount of 40%')}}" wire:model="short_description" maxlength="20" />
                    @error('short_description') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>


            <div class="col-md-12">
                <div class="mb-1">
                    <label class="form-label" for="exampleFormControlTextarea1">{{__('description')}}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{__('Description')}}" wire:model="description"></textarea>
                    @error('description') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>

            <div class="col-md-12 mb-1">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="inlineCheckbox1" type="checkbox" wire:model="is_active">
                    <label class="form-check-label" for="inlineCheckbox1">{{__('publish in store')}}</label>
                    @error('is_active') <span class="text-danger"> {{$message}} </span>@enderror
                </div>
            </div>

            <div class="col-12" style="text-align:end;">
                <button type="submit" class="btn btn-primary me-1">{{__('Save')}}</button>
            </div>
        </div>
    </form>
</div>