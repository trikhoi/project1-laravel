<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
</head>
<body>
<div class="container mx-auto px-4 bg-gray-100 h-screen">
    <div class="flex justify-center items-center h-screen w-full">
        <div class="flex flex-col items-center justify-center h-5/6 w-1/4 bg-center bg-contain bg-no-repeat px-4"
             style="background-image: url(https://i.pinimg.com/564x/f9/e8/f1/f9e8f1168e604c9fd8cd3b5b6fff9d8e.jpg)">
            <label style="font-size: 25px;font-weight: bold">Register</label> <br>
            <form action="" method="Post" id="frmRegister" name="frmRegister">
                @csrf
                <input
                    class="w-full py-2 bg-gray-50 text-gray-600 px-1 outline-sky-700 rounded-lg border border-solid shadow-md mb-4"
                    type="text" id="userName" name="userName" placeholder="Tên đăng nhập"> <br>
                <input
                    class="w-full py-2 bg-gray-50 text-gray-600 px-1 outline-sky-700 rounded-lg border border-solid shadow-md mb-4"
                    type="password" id="password" name="password" placeholder="Mật khẩu"> <br>
                <input
                    class="w-full py-2 bg-gray-50 text-gray-600 px-1 outline-sky-700 rounded-lg border border-solid shadow-md mb-4"
                    type="password" id="password" name="password" placeholder="Xác nhận mật khẩu"> <br>
                <button
                    class="bg-cyan-500 hover:bg-cyan-600 rounded-lg p-2 w-full text-white font-sans shadow-md"
                    type="submit">ĐĂNG KÝ
                </button>
            </form>
            <div class="bg-red-100 rounded-lg py-5 px-6 mt-3 text-base text-red-700 inline-flex items-center w-auto"
                 --}}
                 role="alert">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                     class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 512 512">
                    <path fill="currentColor"
                          d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                </svg>
                {{ $message }}
            </div>
        </div>
    </div>
</div>
</body>
</html>
