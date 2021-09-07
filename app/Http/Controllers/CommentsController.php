<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function add(Request $request) {
        $FormData =$request->only('name', 'body');

        $comment = Comment::create([
            "name" => $FormData["name"],
            "body" => $FormData["body"]
        ]);

        if ($comment) {
            return redirect()->back();
        } else {
            abort(404);
        }
    }
}
