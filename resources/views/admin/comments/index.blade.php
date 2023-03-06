<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>

    <div class="py-12">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                @foreach ($comments as $comment )
                    
                <style>
                    #k{
                        background-color: white;
                    }
                </style>
                <table class="table" id="K">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Vezetéknév</th>
                        <th>Kersztnév</th>
                        <th>Email</th>
                        <th>Kommentek</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->first_name}}</td>
                        <td>{{$comment->last_name}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->comment}}</td>
                        <td>
                            <form method="POST" action="{{route('admin.comments.destroy', $comment->id)}}"
                                onsubmit="return confirm('Biztos törölni szeretnéd?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg bg-blue-300 px-3 py-4">Törlés</button>

                            </form>

                        </td>
                        
                        
                        
                        
                      </tr>
                    </tbody>
                  </table>
                  @endforeach
        </div>

    </div>


    </div>
 
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
	

	<script src="{{asset('js/main.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</x-admin-layout>