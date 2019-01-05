<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom" style="margin-left: 0px !important">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

        <li class="nav-item d-none d-sm-inline-block">
            <img src="{{ asset('/images/snowFinLogo-blue.png')}}" alt="SnowFin" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('/') }}" class="nav-link">SnowFin</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
            @else
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item d-none d-sm-inline-block">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @endauth
            @endif
    </ul>
</nav>
<!-- /.navbar -->