@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                if(Auth::user()){
                    if(Auth::user()->role != 'student'){
                        echo '<h1>Вы не имеете права сюда заходить!</h1>';
                    }
                }
                else{
                    echo '<h1>Вы не имеете права сюда заходить!</h1>';
                }
                ?>




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

@endsection
