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
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue-300" id="asd">
            
            <div class="container-fluid">
              <a class="navbar-brand"
                href="/"><img src="{{asset('img/Uno.jpg')}}" class="img">
                <style>
                .img {
                    width: 125px;
                    border-radius: 25px;
                    cursor: pointer;
                    box-shadow: 0px 0px 25px
                }
                #a,#b,#c{
                  box-shadow: 0px 0px 25px;
                  border-radius: 50px;
                  align-items: center;
                  text-align: center;
                  width: 500px
                }
                @media screen and (max-width: 1250px)
                {

                    #a,#b,#c{
                        width: 250px
                    }
                    
                }
                </style>
              </a>
        
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-center" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" id="b" aria-current="page" href="{{ route('categories.index') }}">Kategóriák</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="a" href="{{ route('menus.index') }}">Menük</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  id="c" href="{{ route('reservation.step-one') }}">Foglalj most</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>

    </div>
    <div class="font-sans text-gray-500 antialiased">
        {{ $slot }}
    </div>

    <footer  class="bg-slate-100 border-t border-red-100 text-center ">
        <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
            <div class="flex flex-wrap justify-center">
                <ul  class="flex items-center space-x-4">
                    <ul style=color:gray >Design by:</ul>
                    <ul>
                        <li  style=color:gray>Orosz  &radic;</li>
                    </ul>
                    <ul >
                        <li style=color:gray>Bognár  &radic;</li>
                    </ul>
                    <ul>
                        <li style=color:gray>Megyeri  &radic;</li>
                    </ul>
                
                    
                </ul>
        
            </div>
            <!-- <div class="flex justify-center  lg:mt-0">
                <a>
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>n


</body>

</html>