<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();

        return view('comments', ['comments' => $comments]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:2555',
        ]);

        $comment = new Comment();
        $comment->comment = $validated['comment'];
        $comment->user_id = auth()->user()->id;
        $comment->save();

        return redirect('/comments')->with('success', 'Comment posted successfully.');
    }
}

