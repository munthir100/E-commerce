<?php

namespace Modules\Admin\Http\Livewire\Clients;

use Livewire\Component;

class UpdateClientLivewire extends Component
{
    public $client, $name, $email, $phone, $birth_date, $city_id, $gender, $description;

    public function mount()
    {
        $this->name = $this->client->user->name;
        $this->email = $this->client->user->email;
        $this->phone = $this->client->user->phone;
        $this->birth_date = $this->client->birth_date;
        $this->city_id = $this->client->city_id;
        $this->gender = $this->client->gender;
        $this->description = $this->client->description;
    }

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'birth_date' => 'date',
        'gender' => 'sometimes',
        'description' => 'string',
        'city_id' => 'sometimes',
    ];



    public function updated($data)
    {
        return $this->validateOnly($data);
    }
    public function render()
    {
        return view('admin::livewire.clients.update-client-livewire');
    }


    public function save()
    {
        $this->client->update($this->validate());
        $this->client->user->update($this->validate());
        session()->flash('success','client data updated successfully');
        return to_route('admin.clients.index');
    }
}
