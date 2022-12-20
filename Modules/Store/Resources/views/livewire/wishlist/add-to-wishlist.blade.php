<div>
    <form method="post" wire:submit.prevent="addToWishlist">
        <input type="hidden" wire:model="user_id">
        <input type="hidden" wire:model="product_id">
        
        <button type="submit" class="btn btn-light btn-wishlist">
            <i data-feather="heart"></i>
            <span>Wishlist</span>
        </button>
    </form>
</div>