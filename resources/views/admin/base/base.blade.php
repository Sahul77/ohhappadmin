<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- begin::Head --}}

<head>
    <meta charset="utf-8" />
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{ asset('admin/media/logos/favicon.png') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- begin::Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="{{ asset('admin/css/style.bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/toast/toastr.css') }}" />
    {{-- end::Fonts --}}
    <link rel="stylesheet" href="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.1.1/css/pro.min.css">
    {{-- <link type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" /> --}}

    {{-- <link href="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" /> --}}
    {{-- <link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('admin/css/custom-style.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="/metronic8/demo22/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="/metronic8/demo22/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" /> --}}
    @yield('styles')
</head>
{{-- end::Head --}}

{{-- begin::Body --}}

<body id="kt_body" data-kt-app-header-stacked="true" class="app-default">

    @yield('content')

    <script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('admin/js/custom/intro.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/users-search.js') }}"></script>
    {{-- Account --}}
    <script src="{{ asset('admin/js/custom/account/settings/signin-methods.js') }}"></script>
    {{-- End Account --}}
    <script type="text/javascript"
        src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-maxlength/1.10.0/bootstrap-maxlength.min.js"></script>

    <script src="{{ asset('admin/js/toast/toastr.js') }}"></script>
    <script>
        // custom toastr
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "2000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    {{-- <script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>  
    <script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/custom/authentication/sign-in/general.js') }}"></script>
    <script src="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('admin/js/custom/intro.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/users-search.js') }}"></script>
    <script src="{{ asset('admin/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('admin/js/custom/modals/upgrade-plan.js') }}"></script> --}}
    @yield('scripts')
</body>
{{-- end::Body --}}

</html>
