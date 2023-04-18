<div>
    <form wire:submit.prevent="save">
        <div class="row  mb-2">
            <div class="col-12 mb-1">
                <div class="mt-1">
                    <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                        <i data-feather='zoom-in'></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Option 1</a>
                        <a class="dropdown-item" href="#">Option 2</a>
                        <a class="dropdown-item" href="#">Option 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-1">
                <input class="form-control" placeholder="title" wire:model.defer="title1" type="text" id="formFile">
                @error('title1') <small class="text-danger">{{$message}}</small> @enderror
            </div>

            <div class="col-12 mb-2">
                <input class="form-control" placeholder="description" wire:model.defer="sub_title1" type="text" id="formFileMultiple">
                @error('sub_title1') <small class="text-danger">{{$message}}</small> @enderror
            </div>
        </div>

        <div class="row  mb-2">
            <div class="col-12 mb-1">
                <div class="mt-1">
                    <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                        <i data-feather='zoom-in'></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Option 1</a>
                        <a class="dropdown-item" href="#">Option 2</a>
                        <a class="dropdown-item" href="#">Option 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-1">
                <input class="form-control" placeholder="title" wire:model.defer="title2" type="text" id="formFile">
                @error('title2') <small class="text-danger">{{$message}}</small> @enderror
            </div>

            <div class="col-12 mb-2">
                <input class="form-control" placeholder="description" wire:model.defer="sub_title2" type="text" id="formFileMultiple">
                @error('sub_title2') <small class="text-danger">{{$message}}</small> @enderror
            </div>
        </div>

        <div class="row  mb-2">
            <div class="col-12 mb-1">
                <div class="mt-1">
                    <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                        <i data-feather='zoom-in'></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Option 1</a>
                        <a class="dropdown-item" href="#">Option 2</a>
                        <a class="dropdown-item" href="#">Option 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-1">
                <input class="form-control" placeholder="title" wire:model.defer="title3" type="text" id="formFile">
                @error('title2') <small class="text-danger">{{$message}}</small> @enderror
            </div>
            <div class="col-12 mb-2">
                <input class="form-control" placeholder="description" wire:model.defer="sub_title3" type="text" id="formFileMultiple">
                @error('sub_title3') <small class="text-danger">{{$message}}</small> @enderror
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
</div>