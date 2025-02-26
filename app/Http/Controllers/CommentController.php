<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $post->comments()->create([
            'body' => $request->body,
            'user_id' => auth()->id(),
        ]);

        return back();
    }

    public function destroy(Post $post, Comment $comment)
    {
        if ($comment->user_id == auth()->id()) {
            $comment->delete();
        }

        return back();
    }
}
