<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="">
            
          <h1 class="sub-heading animate__animated animate__fadeInDown">Köszi a rendelést</h1>
          <br>
    

          {{-- <img src="img/yas.gif" class="img-fluid" alt="..."> --}}
          <img src="img/asd.gif" alt="" class="heading animate__animated animate__fadeInDown"  height="250px">
        
    </div>
    </div>

   
   <form action="{{route('comment.store')}}" method="post">
    @csrf

    <input type="text"  id="first_name" name="first_name" placeholder="name">

   
    <input type="text"  id="lasT_name" name="last_name" placeholder="name">
    
    <input type="text" id="email"  name="email" placeholder="email">

    
    <input type="text"  id="comment" name="comment"placeholder="comment">
    <button type="submit">asd</button>
</form>


</x-guest-layout>