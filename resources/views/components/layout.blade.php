<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>HRGA - Head Office</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.jpg') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/twitter-bootstrap-wizard/form-wizard.css') }}">


    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.1/dist/css/datepicker-bs5.min.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />

    <link
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css') }}"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <x-navbar></x-navbar>

    <div class="main-wrapper">
        {{-- <x-header>{{ $title }}</x-header> --}}
        {{ $slot }}
    </div>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>

    <script src="{{ asset('assets/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/twitter-bootstrap-wizard/prettify.js') }}"></script>
    <script src="{{ asset('assets/plugins/twitter-bootstrap-wizard/form-wizard.js') }}"></script>


    <script src="{{ asset('https://cdn.jsdelivr.net/npm/flatpickr') }}"></script>

    <script
        src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js') }}">
    </script>

    <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>

</html>
