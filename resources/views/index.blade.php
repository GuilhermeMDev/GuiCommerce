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

    <footer class="text-gray-600">
        <div class="border-t border-gray-200">
            <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
                <div class="flex md:flex-nowrap flex-wrap justify-center items-end md:justify-start">
                    <div class="relative sm:w-64 w-40 sm:mr-4 mr-2">
                        <label for="footer-field" class="leading-7 text-sm text-gray-600">Busque seus Produtos</label>
                        <input type="text" id="footer-field" name="footer-field"
                               class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:ring-2 focus:bg-transparent focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                        Button
                    </button>
                    <p class="text-gray-500 text-sm md:ml-6 md:mt-0 mt-2 sm:text-left text-center">Bitters chicharrones
                        fanny pack
                        <br class="lg:block hidden">waistcoat green juice
                    </p>
                </div>
                <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
               viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
               viewBox="0 0 24 24">
            <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a href="https://www.linkedin.com/in/guimagionidev/" class="ml-3 text-gray-500" target="_blank"
           rel="noopener noreferrer">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
               class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none"
                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2022 Guilherme Dev —
                    <a href="https://github.com/GuilhermeMDev" class="text-gray-600 ml-1" target="_blank"
                       rel="noopener noreferrer"> @GitHub</a>
                </p>
                <span class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-500 text-sm">
                   I’m slowly becoming the person I should have been a long time ago.
               </span>
            </div>
        </div>
    </footer>
@endsection
