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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
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


           


</body>
<footer  class="bg-blue-300  footer-basic">
  <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
  <ul class="list-inline">
      <li class="list-inline-item"><a href="/">Főoldal</a></li>
      <li class="list-inline-item"><a href="#">Elérhetőségek</a></li>
      <li class="list-inline-item"><a href="#">Általános Szerződési Feltételek</a></li>
  </ul>
  <p class="copyright">Dentre © 2023</p>
</div>
</footer>

       
    
    
    
               
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</html>