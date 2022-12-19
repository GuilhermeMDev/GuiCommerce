@extends('layouts.app')
@section('content')
    <section class="text-gray-400 bg-gray-900 body-font relative">
        <div class="absolute inset-0 bg-gray-900">
            <iframe title="map" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0"
                    scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14964.857220265654!2d-40.30011970949127!3d-20.33276361135064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1671487173825!5m2!1spt-BR!2sbr"
                    style="filter: grayscale(1) contrast(1.2) opacity(0.16);">
            </iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div
                class="lg:w-1/3 md:w-1/2 bg-gray-900 shadow-md rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
                <h2 class="text-white text-lg mb-1 font-medium title-font">Fique à vontade..</h2>
                <p class="leading-relaxed mb-5">Fale Conosco
                    Para enviar sua solicitação, dúvida, sugestão ou elogios, por favor, preencha os campos abaixo:</p>

                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-400">Nome</label>
                    <input type="name" id="name" name="name"
                           class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                    <input type="email" id="email" name="email"
                           class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-400">Mensagem</label>
                    <textarea id="message" name="message"
                              class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                    Contate-nos
                </button>
                <a class="link text-xs text-gray-400 text-opacity-90 mt-3">Duvidas Frequentes</a>
            </div>
        </div>
    </section>
    @include('components.footer')
@endsection
