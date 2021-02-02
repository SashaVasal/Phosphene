<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Авторизация</title>

    <!-- vendor css -->
    <link href="{{URL::asset('lib/font-awesome/css/font-awesome.css" rel="stylesheet')}}">
    <link href="{{URL::asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="../css/starlight.css">
</head>

<body>

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">

        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse" style="margin-bottom: 20px">Phosphene</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Введите email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->

            <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Введите пароль" id="password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            <div class="form-group">
                <button type="submit" class="btn btn-info btn-block">
                    {{ __('Ввод') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

        </form>
        <div class="mg-t-20 tx-center">Нет аккаунта? Зарегистрируйтесь! <a href="../register" class="tx-info">Зарегистрироваться</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="{{URL::asset('lib/jquery/jquery.js')}}"></script>
<script src="{{URL::asset('ib/popper.js/popper.js')}}"></script>
<script src="{{URL::asset('lib/bootstrap/bootstrap.js')}}"></script>

</body>
</html>
