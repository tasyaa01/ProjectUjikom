<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINTROPISIANIMAL</title>

    <link rel="stylesheet" href="{{ asset('assets_user/css/register.css') }}" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
    <div class="register">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>

        <h2>Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="box-register">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Name">
            </div>

            <div class="box-register">
                <i class="fas fa-envelope-open-text"></i>
                <input type="email" name="email" placeholder="Email Address">
            </div>

            <div class="box-register">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>

            <div class="box-register">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_confirmation" placeholder="Retype password">
            </div>

            <button type="submit" name="register" class="btn-register">Register</button>
            <div class="bottom">
                <p style="color:white">Have Account ? <a href="/login">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>