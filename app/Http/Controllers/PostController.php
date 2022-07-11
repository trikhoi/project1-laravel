<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(Request $request)
    {
        $posts = Post::where('user_id', '=', auth()->user()->id)->get();
        return view('post', ['posts' => $posts]);
    }

    public function viewPost(Post $post)
    {
        return view('viewpost', ['post' => $post]);
    }

    public function deletePost(Post $post){
        if($post->user_id != auth()->user()->id){
            abort(404,'Bài viết không tồn tại.');
        }
        abort_if(!$post->delete(), 500, 'Không thể xoá');
        return true;
    }

    public function editPost(Post $post){
        if($post->user_id != auth()->user()->id){
            abort(404,'Bài viết không tồn tại');
        }
        return view('editpost',['message' => ''],['post' => $post]);
    }

    public function updatePost(Post $post, Request $request){
        if($post->user_id != auth()->user()->id){
            abort(404,'Bài viết không tồn tại.');
        }

        $user = User::where('user','=',auth()->user()->user)->first();
        if (empty($request->input('title'))) {
            return view('editpost', ['message' => 'Không được để trống title'],['post' => $post]);
        }
        if (empty($request->input('content'))) {
            return view('editpost', ['message' => 'Không được để trống content'],['post' => $post]);
        }

//        $post->update([
//            'title' => $request->input('title'),
//            'content' => $request->input('content'),
//            'slug' => $request->input('slug'),
//        ]);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->slug = $request->input('slug');

        $post->user()->associate($user);
        $post->save();
        return view('viewpost',['mess' => 'Cập nhật thành công'],['post' => $post]);
    }
}
