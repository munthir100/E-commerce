<?php

namespace Modules\Admin\Http\Livewire\Clients;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UpdateClientPasswordLivewire extends Component
{
    public $client, $password, $password_confirmation;

    protected $rules = [
        'password' => 'sometimes',
        'password_confirmation' => 'sometimes|same:password',
    ];

    // public function mount(){
    //     $this->password = $this->client->user->password;
    //     $this->password = $this->client->user->password;
    // }
    public function updated($data)
    {
        return $this->validateOnly($data);
    }
    public function render()
    {
        return view('admin::livewire.clients.update-client-password-livewire');
    }

    public function save()
    {
        $data = $this->validate();
        $data['password'] = Hash::make($data['password']);
        $this->client->user->update($data);
        return to_route('admin.clients.index');
    }
}
