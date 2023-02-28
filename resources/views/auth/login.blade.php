<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINTROPISIANIMAL</title>

    <link rel="stylesheet" href="{{ asset('assets_user/css/login.css') }}" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
    <div class="login">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>

        <h2>Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="box-login">
                <i class="fas fa-envelope-open-text"></i>
                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  placeholder="Email Address" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="box-login">
                <i class="fas fa-lock"></i>
                <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" name="login" class="btn-login">Login</button>
            <!-- <div class="bottom">
                <p style="color:white">Don't Have Account ? <a href="/register">Register</a></p>
            </div> -->
        </form>
    </div>
</body>
</html>