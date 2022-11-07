@extends('layouts.default')

@section('title', 'Projects List')

@section('content')
    <div>
        <h1>Listando os Projetos atuais</h1>
        @foreach($projects as $project)
            {{$project->name}} <br>
        @endforeach
    </div>
@endsection()
