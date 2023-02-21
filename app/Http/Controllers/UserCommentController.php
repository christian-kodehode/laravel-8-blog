<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class UserCommentController extends Controller
{
        public function index()
    {
        return view('user.comments.index', [
            'comments' => Comment::orderBy('post_id')->where('user_id', auth()->user()->id )->paginate(10)
        ]);
    }
}
