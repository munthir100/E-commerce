<div>
    <form method="post" wire:submit.prevent="removeFromWishlist">
        <input type="hidden" wire:model="product_id">
        <button type="submit" class="btn btn-light btn-wishlist">
            <i data-feather="heart" class="feather feather-heart text-danger"></i>
            <span>Wishlist</span>
        </button>
    </form>
</div>