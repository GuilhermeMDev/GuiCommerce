<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'default') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite([ 'resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<header class="text-gray-600">
    <div class="container mx-auto flex justify-between items-center p-5 items-center">
        <a class="flex font-medium items-center text-gray-700" href="{{ url('/') }} ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                 stroke-linejoin="round" stroke-width="2"
                 class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">{{ config('app.name', 'default') }}</span>
        </a>
        {{--            <div class="flex items-center">--}}
        {{--                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">--}}
        {{--                    <a class="mr-5 hover:text-gray-900">Home</a>--}}
        {{--                </nav>--}}
        {{--                <button--}}
        {{--                    class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base md:mt-0"--}}
        {{--                >--}}
        {{--                    Admin--}}
        {{--                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
        {{--                         stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">--}}
        {{--                        <path d="M5 12h14M12 5l7 7-7 7"></path>--}}
        {{--                    </svg>--}}
        {{--                </button>--}}
        {{--            </div>--}}
        @guest
            @if (Route::has('login'))
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </nav>
            @endif

            @if (Route::has('register'))
                <nav class="md:ml-16 flex flex-wrap items-center text-base justify-center">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </nav>
            @endif
        @else
            <a class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Sair') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </a>
        @endguest
    </div>
</header>
<body>
<div id="app">
{{--    Configs antigas     --}}
    {{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}{{--
    --}}{{--        <div class="container">--}}{{--
    --}}{{--            <a class="navbar-brand">--}}{{--
    --}}{{--                oi--}}{{--
    --}}{{--            </a>--}}{{--
    --}}{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"--}}{{--
    --}}{{--                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}{{--
    --}}{{--                    aria-expanded="false" >--}}{{--
    --}}{{--                <span class="navbar-toggler-icon"></span>--}}{{--
    --}}{{--            </button>--}}{{--

    --}}{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}{{--
    <!-- Left Side Of Navbar -->
    --}}{{--                <ul class="navbar-nav me-auto">--}}{{--

    --}}{{--                </ul>--}}{{--

    <!-- Right Side Of Navbar -->
    --}}{{--                <ul class="navbar-nav ms-auto">--}}{{--
    --}}{{--                    <!-- Authentication Links -->--}}{{--
    --}}{{--                    @guest--}}{{--
    --}}{{--                        @if (Route::has('login'))--}}{{--
    --}}{{--                            <li class="nav-item">--}}{{--
    --}}{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}{{--
    --}}{{--                            </li>--}}{{--
    --}}{{--                        @endif--}}{{--

    --}}{{--                        @if (Route::has('register'))--}}{{--
    --}}{{--                            <li class="nav-item">--}}{{--
    --}}{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}{{--
    --}}{{--                            </li>--}}{{--
    --}}{{--                        @endif--}}{{--
    --}}{{--                    @else--}}{{--
    --}}{{--                        <li class="nav-item dropdown">--}}{{--
    --}}{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}{{--
    --}}{{--                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}{{--
    --}}{{--                                {{ Auth::user()->name }}--}}{{--
    --}}{{--                            </a>--}}{{--

    --}}{{--                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}{{--
    --}}{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}{{--
    --}}{{--                                   onclick="event.preventDefault();--}}{{--
    --}}{{--                                                     document.getElementById('logout-form').submit();">--}}{{--
    --}}{{--                                    {{ __('Logout') }}--}}{{--
    --}}{{--                                </a>--}}{{--

    --}}{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}{{--
    --}}{{--                                    @csrf--}}{{--
    --}}{{--                                </form>--}}{{--
    --}}{{--                            </div>--}}{{--
    --}}{{--                        </li>--}}{{--
    --}}{{--                    @endguest--}}{{--
    --}}{{--                </ul>--}}{{--
    --}}{{--            </div>--}}{{--
    --}}{{--        </div>--}}{{--
    --}}{{--    </nav>--}}{{--
--}}
    <main class="">
        @yield('content')
    </main>
</div>

</body>
</html>
