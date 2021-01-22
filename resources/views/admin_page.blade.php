@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                if(Auth::user()){
                    if(Auth::user()->role == 'admin'){

                    }
                    else{
                        echo '<h1>Вы не имеете права сюда заходить!</h1>';
                    }
                }
                else{
                    echo '<h1>Вы не имеете права сюда заходить!</h1>';
                }
                ?>

                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Назначить зав кафедрой</h6>
                        <p class="mg-b-20 mg-sm-b-30">Using the most basic table markup.</p>

                        <div class="table-responsive">
                            <form id="myForm">
                                @csrf
                                <select id="teacher_name" class="form-control select2" data-placeholder="Выбрать учителя">

                                    <?php
                                    foreach($managers as $m){
                                        echo '
                                               <option value="'.$m->id_manager.'" id="id_manager">'.$m->FIO.'</option>
                                        ';
                                    }?>
                                </select>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Название кафедры " id="name_of_kafedra">
                                </div>
                                <button type="submit" class="btn btn-primary">Назначить</button>
                            </form>
                        </div>
                    </div><!-- card -->



                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseKafedra" role="button" aria-expanded="false" >
                        Формировать
                    </a>
                </p>
                <div class="collapse" id="collapseKafedra">
                    <div class="card card-body">
                        <button type="submit" class="btn btn-primary">Назначить</button>

                        </form>
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
                        <a class="btn btn-primary" data-toggle="collapse" href="#decrease" role="button" aria-expanded="false" >
                            Приказ старосты 482
                        </a>
                    </p>
                    <div class="collapse" id="decrease">
                        <div class="card card-body">
                            <form id="decrease_managers">
                                <?php
                                foreach($managers as $t){
                                    echo '<div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" name="'.$t->email.'" id="decrease_manager">
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
            </div>

        </div>
    </div>
    <script>

        $('#form_accept').submit(function(e) {
            e.preventDefault();
            let teachers = $('input#accept_user');
            let chosen = new Array();
            for(let i = 0; i < teachers.length; i++){
                if(teachers[i].checked){
                    chosen.push(teachers[i].name);
                }
            }
            console.log(chosen);
            $.ajax({
                method: 'POST',
                url: 'http://phosphene/admin_page/confirm_students',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    'chosen':chosen,
                },
                success: function(arg) {
                    console.log(arg);
                }
            })
        })

        $('#decrease_managers').submit(function(e) {
            e.preventDefault();
            let teachers = $('input#decrease_manager');
            let chosen = new Array();
            for(let i = 0; i < teachers.length; i++){
                if(teachers[i].checked){
                    chosen.push(teachers[i].name);
                }
            }
            $.ajax({
                method: 'POST',
                url: 'http://phosphene/admin_page/drop_manager',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    'chosen':chosen,
                },
                success: function(arg) {
                    console.log(arg);
                }
            })
        })

        $('#myForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                method: 'POST',
                url: 'http://phosphene/admin_page/app_manager',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    'id_manager':$('#id_manager').val(),
                    'name_of_kafedra':$('#name_of_kafedra').val(),
                },
                success: function(arg) {
                    console.log(arg);
                }
            })
        })

    </script>
@endsection
