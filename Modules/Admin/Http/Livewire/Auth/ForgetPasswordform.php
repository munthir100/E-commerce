<?php

namespace Modules\Admin\Http\Livewire\Auth;

use App\Mail\PasswordResetToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use App\MailPasswordResetToken;
use Illuminate\Support\Facades\Mail;
use Modules\Acl\Entities\User;

class ForgetPasswordform extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|exists:users'
    ];

    public function render()
    {
        return view('admin::livewire.auth.forget-passwordform');
    }

    function save()
    {
        $credentials = $this->validate();
        $checkUserType = User::where('email',$credentials['email'])->where('user_type_id',1)->first();
        if(!$checkUserType){
            $this->addError('email','This email associated with another user type');
            return ;
        }
        $token = Str::random(64);
        DB::table('password_resets')->updateOrInsert(['email' => $credentials['email']],
                [
                    'token' => Hash::make($token),
                    'created_at' => Carbon::now()
                ]
            );
        Mail::to($credentials['email'])->send(new PasswordResetToken($token,$credentials['email']));
        return redirect()->route('login')->with('status', 'Password reset token sent!');
    }
}
