@extends('layouts.app')

@section('content')

    <div class="container">

            <div >

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

                    <div class="card pd-20 pd-sm-40" >
                        <h6 class="card-body-title mg-t-20">Назначить зав кафедрой</h6>


                        <div class="table-responsive">
                            <form id="myForm">
                                @csrf
                                <select id="teacher_name" class="form-control select2  mg-t-20" data-placeholder="Выбрать учителя">

                                    <?php
                                    foreach($managers as $m){
                                        echo '
                                               <option value="'.$m->id_manager.'" id="id_manager">'.$m->FIO.'</option>
                                        ';
                                    }?>
                                </select>
                                <div class="input-group mg-t-20" >
                                    <input type="text" class="form-control" placeholder="Название кафедры " id="name_of_kafedra">
                                </div>
                                <button type="submit" class="btn btn-primary  mg-t-20">Назначить</button>
                            </form>
                        </div>
                    </div><!-- card -->





                <div id="accept_user">
                        <div class="card card-body">
                            <form id="form_accept">
                                <?php
                                foreach($confirm_acc as $t){
                                    echo '<div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" name="'.$t->id.'" id="accept_user">
                                                    </div>
                                                </div>
                                              <p type="text" class="form-control" value="'.$t->id.'">'.$t->name.' '.$t->surname.'  Роль: '.$t->role.'</p>
                                            </div>';
                                }
                                ?>
                            <button type="submit" class="btn btn-primary">Подтвердить</button>
                            </form>
                        </div>
                    </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 style="padding-left: 20px">
                <div style="background:#fff; padding: 20px; width: 100%" >
                    <h6 class="card-body-title">База данных пользователей</h6>


                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                            <tr>
                                <th class="wd-15p">Имя</th>
                                <th class="wd-15p">Фамилия</th>
                                <th class="wd-20p">Должность</th>
                                <th class="wd-15p">Подтвержден</th>
                                <th class="wd-10p">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($users as $user){
                                echo '<tr><td>'.$user->name.'</td>
                            <td>'.$user->surname.'</td>
                            <td>'.$user->role.'</td>
                            <td>'.$user->status.'</td>
                            <td>'.$user->email.'</td></tr>';
                            }

                            ?>
                            </tbody>
                        </table>
                    </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>


    </div>

    <script>
        $(function(){
            'use strict';

            $('#datatable1').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Найти...',
                    sSearch: '',
                    lengthMenu: '_MENU_ пользователи/страница',
                }
            });



            // Select2
            $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        });
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
