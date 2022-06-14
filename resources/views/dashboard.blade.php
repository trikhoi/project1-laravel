<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Post</title>
</head>
<body>
    <h1 class="text-3xl font-bold underline">
        Xin chao {{ auth()->user()->user }}
    </h1>
    <form action="" method="post" id="frmPost" name="frmPost">
        @csrf
        <label>Title</label> <br>
        <input type="text" id="title" name="title" size="31"> <br>
        <label>Liên quan:</label> <br>
        <select id="slug" name="slug">
            <option value="tech" selected>Công nghệ</option>
            <option value="economy">Kinh tế</option>
            <option value="life">Đời sống</option>
            <option value="sport">Thể thao</option>
        </select> <br>
        <label>Content</label> <br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea> <br>
        <input type="submit" value="Post">
    </form>
{{ $message }}
</body>
</html>
