<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    @vite('resources/js/app.js')
</head>

<body>
    <div class="bg-yellow-500 x-data="{ isOpen: false }">
        {{-- <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center"> --}}
            {{-- <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-2xl hover:text-indigo-700"
                    href="/"><img src="{{asset('img/logo.png')}}" class="img">
                    <style>
                    .img {
                        width: 50%;
                        cursor: pointer;
                    }
                    </style>
                </a>
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
    
                </div>
            </div>


            <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500"
                    href="/">Főoldal</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 "
                    href="{{ route('categories.index') }}">Kategóriák</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 " class="sub-heading"
                    href="{{ route('menus.index') }}">Menük</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 "
                    href="{{ route('reservation.step-one') }}">Foglalj most!</a>

            </div>
        </nav> --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue-300">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Dentre</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-center" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('categories.index') }}">Kategóriák</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('menus.index') }}">Menük</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservation.step-one') }}">Foglalj most</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>

    </div>
    <div class="font-sans text-gray-500 antialiased min-h-screen">
        {{ $slot }}
    </div>

    <footer  class="bg-slate-100 border-t border-red-100 text-center ">
        <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
            <div class="flex flex-wrap justify-center">
                <ul  class="flex items-center space-x-4">
                    <ul style=color:gray >Design by:</ul>
                    <ul>
                        <li  style=color:gray>Orosz Levente János &radic;</li>
                    </ul>
                    <ul >
                        <li style=color:gray>Bognár Dávid Márk &radic;</li>
                    </ul>
                    <ul>
                        <li style=color:gray>Megyeri Márk Máté &radic;</li>
                    </ul>
                    <strong>
                        <p style=color:gray>&copy; 2023 www.dentre.com</p>
                    </strong>
                </ul>
        
            </div>
            <!-- <div class="flex justify-center  lg:mt-0">
                <a>
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a> -->
    </footer>


</body>

</html>