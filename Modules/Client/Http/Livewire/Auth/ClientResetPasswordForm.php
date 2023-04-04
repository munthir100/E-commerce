<?php

namespace Modules\Client\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\Acl\Entities\User;

class ClientResetPasswordForm extends Component
{
    public $store, $token, $new_password, $new_password_confirmation, $email;

    protected $rules = [
        'token' => 'required',
        'new_password' => 'required|confirmed',
        'new_password_confirmation' => 'required'
    ];

    protected $listeners = ['emailSent' => 'getEmailValue'];

    public function render()
    {
        return view('client::livewire.auth.client-reset-password-form');
    }

    public function clientResetPassword()
    {
        $credentials = $this->validate();

        $tokenData = DB::table('password_resets')->where('email', $this->email)->first();

        if (!$tokenData || !Hash::check($credentials['token'], $tokenData->token)) {
            $this->addError('token', 'Invalid token or token expired');
            return;
        }
        $user = User::where('email', $this->email)->where('user_type_id',3)->first();
        $user->update(['password' => Hash::make($credentials['new_password'])]);
        DB::table('password_resets')->where('email',$this->email)->delete();

        Auth::login($user);
        return redirect()->route('store.index',$this->store->store_link);
    }

    public function getEmailValue($email)
    {
        $this->email = $email;
    }
}
