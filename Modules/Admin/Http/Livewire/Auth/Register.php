<?php

namespace Modules\Admin\Http\Livewire\Auth;

use Livewire\Component;
use Modules\Acl\Entities\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Shipping\Entities\Country;

class Register extends Component
{
    public $name, $email, $phone, $store_link, $store_name, $password, $country_id = 1;

    protected $rules = [

        'name' => 'required|string',

        'email' => 'required|email',

        'phone' => 'required|numeric|unique:users',

        'password' => 'required',

        'store_link' => 'required|unique:stores',

        'store_name' => 'required|string',

        'country_id' => 'required|exists:countries,id',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $countries = Country::all();
        return view('admin::livewire.auth.register', compact('countries'));
    }

    public function save()
    {
        $data = $this->validate();
        $selectedCountry = Country::find($this->country_id);
        $this->validate(['phone' => ['digits:' . $selectedCountry->phone_digits_number]]);

        $emailExist = User::where('email', $data['email'])->where('user_type_id', 1)->first();
        if ($emailExist) {
            $this->addError('email', __('you can not use this email'));
            return;
        }
        $data['password'] = Hash::make($data['password']);

        $data['user_type_id'] = 1;

        $user = User::create($data);
        $admin = $user->admin()->create([]);
        $admin->store()->create($data);

        $user->assignRole('admin');
        Auth::login($user);

        return redirect()->route('admin.index');
    }
}
