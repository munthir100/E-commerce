<div>
    <form id="addPageValidation" class="row gy-1 gx-2 mt-75" wire:submit.prevent="save">
        <div class="col-12">
            <label class="form-label" for="modalAddCardNumber">{{(translate('Title'))}}</label>
            <div class="input-group input-group-merge">
                <input wire:model="title" class="form-control add-credit-card-mask" type="text" placeholder="{{(translate('Title'))}}" />
                
                <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                    <span class="add-card-type"></span>
                </span>
            </div>
            @error('title') <small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="col-md-12">
            <label class="form-label" for="modalAddCardName">{{(translate('Description'))}}</label>


            <textarea class="form-control" wire:model="description" placeholder="{{(translate('description'))}}"></textarea>

            @error('description') <small class="text-danger">{{$message}}</small>@enderror

        </div>

        <div class="col-12">
            <div class="d-flex align-items-center">
                <div class="form-check form-switch form-check-primary me-25">


                    <input type="checkbox" class="form-check-input" id="saveCard" wire:model="is_active" />

                </div>
                <label class="form-check-label fw-bolder" for="saveCard">{{(translate('Save in store'))}}</label>
            </div>
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-1 mt-1">{{(translate('Submit'))}}</button>
            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                {{(translate('Cancel'))}}
            </button>
        </div>
    </form>
</div>