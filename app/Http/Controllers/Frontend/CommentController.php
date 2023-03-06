<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Validator;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('thankyou', compact('comments'));
    }
    public function storeComment(Request $request)
    {
       
           $comments = Comment::create([
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "email" => $request->email,
                "comment" => $request->comment,
    
            ]);
            $comments->save();
            return view('thankyou');
        }
       
      
      
    }