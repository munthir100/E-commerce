<?php

namespace Modules\Acl\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\Acl\Entities\User;

class ClientRegister extends Component
{
    public $name, $email, $phone, $password, $store_link;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|unique:users',
        'phone' => 'required|unique:users',
        'password' => 'required',
    ];

    public function updated($data)
    {
        return $this->validateOnly($data);
    }

    public function render()
    {
        return view('acl::livewire.client-register');
    }

    public function register()
    {
        $data = $this->validate();
        $data['user_type_id'] = 3;
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        $user->assignRole('client');
        Auth::login($user);
        return back();
    }
}
