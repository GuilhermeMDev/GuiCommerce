@extends('layouts.app')

@section('content')
    <section class="text-gray-600 body-font">
            @if(Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-500 px-4 py-3 rounded relative shadow-md lg:w-1/3 w-full mx-auto overflow-auto text-center" role="alert">
                    <strong class="font-bold ">Produto adicionado com sucesso!</strong>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                </div>
            @elseif(Session::get('delSuccess'))
                <div class="bg-red-100 border border-red-400 text-red-500 px-4 py-3 rounded relative shadow-md lg:w-1/3 w-full mx-auto overflow-auto text-center pt-6" role="alert">
                    <strong class="font-bold ">Produto deletado com sucesso!</strong>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            @endif
        <div class="container px-50 py-24 mx-auto">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Carrinho de Compras</h1>
                    <a href="#"
                       class="flex ml-auto text-white bg-blue-500 border-0 py-2 px-6 text-sm focus:outline-none hover:bg-blue-600 rounded no-underline">Finalizar
                        Compra</a>
                </div>
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            Código
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
                            style="width: 150px">Imagem
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            Nome
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            Valor
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            Quantidade
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">
                            Gerencie seu carrinho
                        </th>
                    </tr>
                    </thead>
                    <body class="divide-y">
                    @foreach($items as $item)
                        <tr @if($loop->even) class="bg-gray-100" @endif> {{-- Aqui acessei uma propriedade interna do foreach pra inserir a linha cinza nos pares por exemplo --}}
                            <td class="px-4 py-3">{{ $item->id }}</td>
                            <td class="px-4 py-3">
                                @if($item->cover)
                                    <img src="{{ url("storage/{ $item->cover }") }}" alt="Product {{ $item->name }}"
                                         class="object-cover object-center w-20 h-20 block"
                                    >
                                @else
                                    <img src="{{ url("images/image-dafault.jpg") }}" alt="{{ $item->name}}"
                                         class="object-cover object-center w-full h-full block"
                                    >
                                @endif
                            </td>
                            <td class="px-4 py-3">{{ $item->name }}</td>
                            <td class="px-4 py-3">R$ {{ $item->price }}</td>
                            <td class="px-4 py-3">{{ $item->quantity }}</td>
                            <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                                <button href="{{ route('user.editShopCart') }}"
                                   class="mt-3 text-blue-500 inline-flex items-center"><b>Alterar</b></button>

                                <form action="{{ route('user.delShopCart') }}" method="POST" enctype="multipart/form-data"> <!--Estou fazendo dessa forma, pois o Carrinho nao tem um db, decidi usar uma lib externa para somar + conhecimento, porém pretendo fazer como fiz com produtos por exemplo.-->
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id}}">
                                   <button class="mt-3 text-red-400 inline-flex items-center"><b>Remover</b></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </body>
                </table>
            </div>
        </div>
    </section>
{{--    @include('components.footer')--}}
@endsection
