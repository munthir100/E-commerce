@if($source === 'index')
<button type="button" class="btn btn-primary btn-cart move-cart" wire:click="addToCart">
    <i data-feather="shopping-cart"></i>
    <span class="add-to-cart">Move to cart</span>
</button>
@else
<button type="submit" class="btn btn-primary btn-cart" wire:click="addToCart">
    <i data-feather="shopping-cart"></i>
    <span>Add To Cart</span>
</button>
@endif