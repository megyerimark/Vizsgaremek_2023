<x-guest-layout>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach ($menus as $menu)
            <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg py-30 px-20">
                <img src="{{Storage::url($menu->image)}}" alt="Image" />
                <div class="px-6 py-4">



                </div>
                <div class="flex items-center justify-between p-4">
                    <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-500 uppercase">
                       {{$menu->name}}</h4>
                    <p class="leading-normal text-gray-700">{{$menu->description}}</p>
                    <p class="mb-4 text-xl py-4 ml-5px animate__animated animate__bounce uppercase">{{$menu->price}}FT</p>

                </div>
            </div>


            @endforeach

        </div>
    </div>
    </div>
</x-guest-layout>