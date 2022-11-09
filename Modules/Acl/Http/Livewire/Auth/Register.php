<?php

namespace Modules\Acl\Http\Livewire\Auth;

use Livewire\Component;
use Modules\Acl\Entities\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Entities\Store;

class Register extends Component
{
    public $store_name, $store_link, $name, $email, $phone, $password;

    public $rules = [
        'store_name' => 'required',
        'store_link' => 'required|unique:stores',
        'name' => 'required',
        'phone' => 'required|integer|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('acl::livewire.auth.register');
    }
    public function register()
    {
        $data = $this->validate();
        $user = User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 1,
        ]);
        Auth::login($user);
        $user->assignRole('admin');
        Store::create([
            'user_id' => Auth::user()->id,
            'store_name' => $data['store_name'],
            'store_link' => $data['store_link'],
        ]);
        return redirect('/admin/dashboard');
    }
}
