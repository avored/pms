<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mage2 Ecommerce') }}</title>

    <!-- Styles -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flat-admin.css') }}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme/blue-sky.css') }}">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>



    <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    @stack('scripts')

    <style>
        body {
            width: 100%;
            height: 100%;
        }
        .container-fluid {


        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;

        -ms-flex-align: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
            justify-content: center;;
            align-items: center;
        }
        .installation-panel {
            width: 60%;

            text-align: center;
        }

    </style>
    <script>
        jQuery(document).ready(function() {
            jQuery('.container-fluid').height(jQuery(document).height())
        })
    </script>
</head>
<body>

<div class="container-fluid" style="height: 100%">
        @yield('content')
</div>

@stack('scripts')
@stack('styles')
</body>
</html>
