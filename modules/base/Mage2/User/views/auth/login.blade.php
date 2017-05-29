<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
</head>
<body>
<div id="app" class="app app-default">
    <div class="app-container app-login">
        <div class="flex-center">
            <div class="app-header"></div>
            <div class="app-body">
                <div class="loader-container text-center">
                    <div class="icon">
                        <div class="sk-folding-cube">
                            <div class="sk-cube1 sk-cube"></div>
                            <div class="sk-cube2 sk-cube"></div>
                            <div class="sk-cube4 sk-cube"></div>
                            <div class="sk-cube3 sk-cube"></div>
                        </div>
                    </div>
                    <div class="title">Logging in...</div>
                </div>
                <div class="app-block">
                    <div class="app-form">
                        <div class="form-header">
                            <div class="app-brand"><span class="highlight">Mage2 PMS</span> Admin</div>
                        </div>
                        <form id="login-form" action="{{ route('login.post') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                <input type="text" class="form-control" name="email" placeholder="Email Address"
                                       aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                </span>
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                       aria-describedby="basic-addon2">
                            </div>
                            <div class="text-center">
                                <input type="button" onclick="jQuery('#login-form').submit();" class="btn btn-success btn-submit" value="Login">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="app-footer">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
@stack('scripts')


</body>
</html>
