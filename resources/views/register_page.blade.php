
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Авторизация</title>

    <!-- vendor css -->
    <link href="{{URL::asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{URL::asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="../css/starlight.css">
</head>

<body>

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">StarLight</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>
        <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="{{URL::asset('lib/jquery/jquery.js)}}"></script>
<script src="{{URL::asset('lib/popper.js/popper.js)}}"></script>
<script src="{{URL::asset('lib/bootstrap/bootstrap.js')}}"></script>

</body>
</html>
