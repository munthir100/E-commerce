<?php

namespace Modules\Admin\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Admin\Entities\DefinitionPage;

class CreateDefinitionPage extends Component
{
    public $title, $description, $is_active = true;

    public function updated($data)
    {
        $this->validateOnly($data);
    }

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'is_active' => 'boolean'
    ];

    public function render()
    {
        return view('admin::livewire.create-definition-page');
    }

    function save()
    {
        $data = $this->validate();
        $data['store_id'] = Auth::user()->admin->store->id;
        DefinitionPage::create($data);
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('success', 'definition page created successfully');
        return to_route('admin.settings.pages.index');
    }
}
