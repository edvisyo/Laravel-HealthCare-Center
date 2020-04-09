<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sveikatos Priežiūros Centras') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">

    {{-- <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container-fluid">
                <i class="fas fa-heartbeat fa-2x" style="padding-right: 8px; color: white;"></i>
                <a class="navbar-brand" href="{{ url('/') }}" style="color: white;">
                    {{ config('app.name', 'Sveikatos Priežiūros Centras') }}
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}" style="color: white;">{{ __('PAGRINDINIS') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('darbuotojai') }}" style="color: white;">{{ __('DARBUOTOJAI') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kontaktai') }}" style="color: white;">{{ __('KONTAKTAI') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('paslaugos') }}" style="color: white;">{{ __('PASLAUGOS') }}</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/darbuotojai">Darbuotojai</a>
                        </li> --}}
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color: white;">{{ __('PRISIJUNGIMAS') }}</a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registracija') }}</a>
                                </li> 
                            @endif  --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }} style="color: white;""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ATSIJUNGTI') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
                @include('inc.messages')
                @yield('content')
        </main>
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5>KONTAKTAI</h5>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>KONTAKTAI</h5>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>KONTAKTAI</h5>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>KONTAKTAI</h5>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="{{ URL::asset('js/myscript.js') }}"></script>
</body>
</html>
