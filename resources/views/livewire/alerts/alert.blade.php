<div>
    @if(session('error'))
    <div class="row">
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
                <div class="alert-body">
                    {{ session('error') }}
                </div>
            </div>
        </div>
    </div>
    @elseif(session('success'))
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success" role="alert">
                <div class="alert-body">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
    @endif
</div>