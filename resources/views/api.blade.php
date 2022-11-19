@extends('layouts.app')

@section('title', 'Project API')

@section('content')
    <div>

        <h1>Api Lorem Yps</h1>
        <label><b>Code</b></label> <br>
        <ul>
            <li>{{$api}}</li>
        </ul>
    </div>

@endsection()
