<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('styles') {{--PILHA DE STYLES--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> {{-- /public/css/app.css--}}

    <title>@yield('title', 'Standard Title')</title>

</head>
<body>
@yield('content')

<script defer src="{{asset('js/app.js')}}"></script> {{-- JS puro em public, caso precise--}}
@stack('scripts')
</body>
</html>
