@extends('layouts.app')

@section('content')
     <div class="container px-50 py-24 mx-auto">
        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Produtos</h1>
                <a href="{{ route('product.create') }}" class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded no-underline">Adicionar</a>
            </div>
            <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">#</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
                        style="width: 150px">Imagem
                    </th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome
                    </th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                        Valor
                    </th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                        Estoque
                    </th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">
                        Ações
                    </th>
                </tr>
                </thead>
                <body class="divide-y">
                @foreach($products as $product)
                    <tr @if($loop->even) class="bg-gray-100" @endif> {{-- Aqui acessei uma propriedade interna do foreach pra inserir a linha cinza nos pares por exemplo --}}
                        <td class="px-4 py-3">{{$product->id}}</td>
                        <td class="px-4 py-3">
                            @if($product->cover)
                            <img src="{{ url("storage/{$product->cover}") }}"  alt="Product {{$product->name}}"
                                 class="object-cover object-center w-20 h-20 block"
                                 >
                            @else
                                <img src="{{ url("images/image-dafault.jpg") }}" alt="{{$product->name}}"
                                     class="object-cover object-center w-full h-full block"
                                >
                            @endif
                        </td>
                        <td class="px-4 py-3">{{$product->name}}</td>
                        <td class="px-4 py-3">R$ {{$product->price}}</td>
                        <td class="px-4 py-3">{{$product->stock}}</td>
                        <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                            <a href="{{ route('product.edit', $product->id) }}" class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>

                            <a href="{{ route('product.destroy', $product->id) }}" class="mt-3 text-red-400 inline-flex items-center">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </body>
            </table>
        </div>
    </div>
    </div>
@endsection
