<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(Request $request)
    {
        $posts = Post::where('user_id', '=', auth()->user()->id)->get();
        return view('post', ['posts' => $posts]);
    }
}
