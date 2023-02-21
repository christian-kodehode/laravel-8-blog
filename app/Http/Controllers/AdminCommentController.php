<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class AdminCommentController extends Controller
{
    public function index()
    {
        return view('admin.comments.index', [
            'comments' => Comment::orderBy('post_id')->paginate(10)
        ]);
    }
}
