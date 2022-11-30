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
    @vite([  'resources/css/app.css', 'resources/js/app.js'])
</head>
<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="{{ url('/') }}" class="mr-5 hover:text-gray-900">Página Principal</a>
            <a class="mr-5 hover:text-gray-900">Third Link</a>
            <a class="mr-5 hover:text-gray-900">Fourth Link</a>
            <a href="{{ url('/home') }}" class="mr-5 hover:text-gray-900">Painel</a>
        </nav>
        <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                 stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                 viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">{{ config('app.name', 'default') }}</span>
        </a>

        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">

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

                <div class="relative">
                    <span class="mr-3"> Olá {{ Auth::user()->name }},</span>

                    <button class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Sair') }}
                    </button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endguest
        </div>
    </div>
</header>

<body>
<div id="app">
    @yield('content')
</div>

</body>
</html>

