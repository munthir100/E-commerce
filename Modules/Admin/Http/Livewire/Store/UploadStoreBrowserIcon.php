<?php

namespace Modules\Admin\Http\Livewire\Store;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadStoreBrowserIcon extends Component
{
    use WithFileUploads;

    public $browser_icon, $store;

    protected $rules = [
        'browser_icon' => 'sometimes|image'
    ];
    public function render()
    {
        return view('admin::livewire.store.upload-store-browser-icon');
    }

    function save()
    {
        $this->validate();
        $mainImagePath = $this->browser_icon->store('stores/browser_icons', 'public');

        $this->store->update(['browser_icon' => $mainImagePath]);
        return to_route('admin.settings.store')->with('success', 'store browser icon updated');
    }
}
