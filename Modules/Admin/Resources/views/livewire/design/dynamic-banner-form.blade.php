<div>
    @if (!$externalLink)
    <div class="row mb-2">
        <div class="col-xl-6 col-12">
            <select wire:model.defer="selectedType" id="type" class="form-select">
                <option value="">select option</option>
                <option value="product_link">Product link</option>
                <option value="category_link">Category link</option>
                <option value="brand_link">brand link</option>
                <option value="most_sales">most sales</option>
                <option value="latest_products">latest products</option>
                <option value="discounted_products">discounted products</option>
            </select>
        </div>
        @if ($selectedType && !$externalLink)
        <div class="col-xl-6 col-12">
            <select wire:model.defer="selectedItem" id="item" class="form-select">
                <option value="">Select Item</option>
                @foreach ($options as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
        @endif
    </div>
    @endif
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" wire:model.defer="externalLink" id="inlineCheckbox1">
        <label class="form-check-label" for="inlineCheckbox1">external link</label>
    </div>

    @if ($externalLink)
    <div class="row">
        <div class="col-12">
            <input type="text" class="form-control" placeholder="External link URL" wire:model.defer="externalLinkUrl">
        </div>
    </div>
    @endif
    <div class="col-lg-12 mt-2 mb-2">
        <label for="formFile" class="form-label">Select image</label>
        <input class="form-control" type="file" id="formFile" disabled>
    </div>
</div>