@extends('layout')
@section('content')
    @foreach($posts as $post)
        <div class="max-w-4xl mx-auto p-10 m-4 rounded-lg bg-cyan-200">
            <ul>
                <li>
                    <a href="/post/{{$post->id}}" class="font-bold text-xl">{{ $post->title}}</a>
{{--                <p>{!! $post->content !!}</p>--}}
                </li>
            </ul>
        </div>
    @endforeach
@endsection
