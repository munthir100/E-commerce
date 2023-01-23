<?php

namespace Modules\Client\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ClientLogout extends Component
{
    public $storeLink;

    public function render()
    {
        return view('client::livewire.auth.client-logout');
    }

    function logout(){
        Auth::logout();

        return redirect()->route('store.index',$this->storeLink);
    }
}
