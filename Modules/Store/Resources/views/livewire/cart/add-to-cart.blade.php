@if($source === 'productDetails')
<button class="btn btn-primary me-0 me-sm-1 mb-1 mb-sm-0" wire:click="addToCart">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart me-50">
        <circle cx="9" cy="21" r="1"></circle>
        <circle cx="20" cy="21" r="1"></circle>
        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
    </svg>
    <span class="add-to-cart">{{translate('Add to cart')}}</span>
</button>
@elseif($source === 'index')
<button type="button" class="btn btn-primary btn-cart" wire:click="addToCart">
    <i data-feather="shopping-cart"></i>
    <span class="add-to-cart">{{translate('Move to cart')}}</span>
</button>
@else
<button type="submit" class="btn btn-primary btn-cart" wire:click="addToCart">
    <i data-feather="shopping-cart"></i>
    <span>{{translate('Add To Cart')}}</span>
</button>
@endif