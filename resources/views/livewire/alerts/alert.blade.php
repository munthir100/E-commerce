<div>

    @if(session('success'))
    <div class="demo-spacing-0 mb-1">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="alert-body">
                {{ __(session('success')) }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    @if($errorMessage)
    <div class="demo-spacing-0 mb-1">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="alert-body">
                {{ __($errorMessage) }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    @if($successMassage)
    <div class="demo-spacing-0 mb-1">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="alert-body">
                {{ __($successMassage) }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    @push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/extensions/ext-component-sweet-alerts.css">
    @endpush
    @push('scripts')
    <script src="../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <script src="../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
    @endpush

    <script>
        window.addEventListener('confirmDelete', (event) => {
            Swal.fire({
                title: event.detail.message,
                icon: 'warning',
                // showCancelButton: true,
                confirmButtonText: '{{__("Confirm")}}',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ms-1'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.isConfirmed) {
                    Livewire.emit(event.detail.callback, event.detail.id);
                }
                if (result.value) {
                    Swal.fire({
                        icon: '{{__("success")}}',
                        title: '{{__("Deleted")}}',
                        text: '{{__("The item has been deleted.")}}',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        }
                    });
                }
            });
        });
    </script>



    <script>
        window.addEventListener('addWarning', () => {
            Swal.fire({
                title: '{{__("Warning")}}',
                text: event.detail.message,
                icon: 'warning',
                confirmButtonText: '{{__("Ok")}}',
                customClass: {
                    confirmButton: 'btn btn-primary',
                },
                buttonsStyling: false
            })
        });
    </script>

    <script>
        window.addEventListener('addSuccess', () => {
            Swal.fire({
                title: '{{__("Successfull")}}',
                text: event.detail.message,
                icon: 'success',
                confirmButtonText: '{{__("Ok")}}',
                customClass: {
                    confirmButton: 'btn btn-primary',
                },
                buttonsStyling: false
            })
        });
    </script>

    <script>
        $('#notAvailable').on('click', function() {
            Swal.fire({
                title: '{{ __("Warning!") }}',
                text: '{{ __("Please upgrade your package becouse this fddeature is not available in your package!") }}',
                icon: 'warning',
                customClass: {
                    confirmButton: 'btn btn-primary'
                },
                buttonsStyling: false
            });
        });
    </script>


</div>
