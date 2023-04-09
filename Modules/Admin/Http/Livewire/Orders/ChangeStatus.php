<?php

namespace Modules\Admin\Http\Livewire\Orders;

use Livewire\Component;

class ChangeStatus extends Component
{
    public $order, $status;
    function mount()
    {
        $this->status = $this->order->status;
    }

    protected $rules = [
        'status' => 'required|in:new,processing,ready,delivering,completed,rejected'
    ];

    public function render()
    {
        return view('admin::livewire.orders.change-status');
    }
    public function setStatus()
    {
        $this->validate();
        $this->order->update(['status' => $this->status]);
        return to_route('admin.orders.show',$this->order->id);
    }
}
