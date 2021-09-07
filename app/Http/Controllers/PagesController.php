<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function commentPage() {
        $comments = Comment::orderBy('created_at', 'desc')->simplePaginate(3);
        return view('articles', [
            "comments" => $comments
        ]);

    }
}
