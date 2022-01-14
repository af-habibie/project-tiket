<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    @yield('css')
    @yield('js')
    <style>
    .navbar-dark-custom{
        background-color:#46BAEB !important;}
    .navbar-toggler:focus{outline:none;}
    .bg-purple{background:#46BAEB}
    nav a {font-size:18px;}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md {{ (Auth::check() && Auth::user()->is_admin == 1) ? 'navbar-dark bg-purple':'navbar-dark-custom bg-dark' }} shadow-sm">
            <div class="container">
                @php
                    if ( Auth::check() ) {
                        if ( Auth::user()->is_admin == 1 ) {
                            $routingNavbarBrand = "admin.dashboard";
                        } else if ( Auth::user()->is_admin == 0 ) {
                            $routingNavbarBrand = "contributor.home";
                        }
                    } else {
                        $routingNavbarBrand = "login";
                    }
                @endphp
                <a class="navbar-brand" href="{{ route($routingNavbarBrand) }}">
                    <img src="{{ asset('img/etiket2.jpg') }}" width="110" alt="eNews" />
                </a>
                <button class="navbar-toggler rounded-0 pr-0" type="button" data-toggle="collapse" data-target="#nav">
                    <i class="fas fa-bars text-muted"></i>
                </button>
                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if (Auth::user()->is_admin == 1)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <i class="fas fa-user"  ></i> Users
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('users.index') }}">
                                            Manage
                                        </a>
                                        <a class="dropdown-item" href="{{ route('users.create') }}">
                                            Create
                                        </a>
                                    </div>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <img src="{{ asset('img/users/'.(Auth::user()->photo == '' ? 'noimage.jpg' : Auth::user()->photo)) }}" width="35" alt="{{ Auth::user()->name }}" class="rounded-circle"> {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
                                            {{ __('Update Profile') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
                                            {{ __('Show Profile') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <img src="{{ asset('img/users/'.(Auth::user()->photo == '' ? 'noimage.jpg' : Auth::user()->photo)) }}" width="35" alt="{{ Auth::user()->name }}" class="rounded-circle"> {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('contributor.editpassword') }}">{{ __('Update Profile') }}</a>
                                        <a class="dropdown-item" href="{{ route('contributor.showprofile') }}">{{ __('Show Profile') }}</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4 h-100">
            @yield('content')
        </main>
        <footer class="text-center text-muted">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
    @yield('jsfooter')
</body>
</html>
