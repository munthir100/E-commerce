<div>
    <form class="form" wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="first-name-column">{{translate('product title')}} <span class="text-danger">*</span> </label>
                    <input type="text" id="first-name-column" class="form-control" placeholder="{{translate('product title')}}" wire:model="title" />
                    @error('title') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="row col-md-6">

                <div class="col-md-4 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="last-name-column">{{translate('product sku')}}</label>
                        <input type="text" id="last-name-column" class="form-control" placeholder="{{translate('product sku')}}" wire:model="sku" />
                        @error('sku') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="city-column">{{translate('quantity')}}</label>
                        <input type="text" id="city-column" class="form-control" placeholder="{{translate('quantity')}}" wire:model="quantity" />
                        @error('quantity') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="mb-1">
                        <label class="form-label" for="country-floating">{{translate('wheight')}}</label>
                        <input type="text" id="country-floating" class="form-control" wire:model="wheight" placeholder="{{translate('wheight')}}" />
                        @error('wheight') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
            </div>

            <div class="row col-md-6">
                <div class="col-md-6 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="city-column">{{translate('price')}}<span class="text-danger">*</span></label>
                        <input type="text" id="city-column" class="form-control" placeholder="{{translate('price')}}" wire:model="price" />
                        @error('price') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="country-floating">{{translate('product cost')}}</label>
                        <input type="text" id="country-floating" class="form-control" wire:model="cost" placeholder="{{translate('hidden field from clients')}}" />
                        @error('cost') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
            </div>



            <div class="col-md-6 col-12">
                <label class="form-label" for="select2-multiple">{{translate('Category')}}</label>
                <div class="input-group mb-1">

                    <select class="form-select form-select-lg" id="selectLarge" wire:model="category_id">
                        <option value="">{{translate('No Category')}}</option>
                        @forelse($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @empty
                        <option>{{translate('no category found')}}</option>
                        @endforelse
                    </select>


                    <button class="btn btn-outline-primary waves-effect" id="button-addon2" type="button">{{translate('Add')}}</button>
                </div>
                @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="col-md-8 col-12">
                <div class="mb-1">
                    <label class="form-label" for="city-column">{{translate('short description')}}</label>
                    <input type="text" id="city-column" class="form-control" placeholder="{{translate('short description e.g: discount of 40%')}}" wire:model="short_description" maxlength="20" />
                    @error('short_description') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>


            <div class="col-md-12">
                <div class="mb-1">
                    <label class="form-label" for="exampleFormControlTextarea1">{{translate('description')}}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{translate('Description')}}" wire:model="description"></textarea>
                    @error('description') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="inlineCheckbox1" type="checkbox" wire:model="is_active">
                    <label class="form-check-label" for="inlineCheckbox1">{{translate('publish in store')}}</label>
                    @error('is_active') <span class="text-danger"> {{$message}} </span>@enderror
                </div>
            </div>

            <div class="col-12" style="text-align:end;">
                <button type="submit" class="btn btn-primary me-1">{{translate('Save')}}</button>
            </div>
        </div>
    </form>
</div>