@extends('layout')
@section('content')
    <div class="w-full">
        @foreach($posts as $post)
            <div
                class="max-w-4xl mx-auto p-2 m-4 rounded-lg bg-cyan-800 border shadow hover:shadow-md transition hover:-translate-x-4">
                <a href="/post/{{$post->id}}"
                   class="w-full font-bold text-xl">{{ $post->title}}
                    <div>
                        <button class="bg-black hover:bg-blue-500 text-white p-2 rounded-lg" type="submit">
                            Sửa
                        </button>
                        <button class="bg-black hover:bg-blue-500 text-white p-2 rounded-lg">
                            xoá
                        </button>
                    </div>
                </a>
                {{--                <p>{!! $post->content !!}</p>--}}
            </div>
        @endforeach
    </div>
@endsection
