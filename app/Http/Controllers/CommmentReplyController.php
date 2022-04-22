<?php

namespace App\Http\Controllers;

use App\CommentReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommmentReplyController extends Controller
{
    public function store(Request $request, $commentpost)
    {


        $this->validate($request, ['message' => 'required']);

        $CommentRpl             = new CommentReply();
        $CommentRpl->comment_id = $commentpost;
        $CommentRpl->user_id    = Auth::id();
        $CommentRpl->message    = $request->message;
        $CommentRpl->save();

        return back();
    }
}
