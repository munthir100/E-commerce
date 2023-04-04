<?php

namespace Modules\Admin\Http\Livewire\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ResetPasswordform extends Component
{
    public $tokenData,$token,$email,$new_password,$new_password_confirmation;

    protected $rules = [
        'new_password' => 'required|confirmed',
        'new_password_confirmation' => 'required'
    ];
    public function render()
    {
        return view('admin::livewire.auth.reset-passwordform');
    }

    function resetPassword()
    {
        $this->validate();
        DB::table('users')->where('email', $this->email)->where('user_type_id',1)->update([
            'password' => Hash::make($this->new_password),
        ]);
        DB::table('password_resets')->where('email', $this->email)->delete();
        return to_route('login');
    }
}
