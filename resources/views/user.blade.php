@extends('layouts.app') {{--Aqui importo o conteudo para o layout--}}

@section('title', 'User Title')

@section('content')
    <div>
        {{--Recebendo 'user' de UserController, como a variavel $user --}}
        {{$user->name}}
        {{$user->email}}
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/user.js') }}"></script>  {{--Posso exportar esse js e substituir o o pré-definido em layout --}}
@endpush

