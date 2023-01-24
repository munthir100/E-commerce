<?php

namespace Modules\Admin\Http\Livewire\Settings;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class Passwords extends Component
{
    public $password, $new_password, $new_password_confirmation;

    public function render()
    {
        return view('admin::livewire.settings.passwords');
    }

    public function updatePassword()
    {
        $this->validate([
            'password' => ['required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            'new_password' => ['required', 'min:6', 'confirmed'],
            'new_password_confirmation' => 'required'
        ]);

        Auth::user()->update([
            'password' => Hash::make($this->new_password)
        ]);

        session()->flash('message', 'Password updated successfully');
    }
}
