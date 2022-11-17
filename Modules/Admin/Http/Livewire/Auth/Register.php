<?php

namespace Modules\Admin\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\Acl\Entities\User;

class Register extends Component
{
    public $name, $email, $phone, $store_link, $store_name, $password;

    protected $rules = [

        'name' => 'required|string',

        'email' => 'required|email|unique:users',

        'phone' => 'required|integer|unique:users',

        'password' => 'required',

        'store_link' => 'required|unique:stores',

        'store_name' => 'required|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('admin::livewire.auth.register');
    }

    public function save()
    {
        $data = $this->validate();
        $data['password'] = Hash::make($data['password']);
        $data['user_type_id'] = 1;
        $user = User::create($data);
        $user->store()->create($data);
        $user->assignRole('admin');
        Auth::login($user);
        return redirect()->route('admin.index');
    }
}
