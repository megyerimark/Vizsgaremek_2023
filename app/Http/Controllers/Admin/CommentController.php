<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('admin.comments.index', compact('comments'));
    }

  

    public function destroy(Comment $comment){
        $comment->delete();
        return to_route('admin.comments.index')->with('danger', 'Komment sikeresen törölve');  
    }

    // public function search(Request $request){
    //     $comments =Comment::where('first_name','Like','%'.$request->search.'%')->
    //     orWhere('last_name','Like','%'.$request->search.'%')->
    //     orWhere('email','Like','%'.$request->search.'%')->
    //     orWhere('comment','Like','%'.$request->search.'%')->get();

    //     foreach($comments as $comment){
    //         $output.= 
    //         "<tr>

    //         <td>  '.$comment->first_name.'</td>

    //         </tr>";
    //     }
    //     return response($output);
    // }

    // public function search(){
    //     $search = $_GET[];
    //     $name_scr = Comment::where('first_name','LIKE','%'.$search.'%')->with('comments')->get();

    //     return  to_route("admin.comments.search", compact('search'));
    // }
}
