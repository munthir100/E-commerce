<?php

namespace Modules\Admin\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('admin::livewire.auth.logout');
    }
    public function logout()
    {
        Auth::logout();
    }
}
