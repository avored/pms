<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php
                    $traverse = function ($categories) use (&$traverse) {
                    foreach ($categories as $category) {
                    if($category->descendants->count() > 0) { ?>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            {{ $category->name }}
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <?php } else { ?>
                            <li>
                                <a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                            <?php } ?>

                            @if($category->descendants->count() <= 0)
                                </ul>
                            @endif
                        <?php
                        $traverse($category->children);
                        ?>
                    </li>

                    <?php
                    }
                    };
                    $traverse($tree);
                    ?>


                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop page</a></li>
                    <li><a href="single-product.html">Single product</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Others</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->


<!--
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">


            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>


            <ul class="nav navbar-nav navbar-right">

                <?php
                $traverse = function ($categories) use (&$traverse) {
                foreach ($categories as $category) {
                    if($category->descendants->count() > 0) { ?>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                                aria-expanded="false">
                                {{ $category->name }}
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                    <?php } else { ?>
                            <li>
                                <a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                    <?php } ?>

                        @if($category->descendants->count() <= 0)
                            </ul>
                        @endif
                    <?php
                    $traverse($category->children);
                    ?>
                </li>

                <?php
                }
                };
                $traverse($tree);
                ?>


                <li><a href="{{ route('cart.index') }}">Cart
                        ({{ (Session::get('cart') === NULL) ? 0 : Session::get('cart')->count()  }})</a></li>
                <li><a href="{{ route('checkout.index') }}">Checkout</a></li>


                @if (Auth::guest())
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('my-account.index') }}">
                                    My Account
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

                        -->