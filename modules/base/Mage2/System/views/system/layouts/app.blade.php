<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mage2 Project Management System') }}</title>

    <!-- Styles -->
    <link href="{{ asset('/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/default.date.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/default.time.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/appscss.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/appless.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Mage2 Project Management System') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    @include('system.partial.nav')
                </div>
            </div>
        </nav>

        <div class="container">

            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('/js/all.js') }}"></script>
    <script src="{{ asset('/js/picker.js') }}"></script>
    <script src="{{ asset('/js/legacy.js') }}"></script>
    <script src="{{ asset('/js/picker.date.js') }}"></script>
    <script src="{{ asset('/js/picker.time.js') }}"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>
</body>
</html>
