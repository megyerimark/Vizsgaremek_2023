
<x-guest-layout>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6  animate__animated animate__slideInRight">
           
            @foreach ($categories as $category)
           

            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header bg-transparent border-success"></div>
                <div class="card-body text-success">
                  <p class="card-text">
                    <img src="{{Storage::url($category->image)}}" alt="Image"/>
                  </p>
                </div>
                <a href="{{route('categories.show.', $category->id)}}">
                  <div class="card-footer bg-transparent border-success">{{$category->description}}</div>
                </a>
              </div>

              @endforeach

            

        </div>
    </div>
    </div>
</x-guest-layout>