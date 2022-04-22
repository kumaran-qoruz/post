<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function store(Request $request, $post)
    {

        $this->validate($request, [
            'comment'   => 'required',
            'name'      => 'required',
            'email'     => 'required',
        ]);

        $comment            = new Comment();
        $comment->post_id   = $post;
        $comment->user_id   = Auth::id();
        $comment->reply_username= Auth::user()->name;
        $comment->comment   = $request->comment;
        $comment->name      = $request->name;
        $comment->email     = $request->email;
        $comment->save();

        return back();
    }
}
