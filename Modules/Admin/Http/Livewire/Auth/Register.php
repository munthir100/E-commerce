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

        'email' => 'required|email',

        'phone' => 'required|integer|max:13|unique:users',

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
        $emailExist = User::where('email', $data['email'])->where('user_type_id', 1)->first();
        if ($emailExist) {
            $this->addError('email', 'you can not use this email');
            return;
        }
        $data['password'] = Hash::make($data['password']);

        $data['user_type_id'] = 1;

        $user = User::create($data);
        $admin = $user->admin()->create([]);
        $admin->store()->create($data);

        $user->assignRole('admin');
        Auth::login($user);

        return redirect()->route('admin.index');
    }
}
