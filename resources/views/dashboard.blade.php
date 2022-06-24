@extends('layout')
@section('content')
    <div class="container h-screen max-w-6xl mx-auto">
        <div class="w-full h-screen bg-gray-500 p-6">
            {{--            <div class="flex justify-end text-xl text-white font-bold underline">--}}
            {{--                    <label>Xin chao {{ auth()->user()->user }}</label>--}}
            {{--            </div>--}}

            <div class="flex justify-end text-white">
                <div class="dropdown inline-block relative">
                    <button class="bg-gray-300 text-gray-700 font-semibold px-8 rounded inline-flex items-center">
                        <span class="mr-1">{{ auth()->user()->user }}</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                        <li class=""><a
                                class="rounded-lg bg-gray-200 hover:bg-gray-400 px-8 block whitespace-pre"
                                href="/">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>

            <button class="bg-cyan-500 hover:bg-cyan-600 rounded-lg p-2 text-white font-sans shadow-md">
                <a href="/post">Danh sách bài viết</a>
            </button>
            <form action="" method="post" id="frmPost" name="frmPost">
                @csrf
                <label class="text-white text-xl">Title</label> <br>
                <input
                    class="w-full py-2 bg-gray-50 text-gray-600 px-1 my-2 outline-sky-700 rounded-lg border border-solid shadow-md "
                    type="text" id="title" name="title" placeholder="Nhập tiêu đề"> <br>
                <label class="text-white text-xl">Vấn đề</label> <br>
                <select id="slug" name="slug" class="my-2">
                    <option value="tech" selected>Công nghệ</option>
                    <option value="economy">Kinh tế</option>
                    <option value="life">Đời sống</option>
                    <option value="sport">Thể thao</option>
                </select> <br>
                <label class="text-white text-xl mb-2">Content</label> <br>
                <textarea name="content" id="content"></textarea> <br>
                <button class="bg-cyan-500 hover:bg-cyan-600 rounded-lg p-2 text-white font-sans shadow-md"
                        type="submit">Đăng bài
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
            </script>
    @endpush
