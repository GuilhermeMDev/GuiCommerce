@extends('layouts.default') {{--Aqui importo o conteudo para o layout--}}

@section('title', 'Users Title')

@section('content')
    <h1>ForEach na variável que armazena a listagem de usuarios la no banco de dados</h1>
    @foreach($users as $user)
        {{$user->name}}<br>
    @endforeach

@endsection
