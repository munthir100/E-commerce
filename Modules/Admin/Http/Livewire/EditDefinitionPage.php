<?php

namespace Modules\Admin\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\DefinitionPage;

class EditDefinitionPage extends Component
{
    public $page, $title, $description, $is_active;

    function mount(){
        $this->title = $this->page->title;
        $this->description = $this->page->description;
        $this->is_active = $this->page->is_active;
    }

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'is_active' => 'boolean'
    ];

    public function render()
    {
        return view('admin::livewire.edit-definition-page');
    }

    function save()
    {
        $this->page->update($this->validate());
        session()->flash('success', 'definition page updated successfully');
        return to_route('admin.settings.pages.index');
    }
}
