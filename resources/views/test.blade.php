@extends('layouts.app')
@section('content')
    <div id="app">

        <Welcome>

        </Welcome>
    </div>
@endsection

<script>
    import ExampleComponent from "../js/components/ExampleComponent";
    import Welcome from "../js/components/Welcome";

    export default {
        components: {Welcome, ExampleComponent}
    }
</script>
