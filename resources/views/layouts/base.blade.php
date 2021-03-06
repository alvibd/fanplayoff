<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title')</title>

    <!-- Favicons-->
    <link rel="icon" href="{{ asset('img/favicon-600x600.png') }}" sizes="32x32">

    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/favicon-600x600.png') }}" sizes="152x152">

    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#e53935">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicon-600x600.png') }}" sizes="144x144">

@section('stylesheets')
    <!-- BOOTSTRAP CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- FONT AWESOME CSS -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

        <!-- MAGNIFIC POPUP -->
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">

        <!-- DATA TABLE CSS -->
        <link href="{{ asset('css/jquery.dataTables.min.css') }}" type="text/css" rel="stylesheet">

        <!-- DATE PICKER CSS -->
        <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" type="text/css" rel="stylesheet">

        <!-- PERFECT SCROLLBAR CSS -->
        <link href="{{ asset('css/perfect-scrollbar.min.css') }}" rel="stylesheet">

        <!-- STACKABLE TABLE CSS -->
        <link href="{{ asset('css/stacktable.css') }}" rel="stylesheet">

        <!-- toastr -->
        <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

        <!-- MAIN CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- RESPONSIVE CSS -->
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        @stack('push_stylesheets')
    @show

</head>
<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')

@routes
@section('javascripts')
<!-- JQUERY JS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- MOMENT JS -->
<script src="{{ asset('js/moment-with-locales.min.js') }}"></script>

<!-- MAGNIFIC POPUP -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

<!-- DATA TABLE JS -->
<script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

<!-- PERFECT SCROLLBAR JS -->
<script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>

<!-- DATE PICKER JS -->
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>

<!-- STACKABLE TABLE JS -->
<script src="{{ asset('js/stacktable.js') }}"></script>

<!-- toastr -->
<script src="{{ asset('js/toastr.min.js') }}"></script>

<!-- MAIN JS -->
<script src="{{ asset('js/main.js') }}"></script>
@routes
<script type="application/javascript">
    $(document).ready(function () {
        //toastr initialize
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-left",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "-1",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        var errors = new Array();

        @if(count($errors))
        @foreach($errors->all() as $error)
        errors.push("{{ $error }}");
        @endforeach
        @endif

        errors.forEach(function (error, index) {
            toastr["error"](error);
        });
    });
</script>


@show
@stack('push_javascripts')
</body>
</html>
