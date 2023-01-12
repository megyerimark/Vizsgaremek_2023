<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
             
                <a href="{{ route('admin.categories.create')}}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700  text-white rounded-lg">Új Kategória</a>

            </div>
        
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                     név
                </th>
                <th scope="col" class="px-6 py-3">
                    kép
                </th>
                <th scope="col" class="px-6 py-3">
                    megjegyzés
                </th>
               
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
          
          @foreach ($categories as $category)
          <tr class="bg-white border-b darg:bg-gray-800 dark:border-gray-700">
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$category->name}}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="px-1 py-2">
                    <img  class="w-20 h-02" src="{{Storage::url($category->image)}}" alt="">
                  </div>
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$category->description}}
            </td>
    
           
                <td class="py-4 px-4text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex space-x-2">
                    <a href="{{route('admin.categories.edit', $category->id)}}" class="px-4 py-2 bg-blue-500 hover:bg-green-700 rounded">Szerkesztés</a>
                
                        <form method="POST"
                        action="{{route('admin.categories.destroy', $category->id)}}"
                        class="px-4 py-2 bg-red-500 hover:bg-blue-700 rounded-lg"
                        onsubmit="return confirm('Biztos törölni szeretnéd?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" >Törlés</button>
                
                </form>
            </div>
              
                </div>
            </td>
    
              
            
       

          </tr>
          @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-admin-layout>