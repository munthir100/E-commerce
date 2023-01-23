<?php

namespace Modules\Admin\Http\Livewire\Settings;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $name, $email, $phone;



    function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->phone = Auth::user()->phone;
    }


    public function render()
    {
        return view('admin::livewire.settings.profile');
    }

    function save()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore(Auth::user()->id, 'id')],
            'phone' => 'required'
        ]);
        Auth::user()->update($validatedData);
    }

}
