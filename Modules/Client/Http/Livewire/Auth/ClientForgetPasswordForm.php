<?php

namespace Modules\Client\Http\Livewire\Auth;

use App\Mail\ClientPasswordResetToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\Acl\Entities\User;

class ClientForgetPasswordForm extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|exists:users,email'
    ];

    public function render()
    {
        return view('client::livewire.auth.client-forget-password-form');
    }

    function resetClientPassword()
    {
        $data = $this->validate();

        $checkUserType = User::where('email', $data['email'])->where('user_type_id', 3)->first();
        if (!$checkUserType) {
            $this->addError('email', 'this email is associated with another user type');
            return;
        }

        $token = mt_rand(100000, 999999);
        DB::table('password_resets')->updateOrInsert(['email' => $data['email']],
            [
                'token' => Hash::make($token),
                'created_at' => Carbon::now()
            ]
        );
        Mail::to($data['email'])->send(new ClientPasswordResetToken($token));
        $this->emit('emailSent', [
            'email' => $data['email']
        ]);
    }
}
