<?php

namespace Modules\Admin\Http\Livewire\Brands;

use Livewire\Component;

class DeleteBrandLivewire extends Component
{
    public $brand;
    public function render()
    {
        return view('admin::livewire.brands.delete-brand-livewire');
    }
    function delete()
    {
        $this->brand->delete();
        session()->flash('success','brand deleted successfully');
        return to_route('admin.brands.index');
    }
}
