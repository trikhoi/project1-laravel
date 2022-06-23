@extends('layout')
@section('content')
        <div>
            <label class="font-bold text-xl">{{ $post->title }}</label>
            <p>{!! $post->content !!}</p>
        </div>
@endsection
