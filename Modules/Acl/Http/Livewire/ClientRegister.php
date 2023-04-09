<?php

namespace Modules\Acl\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\Acl\Entities\User;

class ClientRegister extends Component
{
    public $name, $email, $phone, $password, $store;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
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
        $emailExist = User::where('email', $data['email'])->where('user_type_id', 3)->first();
        if ($emailExist) {
            $this->addError('email', 'you can not use this email');
            return;
        }
        $data['store_id'] = $this->store->id;
        $data['user_type_id'] = 3;
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $user->client()->create($data);
        $user->assignRole('client');
        Auth::login($user);

        return redirect()->route('store.index',$this->store->store_link);
    }
}
