<div>
    <select class="form-select" id="basicSelect" wire:model.defer="status" wire:change="setStatus">
        <option value="new">{{__('New')}}</option>
        <option value="processing">{{__('Processing')}}</option>
        <option value="ready">{{__('Ready')}}</option>
        <option value="delivering">{{__('Delivering')}}</option>
        <option value="completed">{{__('Completed')}}</option>
        <option value="rejected">{{__('Rejected')}}</option>
    </select>
</div>