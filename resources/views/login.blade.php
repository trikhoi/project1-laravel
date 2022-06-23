@extends('layout')
@section('content')
    <div class="container mx-auto px-4 bg-gray-500 h-screen">
        <div class="flex flex-row items-center h-screen">
            <div class="w-full flex items-center justify-center">
                <img
                    src="https://i.pinimg.com/originals/b0/02/e2/b002e28e6024630bb75dc22e0a1b6053.jpg"
                    class="w-1/2 h-96  object-cover rounded-full" alt="logo"
                />
            </div>

            <div class="w-full flex items-start justify-start">
                <form action="" id="frmLogin" name="frmLogin">
                    <div
                        class="bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-auto"
                        role="alert">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                             class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <path fill="currentColor"
                                  d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                        </svg>
                        {{ $message }}
                    </div>

                    <div class="bg-white w-96 p-6 rounded shadow-sm">
                        <input
                            class="w-full py-2 bg-gray-50 text-gray-600 px-1 outline-sky-700 rounded-lg border border-solid shadow-md mb-4"
                            type="text" id="userName" name="userName" placeholder="Tên đăng nhập"/>
                        <input
                            class="w-full py-2 bg-gray-50 text-gray-600 px-1 outline-sky-700 rounded-lg border border-solid shadow-md mb-4"
                            type="password" id="password" name="password" placeholder="Mật khẩu"/>
                        <div class="flex items-center justify-center md-4">
                            <button
                                class="bg-cyan-500 hover:bg-cyan-600 rounded-lg p-2 w-full text-white font-sans shadow-md"
                                type="submit">ĐĂNG NHẬP
                            </button>
                        </div>
                        <a href="/register">
                            <label class="underline hover:text-blue-700">Đăng ký</label>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
