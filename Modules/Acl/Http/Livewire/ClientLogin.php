<?php

namespace Modules\Acl\Http\Livewire;

use Livewire\Component;
use Modules\Acl\Entities\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientLogin extends Component
{
    public $username, $password;

    protected $rules = [
        'username' => ['required'],
        'password' => 'required',
    ];
    public function render()
    {
        return view('acl::livewire.client-login');
    }

    public function login()
    {
        $this->validate();

        $credantials = [
            'username' => $this->username,
            'password' => $this->password,
        ];

        if (is_numeric($this->username)) {
            $user = User::where('phone', $this->username)
                ->where('password', Hash::make($this->password))
                ->where('user_type_id', 3)->first();
        } else {
            $user = User::where('email', $this->username)
                ->where('password', Hash::make($this->password))
                ->where('user_type_id', 3)->first();
        }
        if ($user) {
            Auth::login($user);
        } else {
            $this->addError('username', 'invaild credantials');
        }
    }
}
