<?php

namespace Modules\Admin\Http\Livewire\Auth;

use Livewire\Component;
use Modules\Acl\Entities\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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

        if (filter_var($data['username'], FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $data['username'])
                ->where('user_type_id', 1)
                ->first();
        } else {
            $user = User::where('phone', $data['username'])
                ->where('user_type_id', 1)
                ->first();
        }

        if (!$user) {
            $this->addError('username', 'Email or phone number not found');
            return;
        }
    
        if (!Hash::check($data['password'], $user->password)) {
            $this->addError('password', 'Password is incorrect');
            return;
        }

        Auth::login($user);
        $user->assignRole('admin');
        return redirect()->route('admin.index');
    }
}
