@extends('layouts.app')

@section('content')


@section('content')

    <div class="container">

                <?php
                function RefreshComment($id){
                    echo ".<script>$('#tbodyid').empty()</script>.";
                    echo $id;
                };
                $id = 0;
                 if($sections){
                     $id = $sections[0]->id;
                 }

                if(Auth::user()){
                    if(Auth::user()->role == 'teacher'){

                    }
                    else{
                        echo '<h1>Вы не имеете права сюда заходить!</h1>';
                    }
                }
                else{
                    echo '<h1>Вы не имеете права сюда заходить!</h1>';
                }

                ?>




        <div class="card pd-20 col-6" >
            <h2 >Таблица дисциплин</h2>
            <div id="create_section" class="" style="">
                <div class="card card-body">
                    <form id="form_create_subject">
                        <h6> Создать раздел</h6>
                        <input id="name_of_section" placeholder="Введите название раздела" class="form-control" style="margin-top: 15px">
                        <select id="name_of_group" name="teacher_name" class="form-control" style="margin-top: 15px">
                            <option selected disabled >Выберите группу...</option>
                            <?php
                            foreach ($subjects as $s){
                                echo '<option value="'.$s->id.'">'.$s->name.' '.$s->group.'</option>';
                            }
                            ?>
                        </select>
                        <button type="submit" class="btn btn-primary" style="margin-top: 15px">Подтвердить</button>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered mg-b-0">
                    <thead>
                    <tr>
                        <th>Автор</th>
                        <th>Предмет</th>
                        <th>Название темы</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($sections as $s){
                        echo '
                            <tr>
                                    <td>'.DB::table("teachers")->where("id_teacher", $s->id_teacher)->first()->FIO .'</td>
                                         <td>'.DB::table("subjects")->find($s->subject_id)->name .'</td>
                                    <td><a href="#" > Открыть чат</a></td>

                            </tr>
                     ';
                    }

                    ?>


                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div><!-- card -->
        <div style="padding: 20px" class="col-5">
            <div  style="background: #fff; margin-left: 15px;">
                <div class="row justify-content-center">
                    <iframe src="../section/<?php echo $id;?>" style="width:100%; height:650px;">
                        <div class="chat-container col-5">
                            <ul class="chat-box chatContainerScroll"  id="tbodyid">
                                <?php
                                foreach (DB::table('comments')->where('section_id',$id)->get() as $c){
                                    if($c->from == Auth::user()->id){
                                        echo '<li class="chat-right">';
                                        echo ' <div class="chat-hour">'.$c->created_at.' <span class="fa fa-check-circle"></span></div>';
                                        echo '<div class="chat-text">'.$c->value;
                                        if($c->file){
                                            echo '<br> <a href="../images/'.$c->file.'" download>'.$c->file.'</a>';
                                        }
                                        echo '</div>';

                                        echo '
                                <div class="chat-avatar">
                                    <img src="../images/'.DB::table("users")->find($c->from)->image.'" alt="Retail Admin">
                                    <div class="chat-name">'.DB::table("users")->find($c->from)->surname.' '.DB::table("users")->find($c->from)->name.'</div>
                                </div>';
                                    }
                                    else{
                                        echo '<li class="chat-left">';
                                        echo '<div class="chat-avatar">
                                    <img src="../images/'.DB::table("users")->find($c->from)->image.'" alt="Retail Admin">
                                    <div class="chat-name">'.DB::table("users")->find($c->from)->surname.' '.DB::table("users")->find($c->from)->name.'</div>
                                </div>';

                                        echo '<div class="chat-text">'.$c->value;
                                        if($c->file){
                                            echo '<br> <a href="../images/'.$c->file.'" download>'.$c->file.'</a>';
                                        }
                                        echo '</div>';
                                        echo ' <div class="chat-hour">'.$c->created_at.' <span class="fa fa-check-circle"></span></div>';

                                    }
                                    echo '</li>';
                                }
                                ?>
                            </ul>
                            <div class="form-group mt-3 mb-0">
                                <form id="create_comment"  method="POST" enctype="multipart/form-data" action="http://phosphene/teacher_page/create_comment">
                                @csrf
                                <!-- <input name="section"  value="" id="section" hidden>-->
                                    <textarea class="form-control" name="text" id="text" rows="3" placeholder="Type your message here..."></textarea>
                                    <input type="file" name="select_file" value="select_file" id="select_file" class="form-control">
                                    <button type="submit" class="btn btn-primary" name="upload" value="upload" id="upload">Подтвердить</button>
                                </form>

                            </div>
                    </iframe>

                </div>

            </div>
        </div>



    </div>

        </div>
    </div>

    <script>




        //create section
        $('#form_create_subject').submit(function(e) {
            e.preventDefault();


            $.ajax({
                method: 'POST',
                url: 'http://phosphene/teacher_page/create_section',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    "name_of_section" :$("#name_of_section").val(),
                    "subject_id" : $("#name_of_group").val()
                },
                success: function(arg) {
                    console.log(arg);
                }
            })


        })



    </script>

@endsection

@endsection
