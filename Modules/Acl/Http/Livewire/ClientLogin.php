<?php

namespace Modules\Acl\Http\Livewire;

use Livewire\Component;
use Modules\Acl\Entities\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientLogin extends Component
{
    public $username, $password,$storeLink;

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

        if (is_numeric($this->username)) {
            $user = User::where('phone', $this->username)
                ->where('user_type_id', 3)->first();
        } else {
            $user = User::where('email', $this->username)
                ->where('user_type_id', 3)->first();
        }

        if (!$user) {
            $this->addError('username', 'invalid username');
            return;
        }

        if (!Hash::check($this->password, $user->password)) {
            $this->addError('password', 'invalid password');
            return;
        }
        Auth::login($user);
        
        return redirect()->route('store.index',$this->storeLink);
    }
}
