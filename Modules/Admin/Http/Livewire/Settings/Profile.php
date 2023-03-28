<?php

namespace Modules\Admin\Http\Livewire\Settings;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $name, $email, $phone;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
    }

    public function render()
    {
        return view('admin::livewire.settings.profile');
    }

    public function save()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore(Auth::id())],
            'phone' => ['required','integer', Rule::unique('users')->ignore(Auth::id())],
        ]);

        Auth::user()->update($validatedData);

        $this->dispatchBrowserEvent('addSuccess', [
            'message' => 'Profile updated',
        ]);
    }
}
