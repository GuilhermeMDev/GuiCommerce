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
            <a href="{{ url('/') }}" class="mr-5 hover:text-gray-900">Início</a>
            <a class="mr-5 hover:text-gray-900">Third Link</a>
            <a class="mr-5 hover:text-gray-900">Sobre</a>
        </nav>
        <a href="{{ url('/') }}" class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                 width="48" height="48"
                 viewBox="0 0 48 48">
                <linearGradient id="xEc6UrDx3_4OwgsecG9FGa_sYdyef57USKL_gr1" x1="27.857" x2="39.857" y1="8.812" y2="12.636" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#9bdbf5"></stop><stop offset="1" stop-color="#43b3ff"></stop></linearGradient><path fill="url(#xEc6UrDx3_4OwgsecG9FGa_sYdyef57USKL_gr1)" d="M46,20.8c-0.1-0.8-0.3-1.6-1.2-2.7c-0.2-0.3-0.5-0.6-0.8-0.8c-0.3-0.2-0.6-0.5-0.9-0.7	c-0.6-0.5-1.3-1-2-1.4s-1.5-0.9-2.3-1.2c-0.7-0.4-2.8-1.3-2.8-3c0-1.1,0.8-1,1-1c0,0.1,0,0.1,0,0.1c-0.1,1.7,1,2.8,2.7,2.9	s3.1-1.1,3.3-2.8c0,0,0,0,0-0.1c0,0,0-0.1,0-0.2c0-0.2,0-0.4,0-0.5C43,8.9,42.9,5,37.4,5c-1.1,0-2.2,0.4-3.3,1.2	c-0.5,0.4-1,0.9-1.3,1.4c-0.4,0.6-0.6,1.2-0.7,1.8c-0.3,1.2-0.1,2.6,0.5,3.7c0.2,0.3,0.3,0.6,0.6,0.8c0.1,0.1,0.4,0.5,0.7,0.6	c0.5,0.4,1,0.7,1.5,0.9c1,0.4,1.9,0.6,2.7,0.8c0.8,0.2,1.5,0.4,2.3,0.6c0.7,0.3,1.4,0.6,2.1,0.9c0.3,0.2,0.6,0.3,0.9,0.5	c0.3,0.2,0.5,0.3,0.8,0.5c0.9,0.8,1.4,1.4,1.6,2.1c0.1,0.3,0.2,0.6,0.2,0.8c0,0.2,0,0.3,0,0.3s0-0.1,0-0.3C46,21.5,46,21.2,46,20.8z"></path><path fill="#f88200" d="M27,24c0,0-4.1,4-8,4s-8-4-8-4s0.2-0.19,0.55-0.5c0.17-0.14,0.37-0.31,0.61-0.5	c1.13-0.89,2.95-2.15,4.91-2.71C17.71,20.11,18.36,20,19,20s1.29,0.11,1.93,0.29c1.96,0.56,3.78,1.82,4.91,2.71	c0.24,0.19,0.44,0.36,0.61,0.5C26.8,23.81,27,24,27,24z"></path><path fill="#f88200" d="M26,42H12c0-1.5,3.3-2.4,5-2.8V39c0-0.37,0.02-0.75,0.06-1.12v-0.01c0.02-0.17,0.04-0.33,0.06-0.49	c0.02-0.17,0.05-0.34,0.08-0.5C17.54,34.82,18.31,33,19,33c0.7,0,1.46,1.84,1.81,3.92c0.03,0.16,0.05,0.33,0.08,0.5	c0.02,0.16,0.04,0.32,0.06,0.49v0.01C20.98,38.28,21,38.64,21,39v0.2C22.7,39.6,26,40.6,26,42z"></path><linearGradient id="xEc6UrDx3_4OwgsecG9FGb_sYdyef57USKL_gr2" x1="15.668" x2="20.712" y1="14.602" y2="19.745" gradientUnits="userSpaceOnUse"><stop offset=".491" stop-color="#fac600"></stop><stop offset="1" stop-color="#d66b00"></stop></linearGradient><circle cx="19" cy="18" r="2" fill="url(#xEc6UrDx3_4OwgsecG9FGb_sYdyef57USKL_gr2)"></circle><linearGradient id="xEc6UrDx3_4OwgsecG9FGc_sYdyef57USKL_gr3" x1="9.689" x2="36.788" y1="5.769" y2="39.989" gradientUnits="userSpaceOnUse"><stop offset=".491" stop-color="#fac600"></stop><stop offset="1" stop-color="#d66b00"></stop></linearGradient><path fill="url(#xEc6UrDx3_4OwgsecG9FGc_sYdyef57USKL_gr3)" d="M44,21c0,0-7.6,3-11,3H9c-1.5,0-5.2-2.7-7.3-4.7C1.5,19.1,1.3,19,1,19c-0.6,0-1,0.4-1,1 c-0.1,0.6,0,1.3,0,2c0,10.2,9,12.4,12,12.9c1.34,0.95,3.06,1.71,5.2,1.98C17.77,36.96,18.37,37,19,37c0.61,0,1.21-0.03,1.81-0.08 C35.11,35.73,48,21,48,21H44z M2,22.2c1.4,1.1,3.3,2.6,5,3.3v0.4c0.2,1.1,0.5,2.4,1.1,3.8C5,28.8,2.1,26.8,2,22.2z"></path><path fill="#151515" d="M26.45,23.5h-14.9C11.2,23.81,11,24,11,24h16C27,24,26.8,23.81,26.45,23.5z M19,37 c-0.63,0-1.23-0.04-1.8-0.12c-0.03,0.16-0.06,0.33-0.08,0.5c0.01,0,0.01,0,0.02,0c0.58,0.08,1.21,0.12,1.86,0.12 c0.59,0,1.19-0.03,1.85-0.08h0.04c-0.03-0.17-0.05-0.34-0.08-0.5C20.21,36.97,19.61,37,19,37z" opacity=".05"></path><g opacity=".05"><path fill="#151515" d="M26.45,23.5c-0.17-0.14-0.37-0.31-0.61-0.5H12.16c-0.24,0.19-0.44,0.36-0.61,0.5 C11.2,23.81,11,24,11,24h16C27,24,26.8,23.81,26.45,23.5z M20.81,36.92C20.21,36.97,19.61,37,19,37c-0.63,0-1.23-0.04-1.8-0.12 c-0.03,0.16-0.06,0.33-0.08,0.5c-0.02,0.16-0.04,0.32-0.06,0.49h0.01C17.67,37.96,18.33,38,19,38c0.6,0,1.22-0.03,1.89-0.08 c0.02,0,0.04,0,0.06-0.01c-0.02-0.17-0.04-0.33-0.06-0.49C20.86,37.25,20.84,37.08,20.81,36.92z"></path></g>
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
                <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                    @can('edit-products') <a href="{{ url('/home') }}" class="mr-5 hover:text-gray-900">Admin</a>
                    @else <a href="{{ url('/profile') }}" class="mr-5 hover:text-gray-900">Profile</a>@endif
                </nav>
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
