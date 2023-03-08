<div>
    @foreach($vats as $vat)
    <div class="cardMaster border rounded p-1">
        <div class="d-flex justify-content-between flex-sm-row ">
            <div class="card-information">
                <small>
                    <a href="{{route('admin.settings.taxNumber.edit',[$vat->id])}}">{{$vat->country->name}}</a> ({{$vat->vat_value}}%)
                </small>
            </div>
            <div class="card-information">
                <div class="form-check form-check-primary form-switch">
                    <input type="checkbox" class="form-check-input">
                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>