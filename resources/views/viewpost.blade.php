@extends('layout')
@section('content')
        <div>
            <div>
                <button class="bg-cyan-500 hover:bg-cyan-600 rounded-lg p-2 text-white font-sans shadow-md">
                    <a href="/post">Danh sách bài viết</a>
                </button><br />

                <label class="font-bold text-xl">{{ $post->title }}</label>
                <p>{!! $post->content !!}</p>
            </div>
        </div>
@endsection
