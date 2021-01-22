<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">


    <title>Регистрация</title>

    <!-- vendor css -->
    <link href="{{URL::asset('lib/font-awesome/css/font-awesome.css') }})" rel="stylesheet">
    <link href="{{URL::asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('lib/select2/css/select2.min.css')}}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/starlight.css')}}">
</head>

<body>

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <form method="POST" id="create" action="">
            @csrf

            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">StarLight</div>

            <div class="form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Введите свое имя" id="name" name="name"  value="{{ old('name') }}" required autocomplete="name" autofocus  enctype="multipart/form-data">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->

            <div class="form-group">
                <input type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="Введите свою фамилию" id="surname " name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><!-- form-group -->

            <div class="form-group">
                <input type="email" class="form-control  @error('name') is-invalid @enderror" placeholder="email" id="email " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><!-- form-group -->

            <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" id="password " name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Accept your password" id="password " name="password_confirmation" required autocomplete="new-password">
            </div><!-- form-group -->

            <div class="form-group">
                <select class="form-control select2" data-placeholder="Роль" id="role" name="role">
                    <option label="Роль"></option>
                    <option value="student">Студент</option>
                    <option value="teacher">Преподаватель</option>
                    <option value="manager">Менеджер</option>
                    <option hidden value="admin">Администратор</option>
                </select>

            </div><!-- form-group -->

            <div class="form-group" id="group_div" style="display: none" >
                    <select id="group" name="group" class="form-control select2">
                        <option selected disabled>Выберите группу...</option>
                        <?php
                        foreach($mygroup as $q){
                            echo "<option>".$q->name."</option>";
                        };
                        ?>
                    </select>

            </div>
            <div class="form-group" id="course_div" style="display: none" >
                <select id="course" name="course" class="form-control select2">
                    <option selected disabled>Выберите курс...</option>
                    <option> 1</option>
                    <option> 2</option>
                    <option> 3</option>
                    <option> 4</option>
                    <option> 5</option>
                </select>
            </div>

            <div class="form-group" id="chair_div" style="display: none">
                <input type="text" class="form-control" placeholder="Название кафедры" id="chair_name" name="chair_name">

            </div>
            <div class="col-md-6">
                <input type="file" name="select_file" value="select_file" id="select_file" class="form-control">
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-info btn-block">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>


        </form>

        <div class="mg-t-40 tx-center">Already have an account? <a href="../login" class="tx-info">Sign In</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="{{URL::asset('lib/jquery/jquery.js')}}"></script>
<script src="{{URL::asset('lib/popper.js/popper.js')}}"></script>
<script src="{{URL::asset('lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{URL::asset('lib/select2/js/select2.min.js')}}"></script>
<script>
    $('#role').change(function() {

        switch ($('#role').val()) {
            case 'student':
                $('#group_div').css('display', 'block');
                $('#course_div').css('display', 'block');
                break;
            case 'teacher':
                $('#group_div').css('display', 'none');
                $('#course_div').css('display', 'none');
                break;
            case 'manager':
                $('#group_div').css('display', 'none');
                $('#course_div').css('display', 'none');
                break;
        }
    })


    $('#create').submit(function(e) {
        e.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'http://phosphene/register',
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function(arg) {
                if(arg == "successful"){
                    document.location.href = "../login";
                }
               alert(arg);
               console.log(arg);
            }
        })


    })
</script>

</body>
</html>
