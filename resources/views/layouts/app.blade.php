<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mera PMS</title>

        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>


        <link href="/css/select2.min.css" rel="stylesheet">

        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        

        <style>
            body {
                font-family: 'Lato';
            }

            .fa-btn {
                margin-right: 6px;
            }
        </style>
    </head>
    <body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container-fluid" style="padding: 0px 10px">
        <a id="logo-container" href="#" class="brand-logo">Mera PMS</a>
      <ul class="right hide-on-med-and-down">
        @include('layouts.nav')
      </ul>

      <ul id="nav-mobile" class="side-nav">
        @include('layouts.nav')
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container-fluid"  style="padding: 0px 10px">
       @yield('content')

    </div>
  </div>



  <footer class="page-footer orange">
    <div class="container-fluid"  style="padding: 0px 10px">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college friends working on this project
                    like it's our full time job. Any amount would help support and continue development
              on this project and is greatly appreciated.
          </p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="#">Mage2 Team</a>
      </div>
    </div>
  </footer>

      

        <!-- JavaScripts -->
        <script src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/materialize.min.js"></script>

        <!-- <script src="/js/moment.js"></script>
        <script src="/js/bootstrap-datetimepicker.js"></script>
        -->
        <script src="/js/select2.min.js"></script>


        <script>

        $(function () {
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').
                            attr('content')}
            });
        });
        </script>
        <script src="/js/main.js"></script>

        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
