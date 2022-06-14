<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

</head>
<body>
<div class="container mx-auto px-4 bg-gray-300 h-screen">
    <div class="flex flex-row items-center h-screen">
        <div class="w-full flex items-center justify-center">
            <img
                src="https://i.pinimg.com/originals/b0/02/e2/b002e28e6024630bb75dc22e0a1b6053.jpg"
                class="w-1/2 h-96  object-cover rounded-full" alt="logo"
            />
        </div>

        <div class="w-full flex items-start justify-start">
            <form action="" id="frmLogin" name="frmLogin">
                <div class="bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-auto"
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
                            class="flex items-center justify-center bg-cyan-500 hover:bg-cyan-600 rounded-lg p-2 w-full text-white font-sans shadow-md"
                            type="submit">ĐĂNG NHẬP
                        </button>
                    </div>
                    <a href="/register">
                        <label class="underline hover:text-blue-700" >Đăng ký</label>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

{{--<section class="h-screen">--}}
{{--    <div class="container px-6 py-12 h-full">--}}
{{--        <div class="flex justify-center items-center h-full g-6 bg-gray-500">--}}
{{--            <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">--}}
{{--                <img--}}
{{--                    src="https://i.pinimg.com/originals/b0/02/e2/b002e28e6024630bb75dc22e0a1b6053.jpg"--}}
{{--                    class="w-[50%] ml-96 justify-end rounded-lg shadow-lg" alt="login"--}}
{{--                />--}}
{{--            </div>--}}
{{--            <div class="md:w-8/12 lg:w-5/12 lg:ml-20" >--}}
{{--                <form id="frmLogin" name="frmLogin">--}}
{{--                    <!-- Email input -->--}}
{{--                    <div class="mb-6">--}}
{{--                        <input--}}
{{--                            type="text"--}}
{{--                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"--}}
{{--                            placeholder="Email address"--}}
{{--                        />--}}
{{--                    </div>--}}

{{--                    <!-- Password input -->--}}
{{--                    <div class="mb-6">--}}
{{--                        <input--}}
{{--                            type="password"--}}
{{--                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"--}}
{{--                            placeholder="Password"--}}
{{--                        />--}}
{{--                    </div>--}}

{{--                    <div class="flex justify-between items-center mb-6">--}}
{{--                        <div class="form-group form-check">--}}
{{--                            <input--}}
{{--                                type="checkbox"--}}
{{--                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"--}}
{{--                                id="exampleCheck3"--}}
{{--                                checked--}}
{{--                            />--}}
{{--                            <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"--}}
{{--                            >Remember me</label--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                        <a--}}
{{--                            href="#!"--}}
{{--                            class="text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out"--}}
{{--                        >Forgot password?</a--}}
{{--                        >--}}
{{--                    </div>--}}

{{--                    <!-- Submit button -->--}}
{{--                    <button--}}
{{--                        type="submit"--}}
{{--                        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"--}}
{{--                        data-mdb-ripple="true"--}}
{{--                        data-mdb-ripple-color="light"--}}
{{--                    >--}}
{{--                        Sign in--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
</body>
</html>
