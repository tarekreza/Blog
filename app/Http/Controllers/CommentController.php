<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        
        $request->validate(['comment' => 'required']);
        Comment::create([
            'body' => $request->comment,
            'user_id' => auth()->id(),
            'post_id' => $post->id
        ]);
        return back();
    }
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back()->with('status', 'Comment deleted successfully');
    }
}
