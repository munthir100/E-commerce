<?php

namespace Modules\Admin\Http\Livewire\Brands;

use Livewire\Component;
use Modules\Admin\Entities\Brand;

class DeleteBrandLivewire extends Component
{
    public $brand;
    protected $listeners = ['deleteBrandConfirmed' => 'delete'];

    public function render()
    {
        return view('admin::livewire.brands.delete-brand-livewire');
    }

    public function confirmDelete()
    {
        $this->dispatchBrowserEvent('confirmDelete', [
            'message' => 'Are you sure?',
            'id' => $this->brand->id,
            'callback' => 'deleteBrandConfirmed',
        ]);
    }

    function delete($id)
    {
        Brand::where('id', $id)->delete();

        $this->dispatchBrowserEvent('hideRow', $id);
    }
}
