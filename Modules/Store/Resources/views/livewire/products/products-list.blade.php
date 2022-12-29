<div>
    <section id="ecommerce-products" class="grid-view">

        @foreach($products as $product)
        <div class="card ecommerce-card">
            <div class="item-img text-center">
                <a href="{{route('store.product-details',[$storeLink,$product->id])}}">
                    <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/1.png" alt="img-placeholder" />
                </a>
            </div>
            <div class="card-body">
                <div class="item-wrapper">
                    <div class="item-rating">
                        <ul class="unstyled-list list-inline">
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                        </ul>
                    </div>
                    <div>
                        <h6 class="item-price">{{$product->price}}</h6>
                    </div>
                </div>
                <h6 class="item-name">
                    <a class="text-body" href="app-ecommerce-details.html">{{$product->title}}</a>
                    <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                </h6>
                <p class="card-text item-description">
                    {{$product->description}}
                </p>
            </div>
            <div class="item-options text-center">
                <div class="item-wrapper">
                    <div class="item-cost">
                        <h4 class="item-price">{{$product->price}}</h4>
                    </div>
                </div>
                <livewire:store::wishlist.add-to-wishlist :product="$product" />

                <livewire:client::add-to-cart :product="$product" />
            </div>
        </div>
        @endforeach
    </section>
</div>