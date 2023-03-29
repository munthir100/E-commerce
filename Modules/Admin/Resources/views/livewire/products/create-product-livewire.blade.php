<div>
    <form class="form" wire:submit.prevent="save" enctype="multipart/form-data">
        <div class="row">

            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="first-name-column">{{translate('product title')}} <span class="text-danger">*</span> </label>
                    <input type="text" id="first-name-column" class="form-control" placeholder="{{translate('title')}}" wire:model="title" />
                    @error('title') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="row col-md-6">

                <div class="col-md-4 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="last-name-column" data-bs-toggle="tooltip" data-bs-placement="top" title="{{translate('The stock keeping unit code, which is a distinctive code for links, symbols and numbers that distinguish each product in the store separately, and the code helps identify and track the products in the store and easily search.')}}">
                            {{translate('product sku')}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                        </label>
                        <input type="text" id="last-name-column" class="form-control" placeholder="{{translate('product sku')}}" wire:model="sku" />
                        @error('sku') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="city-column">{{translate('quantity')}}</label>
                        <input type="number" id="city-column" class="form-control" placeholder="{{translate('quantity')}}" wire:model="quantity" />
                        @error('quantity') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="mb-1">
                        <label class="form-label" for="country-floating" data-bs-toggle="tooltip" data-bs-placement="top" title="{{translate('In the event that the product is in grams: Example: To convert 1 kilogram to the gram unit, 1 kilogram = 1 x 1000 = 1000 grams. And you write: 0.001')}}">
                            {{translate('wheight')}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                        </label>
                        <input type="number" id="country-floating" class="form-control" wire:model="wheight" placeholder="{{translate('wheight')}}" />
                        @error('wheight') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
            </div>

            <div class="row col-md-6">
                <div class="col-md-6 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="city-column">{{translate('price')}}<span class="text-danger">*</span></label>
                        <input type="number" id="city-column" class="form-control" placeholder="{{translate('price')}}" wire:model="price" />
                        @error('price') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="country-floating">{{translate('product cost')}}</label>
                        <input type="number" id="country-floating" class="form-control" wire:model="cost" placeholder="{{translate('hidden field from clients')}}" />
                        @error('cost') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
            </div>



            <div class="col-md-6 col-12">
                <label class="form-label" for="select2-multiple">{{translate('Category')}}</label>
                <div class="input-group">

                    <select class="form-select form-select-lg" id="selectLarge" wire:model="category_id">
                        <option value="">{{translate('select category')}}</option>
                        @forelse($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @empty
                        <option>{{translate('no category found')}}</option>
                        @endforelse
                    </select>

                    <button class="btn btn-outline-primary waves-effect" id="button-addon2" type="button">
                        <a href="{{route('admin.categories.index')}}">
                            {{translate('Add')}}
                        </a>
                    </button>
                </div>
                @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="col-md-8 col-12">
                <div class="mb-1">
                    <label class="form-label" for="city-column" data-bs-toggle="tooltip" data-bs-placement="top" title="{{translate('It appears on the outer card of the product')}}">
                        {{translate('short description')}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </label>
                    <input type="text" id="city-column" class="form-control" placeholder="{{translate('short description e.g: discount of 40%')}}" wire:model="short_description" maxlength="20" />
                    @error('short_description') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>


            <div class="col-md-4 col-6">
                <label for="formFile" class="form-label">{{translate('Add image')}}</label>
                <input class="form-control" type="file" wire:model="images" wire:ignore multiple>
            </div>


            <div class="col-md-12">
                <div class="mb-1">
                    <label class="form-label" for="exampleFormControlTextarea1">{{translate('description')}}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{translate('Description')}}" wire:model="description"></textarea>
                    @error('description') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>


            <!-- <div class="col-12">
                <div class="mb-1">
                    <label class="form-label" for="city-column">short description</label>
                    <input type="file" class="form-control" wire:model="image" />
                    @error('image') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div> -->



            <div class="col-md-12">
                <div class="form-check form-check-primary form-switch">
                    <input type="checkbox" class="form-check-input" id="customSwitch3" wire:model="is_active">
                    <label class="form-check-label" for="customSwitch3">{{translate('publish in store')}}</label>
                    @error('is_active') <span class="text-danger"> {{$message}} </span>@enderror
                </div>
            </div>



            <div class="col-12" style="text-align:end;">
                <button type="submit" class="btn btn-primary me-1">{{translate('Save')}}</button>
                <button type="reset" class="btn btn-outline-secondary">{{translate('Reset')}}</button>
            </div>
        </div>
    </form>
</div>