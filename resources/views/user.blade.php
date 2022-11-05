@extends('layouts.default') {{--Aqui importo o conteudo para o layout--}}

@section('title', 'User Title')

@section('content')
{{--Recebendo 'user' de UserController, como a variavel $user --}}
{{$user}}
@endsection



