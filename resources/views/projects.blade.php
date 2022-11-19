@extends('layouts.app')

@section('title', 'Projects List')

@section('content')
    <div>

        <h1>Listando os Projetos atuais</h1>
        <label><b>Autor (a)</b></label> <br>

        @foreach($projects as $project)
            {{ $project-> name }} <br>
        @endforeach

    </div>
    <br>
    <form>
        <input id="projectName" name="addProject" placeholder="Project Name">
        <button type="submit">Cadastrar</button>
    </form>
@endsection()
