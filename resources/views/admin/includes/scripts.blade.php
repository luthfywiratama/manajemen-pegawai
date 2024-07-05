<script src="{{ asset('admin/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendors/select2.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendors/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendors/jquery.fullscreen.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendors/bootstrap-notify-3.1.3/bootstrap-notify.min.js') }}"></script>
<!-- Main Script -->
<script src="{{ asset('admin/assets/js/main.js') }}" type="text/javascript"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js" ></script>
{{-- for production  --}}
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function showToast(msg, type) {
        $.notify({
            // options
            icon: type == 'danger' ? 'la la-times-circle' : 'la la-check-circle',
            title: type == 'danger' ? 'Error' : 'Success',
            message: msg,
        }, {
            // settings
            element: 'body',
            position: null,
            type: type,
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            timer: 1000,
            animate: {
                enter: 'animate__animated animate__fadeInDown',
                exit: 'animate__animated animate__fadeInUp'
            },
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                '<button type="button" class="btn btn-sm btn-transparent" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                '</div>' +
                '</div>'
        });
    }
</script>
@vite(['resources/js/app.js'])
