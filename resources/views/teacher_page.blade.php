@extends('layouts.app')

@section('content')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
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
            </div>


        </div>

        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#create_section" role="button" aria-expanded="false" >
                Создать раздел
            </a>
        </p>
        <div class="collapse" id="create_section">
            <div class="card card-body">
                <form id="form_create_subject">
                    <input id="name_of_section">
                    <select id="name_of_group" name="teacher_name" class="form-control">
                        <option selected disabled>Choose...</option>
                        <?php
                        foreach ($subjects as $s){
                            echo '<option value="'.$s->id.'">'.$s->name.' '.$s->group.'</option>';
                        }
                        ?>
                    </select>
                    <button type="submit" class="btn btn-primary">Подтвердить</button>
                </form>
            </div>
        </div>

        <div>
            <?php
                foreach ($sections as $s){
                    echo '
                        <div> <a href="http://phosphene/section/'.$s->id.'">'.$s->name.'</a></div>
                     ';
                }

            ?>
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
