<div>
    
    <section id="ecommerce-products" class="grid-view wishlist-items">

        @foreach($products as $product)
        <div class="card ecommerce-card">
            <div class="text-center">
                <a href="{{route('store.product-details',[$storeLink,$product->id])}}">
                    <img class="img-fluid card-img-top" src="{{ asset('storage/' . $product->image) }}" alt="img-placeholder" />
                </a>
            </div>
            <div class="card-body">
                <div class="item-wrapper">
                    <div class="item-rating">
                        <ul class="unstyled-list list-inline">
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                        </ul>
                    </div>
                    <div>
                        <h6 class="item-price">{{$product->price}}</h6>
                    </div>
                </div>
                <h6 class="item-name">
                    <a class="text-body" href="{{route('store.product-details',[$storeLink,$product->id])}}">{{$product->title}}</a>
                    <span class="card-text item-company"> <a href="#" class="company-name">{{$product->short_description}}</a></span>
                </h6>
                <p class="card-text item-description">
                    {{$product->description}}
                </p>
            </div>
            <div class="item-options text-center">
                <div class="item-wrapper">
                    <div class="item-cost">
                        <h4 class="item-price">${{$product->price}}</h4>
                    </div>
                </div>
                <livewire:store::wishlist.wishlist :product="$product" source="product-list" />

                <livewire:store::cart.add-to-cart :product="$product" source="product-list" />
            </div>
        </div>
        @endforeach
    </section>
</div>