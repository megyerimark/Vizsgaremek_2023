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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="bg-indigo-50 x-data="{ isOpen: false }">
        <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-2xl hover:text-indigo-700"
                    href="/"><img src="img/logo.png " class="img">
                    <style>
                    .img {
                        width: 50%;
                        cursor: pointer;
                    }
                    </style>
                </a>
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button"
                        class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>


            <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500"
                    href="/">Főoldal</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 "
                    href="{{ route('categories.index') }}">Kategóriák</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 "
                 href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Bejelentkezés</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 " class="sub-heading"
                    href="{{ route('menus.index') }}">Menük</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 "
                    href="{{ route('reservation.step-one') }}">Foglalj most!</a>

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
                        <li  style=color:gray>Orosz Levente János</li>
                    </ul>
                    <ul >
                        <li style=color:gray>Bognár Dávid Márk</li>
                    </ul>
                    <ul>
                        <li style=color:gray>Megyeri Márk Máté</li>
                    </ul>
                    <p style=color:gray>&copy; 2023 www.dentre.com</p>
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