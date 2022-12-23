<?php

namespace Modules\Admin\Http\Livewire\Auth;

use Livewire\Component;
use Modules\Acl\Entities\User;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Entities\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public $username, $password;

    protected $rules = [
        'username' => 'required',
        'password' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('admin::livewire.auth.login');
    }

    public function save()
    {
        $data = $this->validate();

        if (is_numeric($data['username'])) {
            $user = User::where('phone', $data['username'])
                ->where('user_type_id', 1)
                ->first();
        } else {
            $user = User::where('email', $data['username'])
                ->where('user_type_id', 1)
                ->first();
        }
        if (!$user) {
            $this->addError('username', 'email or phone number not match');
        } elseif (!Hash::check($data['password'], $user->password)) {
            $this->addError('password', 'password not match');
        } else {
            Auth::login($user);
            return redirect()->route('admin.index');
        }
    }
}
