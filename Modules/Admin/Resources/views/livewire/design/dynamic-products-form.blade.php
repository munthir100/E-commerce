<div>
    <div class="row mb-2">
        <div class="col-xl-6 col-12">
            <select wire:model="selectedType" id="type" class="form-select">
                <option value="">select option</option>
                <option value="category">Category link</option>
                <option value="most_sales">most sales</option>
                <option value="latest_products">latest products</option>
                <option value="discounted_products">discounted products</option>
            </select>
        </div>
        @if ($selectedType)
        <div class="col-xl-6 col-12">
            <select wire:model="selectedItem" id="item" class="form-select">
                <option value="">Select Item</option>
                @foreach ($options as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
        @endif
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
    </div>
</div>