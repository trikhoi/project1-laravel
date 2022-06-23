<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostViewController extends Controller
{
    public function viewPost(Post $post)
    {
        return view('viewpost', ['post' => $post]);
    }

}
