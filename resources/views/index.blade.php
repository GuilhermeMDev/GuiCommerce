@extends('layouts.app')

@section('content')

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-wrap w-full bg-gray-100 py-62 px-15 relative mb-4">
                <a href="{{ route('products.list') }}">

                    <img alt="gallery" src="{{ 'images/banner.png' }}"
                         class="w-full object-cover h-full object-center block relative inset-0">
                </a>

            </div>
            <div class="text-center relative z-10 w-full pb-5">
                <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">Relógios Unisex</h2>
                <p class="leading-relaxed relative pb-5">Aproveite nossas promoções</p>
            </div>
            <div class="lg:w-2/3 mx-auto">
                <div class="flex flex-wrap -mx-2">
                    <div class="px-2 w-1/2">
                        <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">

                            <a href="{{ route('products.list') }}">
                                <img alt="gallery"
                                     class="w-full object-cover h-full object-center block relative inset-0"
                                     src="{{ asset('images/toster.png') }}">
                            </a>

                            <div class="text-center relative z-10 w-full">
                                <h2 class="text-xl text-gray-900 font-medium title-font mb-2">Quer dar um plus em
                                    sua cozinha?</h2>
                                <p class="leading-relaxed">TORRADEIRA ELÉTRICA TOSTADEIRA GuiLux - 127v</p>

                            </div>
                        </div>
                    </div>
                    <div class="px-2 w-1/2">
                        <div class="flex flex-wrap w-full full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                            <a href="{{ route('products.list') }}">

                                <img alt="gallery"
                                     class="w-full object-cover h-full object-center block relative inset-0"
                                     src="{{ asset('images/trimmer.png') }}">
                                </a>
                                    <div class="text-center relative z-10 w-full">
                                        <h2 class="text-xl text-gray-900 font-medium title-font mb-2">Sua barba como
                                            nunca..</h2>
                                        <p class="leading-relaxed">Máquina De Cortar Cabelo Profissional</p>

                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('components.footer')
@endsection
