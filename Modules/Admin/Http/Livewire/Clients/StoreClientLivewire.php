<?php

namespace Modules\Admin\Http\Livewire\Clients;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Acl\Entities\User;
use Modules\Client\Entities\Client;
use Modules\Shipping\Entities\City;

class StoreClientLivewire extends Component
{
    public $name, $email, $phone, $birth_date, $city_id, $gender, $description, $user_type_id = 3, $created_by;

    public function mount()
    {
        $this->created_by = Auth::user()->id;
    }

    protected $rules = [
        'name' => 'required',
        'email' => 'required|unique:users',
        'phone' => 'required|unique:users',
        'birth_date' => 'date',
        'gender' => 'sometimes',
        'description' => 'string',
        'city_id' => 'sometimes',
        'user_type_id' => 'required',
        'created_by' => 'required',
    ];

    public function updated($data)
    {
        return $this->validateOnly($data);
    }

    public function render()
    {
        $cities = City::all();
        return view('admin::livewire.clients.store-client-livewire', compact('cities'));
    }

    public function save()
    {
        $validatedData = $this->validate();
        $user = User::create($validatedData);
        $client = new Client($validatedData);
        $client->user_id = $user->id;
        $client->save();
        
        return redirect()->route('admin.clients.index');
    }
}
