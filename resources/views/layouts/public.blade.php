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
    <main class="mx-auto">
        @yield('content')
    </main>
</div>

<footer class="text-gray-600 mx-auto relative -bottom-32" >
    <div class="border-t border-gray-200">
        <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
            <div class="flex md:flex-nowrap flex-wrap justify-center items-end md:justify-start">
                <div class="relative sm:w-64 w-40 sm:mr-4 mr-2">
                    <label for="footer-field" class="leading-7 text-sm text-gray-600">Busque seus Produtos</label>
                    <input type="text" id="footer-field" name="footer-field"
                           class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:ring-2 focus:bg-transparent focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button
                    class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                    Button
                </button>
                <p class="text-gray-500 text-sm md:ml-6 md:mt-0 mt-2 sm:text-left text-center">Bitters chicharrones
                    fanny pack
                    <br class="lg:block hidden">waistcoat green juice
                </p>
            </div>
            <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
               viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
               viewBox="0 0 24 24">
            <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a href="https://www.linkedin.com/in/guimagionidev/" class="ml-3 text-gray-500" target="_blank"
           rel="noopener noreferrer">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
               class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none"
                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
        </div>
    </div>
    <div class="bg-gray-100">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-500 text-sm text-center sm:text-left">© 2022 Guilherme Dev —
                <a href="https://github.com/GuilhermeMDev" class="text-gray-600 ml-1" target="_blank"
                   rel="noopener noreferrer"> @GitHub</a>
            </p>
            <span class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-500 text-sm">
                   I’m slowly becoming the person I should have been a long time ago.
               </span>
        </div>
    </div>
</footer>

</body>
</html>
