@extends('layouts.app')
@section('content')
    <div id="app">

        <Welcome>

        </Welcome>

        Test
            <div class="bg-indigo-50 p-6 border-b border-indigo-400">
                User
                @can('edit-products')
                    can
                @else
                    can`t
                @endif

            </div>
    </div>
@endsection

<script>
    import ExampleComponent from "../js/components/ExampleComponent";
    import Welcome from "../js/components/Welcome";

    export default {
        components: {Welcome, ExampleComponent}
    }
</script>
