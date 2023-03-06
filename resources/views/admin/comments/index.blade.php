<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <div class="container">
        <div class="search">
            <input type="search" name="search" id="search" placeholder="Keresés" class="form-control">
        </div>
    </div>

    <div class="py-12">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="/dist/output.css" rel="stylesheet">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                @foreach ($comments as $comment )
                    
                <style>
                    #k{
                        background-color: white;
                    }
                    .search{
                        width: 100%;
                        text-align: center;
                        padding-top: 15px;
                        margin-bottom: 15px; ;
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
    <script type="text/javascript">
        $('#search').on('keyup', function()
        {

            $value =$(this).val();
            // alert($value);
            $.ajax({
                type:'post',
                url:"{{URL::to('search')}}",
                data:{'search':$value},
            });
        })

    </script>

   
</x-admin-layout>