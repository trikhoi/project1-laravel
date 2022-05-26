<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

</head>
<body>
<div>
    <h1>Login</h1>
    <form method="Post" id="frmLogin" name="frmLogin">
        @csrf
        <label>User</label>
        <input type="text" id="userName" name="userName"> <br>
        <label>Password</label>
        <input type="password" id="password" name="password"> <br>
        <input type="submit" value="Login">
    </form>
</div>
{{ $message }}
</body>
</html>
