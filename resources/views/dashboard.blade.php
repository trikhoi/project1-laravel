@extends('layout')
@section('content')
    <div class="container h-screen">
        <div class="w-full h-screen bg-cyan-200">
            <div class="flex justify-end text-xl text-blue-800 font-bold underline">
                <label>Xin chao {{ auth()->user()->user }}</label>
            </div>
            <form action="" method="post" id="frmPost" name="frmPost">
                @csrf
                <label class="text-blue-800 text-xl">Title</label> <br>
                <input type="text" id="title" name="title"> <br>
                <label class="text-blue-800 text-xl">Liên quan:</label> <br>
                <select id="slug" name="slug" class="text-blue-800 text-xl">
                    <option value="tech" selected>Công nghệ</option>
                    <option value="economy">Kinh tế</option>
                    <option value="life">Đời sống</option>
                    <option value="sport">Thể thao</option>
                </select> <br>
                <label class="text-blue-800 text-xl">Content</label> <br>
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
