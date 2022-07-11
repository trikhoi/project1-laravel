@extends('layout')
@section('content')
    <div class="container h-full max-w-6xl mx-auto">
        <div class="w-full h-full bg-gray-500 p-6">
            {{--            <div class="flex flex-col justify-end items-end text-xl text-white">--}}
            {{--                <button id="user-btn"--}}
            {{--                        class="bg-cyan-500 hover:bg-cyan-600 rounded-lg px-3 text-white font-sans drop-shadow-md">--}}
            {{--                    Xin chao {{ auth()->user()->user }}--}}
            {{--                </button>--}}
            {{--                <div class="hidden flex-col bg-cyan-400 px-2 mt-1 rounded text-xl" id="dropdown">--}}
            {{--                    <a href="/" class="px-2 hover:bg-cyan-800 rounded">Đăng xuất</a>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="dropdown">--}}
            {{--                <button class="dropbtn"> {{ auth()->user()->user }} </button>--}}
            {{--                <div class="dropdown-content">--}}
            {{--                    <a href="/">Đăng xuất</a>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <button class="bg-cyan-500 hover:bg-cyan-600 rounded-lg p-2 text-white font-sans shadow-md">--}}
            {{--                <a href="/post">Danh sách bài viết</a>--}}
            {{--            </button>--}}
            <form action="{{ route('post.update', ['post' => $post->id]) }}" method="post" id="frmPost" name="frmPost">
                @csrf
                <label class="text-white text-xl">Title</label> <br>
                <input
                    class="w-full py-2 bg-gray-50 text-gray-600 px-1 my-2 outline-sky-700 rounded-lg border border-solid shadow-md "
                    type="text" id="title" name="title" value="{{ $post->title }}" placeholder="Nhập tiêu đề"> <br>
                <label class="text-white text-xl">Vấn đề</label> <br>
                <select id="slug" name="slug" class="my-2">
                    <option value="tech">Công nghệ</option>
                    <option value="economy">Kinh tế</option>
                    <option value="life">Đời sống</option>
                    <option value="sport">Thể thao</option>
                </select> <br>
                <label class="text-white text-xl mb-2">Content</label> <br>
                <textarea name="content" id="content">{{ $post->content }}</textarea> <br>
                <button class="bg-cyan-500 hover:bg-cyan-600 rounded-lg p-2 text-white font-sans shadow-md"
                type="submit">
                    Cập nhật
                </button>
            </form>
            {{ $message }}
        </div>
        @endsection
        @push('js')
            <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
            <script>
                tinymce.init({
                    relative_urls: false,
                    selector: "#content",
                    images_file_types: 'jpg,svg,webp',
                    block_unsupported_drop: false,
                    plugins: 'code table lists | image | image imagetool',
                    toolbar: 'undo redo | image | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
                    // toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
                    file_picker_callback: function (callback, value, meta) {
                        let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                        let y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                        let type = 'image' === meta.filetype ? 'Images' : 'Files',
                            url = '/laravel-filemanager?editor=tinymce5&type=' + type;

                        tinymce.activeEditor.windowManager.openUrl({
                            url: url,
                            title: 'Filemanager',
                            width: x * 0.8,
                            height: y * 0.8,
                            onMessage: (api, message) => {
                                callback(message.content);
                            }
                        });
                    }
                });

                function repairPost(id) {
                    axios.post('/post/' + id + '/edit').then(
                        function () {

                        }
                    );
                }
            </script>
    @endpush
