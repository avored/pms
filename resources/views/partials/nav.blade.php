<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    AvoRed
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @else
                        @foreach(Menu::all() as $menu)
                            

                            @if($menu->hasSubMenu())

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" 
                                            class="nav-link dropdown-toggle" href="#" 
                                            role="button" data-toggle="dropdown" 
                                            aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ $menu->label() }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                        
                                        @foreach($menu->subMenu() as $menu)
                                       
                                        <a class="dropdown-item" href="{{ route($menu->route()) }}">
                                            {{ __($menu->label()) }}
                                        </a>

                                        @endforeach

                                       
                                    </div>
                                </li>

                            @else

                            <li class="nav-item">
                                <a class="nav-link" 
                                    href="{{ route($menu->route()) }}">
                                    {{ __($menu->label()) }}
                                </a>
                            </li>

                            @endif
                        @endforeach
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>