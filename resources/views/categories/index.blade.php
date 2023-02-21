
<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach ($categories as $category)
            <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg py-30 px-20">
                <img src="{{Storage::url($category->image)}}" alt="Image"/>
                <div class="px-6 py-4">
                   
                   

                 </div>
                <div class="flex items-center justify-between p-4">
                <!-- <a href="{{asset('categories.show')}}">  nem működik , azt írja nincs létrehozva az adott blade, pedig DE  -->
            <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-500 uppercase">
                {{$category->name}}</h4>
                    <p class="leading-normal text-gray-700">{{$category->description}}</p>

            </a>
                </div>
            </div>
           

            @endforeach

        </div>
    </div>
    </div>
</x-guest-layout>