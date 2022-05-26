<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Register</h1>
    <form action="" method="Post" id="frmRegister" name="frmRegister">
        @csrf
        <label>User</label> <br>
        <input type="text" id="userName" name="userName"> <br>
        <label>Password</label> <br>
        <input type="password" id="password" name="password"> <br>
        <label>Confirm password</label> <br>
        <input type="password" id="repass" name="repass"> <br> <br>
        <input type="submit" value="Register">
    </form>
</div>
{{ $message }}
</body>
</html>
