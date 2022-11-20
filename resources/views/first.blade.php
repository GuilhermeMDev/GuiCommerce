@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ ('Dashboard') }}</div>
                    <h1 class="text-3xl font-bold underline">Bem vindo a plataforma de vendas</h1>
                    <div class="card-body">
                        <img src="{{ asset('/images/1.png') }}" height="300" width="300">
                        <img src="{{ asset('/images/2.png') }}" height="300" width="300">
                        <img src="{{ asset('/images/3.png') }}" height="300" width="300">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    import ExampleComponent from "../js/components/ExampleComponent";

    export default {
        components: {ExampleComponent}
    }
</script>
