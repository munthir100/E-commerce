<div>
    <section id="ecommerce-searchbar" class="ecommerce-searchbar">
        <div class="row mt-1">
            <div class="col-sm-12">
                <div class="input-group input-group-merge">
                    <input wire:model.defer="searchTerm" wire:change="search" type="text" class="form-control search-product" id="shop-search" placeholder="Search Product" aria-label="Search..." aria-describedby="shop-search" wire:model.defer="searchTerm" />
                    <button wire:click="search" class="input-group-text"><i data-feather="search" class="text-muted"></i></button>
                </div>
            </div>
        </div>
    </section>
</div>