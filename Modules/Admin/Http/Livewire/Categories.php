<?php

namespace Modules\Admin\Http\Livewire;

use Livewire\Component;
use Modules\Acl\Entities\User;
use Illuminate\Support\Facades\Auth;

class Categories extends Component
{

    public function render()
    {
        $user = User::with('store', 'categories')->where('id', Auth::user()->id)->first();
        return view('admin::livewire.categories.index', compact('user'));
    }
}
