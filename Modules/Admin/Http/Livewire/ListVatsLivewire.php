<?php

namespace Modules\Admin\Http\Livewire;

use Livewire\Component;

class ListVatsLivewire extends Component
{
    public $vats;
    public function render()
    {
        return view('admin::livewire.list-vats-livewire');
    }
}
