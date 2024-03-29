<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'iheartsong') }}</title>

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="padding: 5px 10px; height: 55px;">
                <a class="navbar-brand" href="{{ url('#') }}">
                    <img src="{{ asset('img/iheartsong.png') }}" alt="Logo iheartsong" style="margin-bottom: 6ACpx; width: 50px; height: 50px;">
                    {{ config('app.name', 'iheartsong') }}
                </a>               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/home') }}">Home</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('tracks') }}">Tracks</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('playlists') }}">Playlists</a>
                             </li>
                             <li class="nav-item dropdown">
                                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                             </li>
                        @endguest
                    </ul>
                </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
     
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- DataTables CDN-->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>

    <!-- DataTables local fallback-->
    <script>window.jQuery || document.write('<script type="text/javascript" src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"><\/script><script type="text/javascript" src="{{ asset('js/datatables/dataTables.bootstrap.min.js') }}"><\/script><script type="text/javascript" src="{{ asset('js/datatables/dataTables.responsive.min.js') }}"><\/script>')</script>

    <!-- Custom Scripts -->
    <script src="{{ asset('js/custom/dataTables.js') }}" type="text/javascript"></script>

</body>
</html>
