<div wire:ignore>
    <form class="form" wire:submit.prevent="save" enctype="multipart/form-data">
        <div class="row">

            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="first-name-column">{{__('product title')}} <span class="text-danger">*</span> </label>
                    <input type="text" id="first-name-column" class="form-control" placeholder="{{__('title')}}" wire:model="title" />
                    @error('title') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="row col-md-6">

                <div class="col-md-4 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="last-name-column" data-bs-toggle="tooltip" data-bs-placement="top" title="{{__('The stock keeping unit code, which is a distinctive code for links, symbols and numbers that distinguish each product in the store separately, and the code helps identify and track the products in the store and easily search.')}}">
                            {{__('product sku')}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                        </label>
                        <input type="number" class="form-control" placeholder="{{__('product sku')}}" wire:model="sku" />
                        @error('sku') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="city-column">{{__('quantity')}}</label>
                        <input type="number" id="city-column" class="form-control" placeholder="{{__('quantity')}}" wire:model="quantity" />
                        @error('quantity') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="mb-1">
                        <label class="form-label" for="country-floating" data-bs-toggle="tooltip" data-bs-placement="top" title="{{__('In the event that the product is in grams: Example: To convert 1 kilogram to the gram unit, 1 kilogram = 1 x 1000 = 1000 grams. And you write: 0.001')}}">
                            {{__('wheight')}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                        </label>
                        <input type="number" id="country-floating" class="form-control" wire:model="wheight" placeholder="{{__('wheight')}}" />
                        @error('wheight') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
            </div>

            <div class="row col-md-6">
                <div class="col-md-6 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="city-column">{{__('price')}}<span class="text-danger">*</span></label>
                        <input type="number" id="city-column" class="form-control" placeholder="{{__('price')}}" wire:model="price" />
                        @error('price') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="mb-1">
                        <label class="form-label" for="country-floating">{{__('product cost')}}</label>
                        <input type="number" id="country-floating" class="form-control" wire:model="cost" placeholder="{{__('hidden field from clients')}}" />
                        @error('cost') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                </div>
            </div>



            <div class="col-md-6 col-12">
                <label class="form-label" for="select2-multiple">{{__('Category')}}</label>
                <div class="input-group">

                    <select class="form-select form-select-lg" id="selectLarge" wire:model="category_id">
                        <option value="">{{__('select category')}}</option>
                        @forelse($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @empty
                        <option>{{__('no category found')}}</option>
                        @endforelse
                    </select>

                    <button class="btn btn-outline-primary waves-effect" id="button-addon2" type="button">
                        <a href="{{route('admin.categories.index')}}">
                            {{__('Add')}}
                        </a>
                    </button>
                </div>
                @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="col-12">
                <div class="mb-1">
                    <label class="form-label" for="city-column" data-bs-toggle="tooltip" data-bs-placement="top" title="{{__('It appears on the outer card of the product')}}">
                        {{__('short description')}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </label>
                    <input type="text" id="city-column" class="form-control" placeholder="{{__('short description e.g: discount of 40%')}}" wire:model="short_description" maxlength="20" />
                    @error('short_description') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>


            <div class="col-md-6 col-xs-12">
                <label for="formFile" class="form-label">{{__('Add image')}} ( {{__('Main')}} )</label>
                <input class="form-control" type="file" wire:model="image" wire:loading.attr="disabled" wire:loading.attr="disabled" required >
                @error('image') <small class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="col-md-6 col-xs-12">
                <label for="formFileMultiple" class="form-label">{{__('Add sub images')}}</label>
                <input class="form-control" type="file" wire:model="sub_images" id="formFileMultiple" multiple>
                @error('sub_images') <small class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="col-md-12">
                <div class="mb-1">
                    <label class="form-label" for="exampleFormControlTextarea1">{{__('description')}}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{__('Description')}}" wire:model="description"></textarea>
                    @error('description') <small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>






            <div class="col-md-12 mb-1">
                <div class="form-check form-check-primary form-switch">
                    <input type="checkbox" class="form-check-input" id="customSwitch3" wire:model="is_active">
                    <label class="form-check-label" for="customSwitch3">{{__('publish in store')}}</label>
                    @error('is_active') <span class="text-danger"> {{$message}} </span>@enderror
                </div>
            </div>



            <div class="col-12" style="text-align:end;">
                <button type="submit" class="btn btn-primary me-1">{{__('Save')}}</button>
                <button type="reset" class="btn btn-outline-secondary">{{__('Reset')}}</button>
            </div>
        </div>
    </form>
</div>