<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent fixed-top text-black">
    <div class="container">
        <div class="navbar-wrapper">
            {{--      <a class="navbar-brand" href="{{ route('home') }}">{{ $title }}</a>--}}

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                @auth()
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="material-icons">dashboard</i> {{ __('Dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/logout') }}" class="nav-link"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
                        <a href="{{ route('login') }}" class="nav-link">
                            <i class="material-icons">fingerprint</i> {{ __('Login') }}
                        </a>
                    </li>
                @endauth
                {{--                <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">--}}
                {{--                    <a href="{{ route('register') }}" class="nav-link">--}}
                {{--                        <i class="material-icons">person_add</i> {{ __('Register') }}--}}
                {{--                    </a>--}}
                {{--                </li>--}}

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
