<?php

namespace Modules\Admin\Http\Livewire\Store;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadStoreLogoLivewire extends Component
{
    use WithFileUploads;

    public $logo,$store;

    protected $rules = [
        'logo' => 'sometimes|image'
    ];
    public function render()
    {
        return view('admin::livewire.store.upload-store-logo-livewire');
    }

    function save()
    {
        $this->validate();
        $mainImagePath = $this->logo->store('stores/logos', 'public');
        
        $this->store->update(['logo' => $mainImagePath]);
        return to_route('admin.settings.store')->with('success','store logo updated');
    }
}
