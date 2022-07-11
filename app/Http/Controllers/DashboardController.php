<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $posts = Post::all();
        $user = User::where('user','=',auth()->user()->user)->first();

        if (empty($request->input('title'))) {
            return view('dashboard', ['message' => 'Khong duoc de trong title']);
        }
        if (empty($request->input('content'))) {
            return view('dashboard', ['message' => 'Khong duoc de trong content']);
        }

        $post = Post::make([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'slug' => $request->input('slug'),
        ]);
        $post->user()->associate($user);
        $post->save();

        return view('dashboard',['message' => 'them bai viet thanh cong']);
    }
}
