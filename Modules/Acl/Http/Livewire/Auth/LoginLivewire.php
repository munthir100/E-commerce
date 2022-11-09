<?php

namespace Modules\Acl\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginLivewire extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    function login()
    {
        $validatedData = $this->validate();
        $user_data = array(
            'email'  => $this->email,
            'password' => $this->password,
        );

        if (Auth::attempt($user_data)) {
            return redirect('/admin/dashboard');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function render()
    {
        return view('acl::livewire.Auth.Login');
    }
}
