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
}
