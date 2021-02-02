@extends('layouts.app')

@section('content')


@section('content')

    <div class="container" style="padding-right: 50px">

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

        <div id="accept_user" class="col-4">
            <div class="card card-body">

                <form id="form_accept">
                    <?php
                    if(count($confirm_acc)){
                        echo '<h3>Подтвердить новых пользователей</h3>';
                        foreach($confirm_acc as $t){
                            echo '<div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" name="'.$t->email.'" id="accept_user">
                                                    </div>
                                                </div>
                                              <p type="text" class="form-control" >'.$t->name.' '.$t->surname.'  Роль: '.$t->role.'</p>
                                            </div>
  <button type="submit" class="btn btn-primary">Подтвердить</button>';
                        }
                    }
                    else{
                        echo '<h3>Нет пользователей, ожидающих подтверждения</h3>';
                    }

                    ?>

                </form>
            </div>
        </div>


        <div id="create_subject " class="col-4">
            <div class="card card-body">
                <form id="form_create_subject">
                    <h2>Создать учебную дисцеплину</h2>
                   <input id="name_of_subject" placeholder="Введите название предмета" type="text" class="form-control" style="margin-top: 15px">
                    <select id="name_of_group" name="name_of_group" class="form-control" style="margin-top: 15px" >
                        <option selected>Выберите группу...</option>
                        <?php
                        foreach ($group as $t){
                            echo "<option>".$t->name."</option>";
                        }
                        ?>
                    </select>
                    <select id="teacher_name" name="teacher_name" class="form-control" style="margin-top: 15px">
                        <option selected>Выберите преподавателя...</option>
                        <?php
                            foreach ($teachers as $t){
                                echo "<option value='".$t->id_teacher."'>".$t->FIO."</option>";
                            }
                            foreach ($managers as $t){
                                echo "<option value='".$t->email."'>".$t->fio."</option>";
                            }
                        ?>
                    </select>
                    <button type="submit" class="btn btn-primary" style="margin-top: 15px">Подтвердить</button>
                </form>
            </div>
        </div>

        <div id="create_group" class="col-4">
            <div class="card card-body">
                <form id="form_create_subject">
                    <h2>Создать учебную группу</h2>
                    <input id="C_name_of_group" type="text" class="form-control" placeholder="Введите название группы" style="margin-top: 15px">

                    <button type="submit" class="btn btn-primary" style="margin-top: 15px">Подтвердить</button>
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
