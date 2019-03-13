<header id="header" class="full-header">

    <div id="header-wrap" class="">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <!-- <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a> -->
            </div>
            <!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" style="align-items: left !important">


                <ul class="sf-js-enabled" style="touch-action: pan-y; border: none;">
                    <li>
                    </li>
                    <li class="current">
                        <a href="/">
                            <div>Home</div>
                        </a>
                    </li>
                    <li class="current">
                        <a href="/uploads">
                            <div>Gallery </div>
                        </a>
                    </li>
                    <li class="current">
                        <a href="/posts">
                            <div>News </div>
                        </a>
                    </li>
                    <li class="current">
                        <a href="/tributes">
                            <div>Tributes </div>
                        </a>
                    </li>
                    @guest
                    <li class="current">
                        <a href="{{ route('login') }}">
                            <div>{{ __('Login') }} </div>
                        </a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">
                 Dashboard
               </a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                @endguest

            </nav>
            <!-- #primary-menu end -->

        </div>

    </div>

</header>
