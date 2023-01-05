<div class="item-quantity">
  <span class="quantity-title">Qty:</span>
  <div class="quantity-counter-wrapper">
    <div class="input-group input-group-sm">
      <div class="input-group-prepend">
        <button type="button" class="btn btn-primary btn-sm" wire:loading.attr="disabled" wire:click="decrementQuantity">-</i></button>
      </div>
      <input type="number" class="form-control border-0 text-center bg-light" wire:model.lazy="quantity" wire:change="updateQuantity" wire:loading.attr="disabled" style="width: 5rem;"/>
      <div class="input-group-append">
        <button type="button" class="btn btn-primary btn-sm" wire:loading.attr="disabled" wire:click="incrementQuantity">+</i></button>
      </div>
    </div>
  </div>
</div>
