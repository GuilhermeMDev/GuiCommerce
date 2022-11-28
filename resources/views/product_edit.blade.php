@extends('layouts.app')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Editar Produto</h1>
                </div>

                <form method="POST" enctype="multipart/form-data" action="{{ route('product.update', $product->id) }}">
                    @csrf
                    @method('put'){{--Técnica pra validar o envio de dados, basicamente a rota de fato é PUT, porém no form só foi como post la e o put aqui--}}
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nome do produto</label>
                                <input
                                    value="{{ old('name',$product->name) }}"
                                    type="text" id="name" name="name"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('name')
                            <span class="text-red-400 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Preço</label>
                                <input
                                    value="{{ old('price',$product->price) }}"
                                    type="text" id="price" name="price"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                            </div>
                            @error('price')
                            <span class="text-red-400 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Estoque</label>
                                <input
                                    value="{{ old('stock',$product->stock) }}"
                                    type="text" id="stock" name="stock"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('stock')
                            <span class="text-red-400 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Imagem de capa</label>
                                <input
                                    type="file" id="cover" name="cover"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                            </div>
                            @error('cover')
                            <span class="text-red-400 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="p-2 w-full">
                            @if($product->cover)
                                <img src="{{ url("storage/{$product->cover}") }}" alt="Product {{$product->name}}"
                                     class="object-cover object-center w-fit h-fit block"
                                >
                            @else
                                <img src="{{ url("images/product-default-text.jpg") }}" alt="{{$product->name}}"
                                     class="object-cover object-center w-fit h-fit block"
                                >
                            @endif

                        </div>
                        <div class="relative ">
                            <a
                                href="{{ route('product.destroyImage', $product->id) }}"
                                class="@if($product->cover == null) hidden @endif flex h-2 w-24  text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded no-underline"
                            >
                                Deletar Img
                            </a>
                        </div>
                        <div class="p-2 w-full ">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Descrição</label>
                                <textarea
                                    id="description" name="description"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">v{{ old('description',$product->description) }}</textarea>
                            </div>
                            @error('description')
                            <span class="text-red-400 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="p-2 w-full">
                            <button type="submit"
                                    class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                                Atualizar
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
