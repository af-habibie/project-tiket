<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            "comment" => "required"
        ]);

        Comment::create([
            'author_id' => $request->author_id, 
            'user_id' => $request->user_id, 
            'post_id' => $request->post_id, 
            'comment' => $request->comment, 
            'parent_id' => empty($request->parent_id) ? null : $request->parent_id
        ]);

        return back();
    }
}
