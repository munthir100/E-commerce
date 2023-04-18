<?php

namespace Modules\Admin\Http\Livewire;

use Livewire\Component;
use Modules\Admin\Entities\Product;

class DeleteProductLivewire extends Component
{
    public $product;
    protected $listeners = ['deleteProductConfirmed' => 'delete'];

    public function render()
    {
        return view('admin::livewire.delete-product-livewire');
    }

    public function confirmDelete()
    {
        if (count($this->product->orderDetails) > 0) {
            $this->dispatchBrowserEvent('addWarning', [
                'message' => __('this product contain an orders'),
            ]);
            return;
        }

        $this->dispatchBrowserEvent('confirmDelete', [
            'message' => __('?Are you sure'),
            'id' => $this->product->id,
            'callback' => 'deleteProductConfirmed',
        ]);
    }
    function delete($id)
    {
        Product::where('id', $id)->delete();
        
        $this->dispatchBrowserEvent('hideRow', $id);
    }
}
