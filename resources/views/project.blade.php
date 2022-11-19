@extends('layouts.app')

@section('title', 'Projects List')

@section('content')
    <div>
        <h1>Listando os Projetos atuais</h1>
        <label>Autor (a)</label> <br>
        {{$project->name}} <br><br>
        <label>Descrição</label> <br>
        {{$project->description}}
    </div>
    <br>
    <form>
        <input id="projectName" placeholder="Project Name" name="addProject">
        <button type="submit">Cadastrar</button>
    </form>
@endsection()
