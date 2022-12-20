@extends('layouts.app')

@section('content')
    <section class="text-gray-600 overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                @if($product->cover)
                    <img src="{{ url("storage/{$product->cover}") }}" alt="{{$product->name}}"
                         class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded">

                @else
                    <img src="{{ url("images/image-default.jpg") }}" alt="{{$product->name}}"
                         class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded">

                @endif
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$product->name}}</h1>
                    <p class="leading-relaxed">{{$product->description}}</p>
                    <div class="my-3">
                        @if($product->stock)
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800">Em estoque {{$product->stock}}</span>
                        @elseif($product->stock == null)
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">Fora de Estoque</span>
                        @endif
                    </div>
                    <form action="{{ route('user.addShopCart') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <counter-component>
                            {{-- construction --}}
                        </counter-component>
                        <input type="number" name="quantity" value="1">
                        <input type="hidden" name="cover" value="{{ $product->cover }}">
                        <input type="hidden" name="description" value="{{ $product->description }}">

                        <div class="flex border-t-2 border-gray-100 mt-6 pt-6">
                                <span
                                    class="title-font font-medium text-2xl text-gray-900">R$ {{$product->price}}</span>
                            <button
                                class="flex ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">
                                Comprar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    @include('components.footer')
@endsection
