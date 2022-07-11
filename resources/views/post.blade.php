@extends('layout')
@section('content')
    <div class="w-full">
        <div>
            <button class="bg-cyan-500 hover:bg-cyan-600 rounded-lg p-2 text-white font-sans shadow-md">
                <a href="/dashboard">Thêm bài viết</a>
            </button><br />
        </div>
        @foreach($posts as $post)
            <div
                class="max-w-4xl mx-auto p-2 m-4 rounded-lg bg-cyan-800 border shadow hover:shadow-md transition hover:-translate-x-4">
                <a href="/post/{{$post->id}}" class="w-full font-bold text-xl">
                    <div>
                        <span class="mb-4 text-sky-500">
                            {{ $post->title}}
                        </span>
                    </div>
                </a>
                <div>
                    <button class="bg-black hover:bg-blue-500 text-white p-2 rounded-lg">
                        <a href="{{ route('post.edit', ['post' => $post->id]) }}">Sửa</a>
                    </button>
                    <button x-data="{}" @click.prevent="deletePost({{ $post->id }})" class="bg-black hover:bg-blue-500 text-white p-2 rounded-lg">
                        Xoá
                    </button>
                </div>
                {{--                <p>{!! $post->content !!}</p>--}}
            </div>
        @endforeach
    </div>
@endsection
@push('js')
    <script>
        function deletePost(id){
            axios.post('/post/' + id + '/delete').then(
                function (){
                    alert('Xoá bài viết thành công.');
                    window.location.reload();
                }
            );
        }
    </script>
@endpush
