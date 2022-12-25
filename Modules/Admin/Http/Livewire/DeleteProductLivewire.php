<?php

namespace Modules\Admin\Http\Livewire;

use Livewire\Component;

class DeleteProductLivewire extends Component
{
    public $product;
    public function render()
    {
        return view('admin::livewire.delete-product-livewire');
    }
    function delete()
    {
        if (count($this->product->orders) > 0) {
            session()->flash('error', 'this product contain an orders!');
        } else {
            $this->product->delete();
            session()->flash('success', 'product deleted successfully');
        }
        return to_route('admin.products.index');
    }
}
