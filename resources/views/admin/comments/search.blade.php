@extends('layouts.master');
@section('content')











@foreach ($comments as $comment )


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
    <tbody id="Content">
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

@endsection