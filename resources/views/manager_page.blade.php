@extends('layouts.app')

@section('content')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                if(Auth::user()){
                    if(Auth::user()->role == 'manager'){

                    }
                    else{
                        echo '<h1>Вы не имеете права сюда заходить!</h1>';
                    }
                }
                else{
                    echo '<h1>Вы не имеете права сюда заходить!</h1>';
                }

                ?>
            </div>


        </div>
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#accept_user" role="button" aria-expanded="false" >
                Подтвердить не подтвержденных
            </a>
        </p>
        <div class="collapse" id="accept_user">
            <div class="card card-body">
                <form id="form_accept">
                    <?php
                    foreach($confirm_acc as $t){
                        echo '<div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" name="'.$t->email.'" id="accept_user">
                                                    </div>
                                                </div>
                                              <p type="text" class="form-control" >'.$t->name.' '.$t->surname.'  Роль: '.$t->role.'</p>
                                            </div>';
                    }
                    ?>
                    <button type="submit" class="btn btn-primary">Подтвердить</button>
                </form>
            </div>
        </div>

        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#create_subject" role="button" aria-expanded="false" >
                Создать предмет
            </a>
        </p>
        <div class="collapse" id="create_subject">
            <div class="card card-body">
                <form id="form_create_subject">
                   <input id="name_of_subject">
                    <select id="name_of_group" name="name_of_group" class="form-control">
                        <option selected>Choose...</option>
                        <?php
                        foreach ($group as $t){
                            echo "<option>".$t->name."</option>";
                        }
                        ?>
                    </select>
                    <select id="teacher_name" name="teacher_name" class="form-control">
                        <option selected>Choose...</option>
                        <?php
                            foreach ($teachers as $t){
                                echo "<option value='".$t->id_teacher."'>".$t->FIO."</option>";
                            }
                            foreach ($managers as $t){
                                echo "<option value='".$t->email."'>".$t->fio."</option>";
                            }
                        ?>
                    </select>
                    <button type="submit" class="btn btn-primary">Подтвердить</button>
                </form>
            </div>
        </div>
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#create_group" role="button" aria-expanded="false" >
                Создать группу
            </a>
        </p>
        <div class="collapse" id="create_group">
            <div class="card card-body">
                <form id="form_create_subject">
                    <input id="C_name_of_group">

                    <button type="submit" class="btn btn-primary">Подтвердить</button>
                </form>
            </div>
        </div>
    </div>
    <script>

        $('#create_group').submit(function(e) {
            e.preventDefault();
            $.ajax({
                method: 'POST',
                url: 'http://phosphene/manager_page/create_group',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    "name_of_group" :$("#C_name_of_group").val(),

                },
                success: function(arg) {
                    console.log(arg);
                }
            })
        })
        //create subject
        $('#create_subject').submit(function(e) {
            e.preventDefault();
            let chosen = new Array();

            $.ajax({
                method: 'POST',
                url: 'http://phosphene/manager_page/create_subject',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    "name_of_subject" :$("#name_of_subject").val(),
                    "name_of_group" : $("#name_of_group").val(),
                    "teacher_name" : $("#teacher_name").val()
                },
                success: function(arg) {
                    console.log(arg);
                }
            })
        })
        //accept student
        $('#form_accept').submit(function(e) {
            e.preventDefault();
            let teachers = $('input#accept_user');
            let chosen = new Array();
            for(let i = 0; i < teachers.length; i++){
                if(teachers[i].checked){
                    chosen.push(teachers[i].name);
                }
            }
            $.ajax({
                method: 'POST',
                url: 'http://phosphene/manager_page/confirm_students',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    'chosen':chosen,
                },
                success: function(arg) {
                    console.log(arg);
                }
            })
        })

    </script>
@endsection

@endsection
