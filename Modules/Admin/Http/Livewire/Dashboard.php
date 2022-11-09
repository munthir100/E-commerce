<?php

namespace Modules\Admin\Http\Livewire;

use Livewire\Component;
use Modules\Acl\Entities\User;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        $user = User::with('store')->where('id', auth()->user()->id)->first();
        return view('admin::livewire.dashboard',compact('user'));
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
