<?php

namespace App\Http\Livewire\Alerts;

use Livewire\Component;

class Alert extends Component
{
    public $errorMessage,$successMassage;

    protected $listeners = [
        'errorOccurred' => 'showError',
        'success' => 'successMassage',
    ];

    public function showError($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        $this->dispatchBrowserEvent('show-error-alert');
    }

    public function showSuccess($successMassage)
    {
        $this->successMassage = $successMassage;
        $this->dispatchBrowserEvent('show-success-alert');
    }

    public function render()
    {
        return view('livewire.alerts.alert');
    }
}
