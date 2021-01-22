@extends('layouts.app')

@section('content')

    <?php

    function foo($id){
        $sub = DB::table('subjects')->where('id',$id)->get();
        if(Auth::user()){
            $k = DB::table('students')->where('id_student',Auth::user()->id)->first();
            if($k){
                $k = $k->group;
            }
            if(DB::table('subjects')->where('group', $k)->get() == $sub || DB::table('subjects')->where('id_teacher',Auth::user()->id)->get() == $sub){
                return true;
            }
        }


        return false;
    }
    ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="chat-container col-5">
                <ul class="chat-box chatContainerScroll">
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
                        <input name="section"  value="{{$id}}" id="section" hidden>
                        <textarea class="form-control" name="text" id="text" rows="3" placeholder="Type your message here..."></textarea>
                        <input type="file" name="select_file" value="select_file" id="select_file" class="form-control">
                        <button type="submit" class="btn btn-primary" name="upload" value="upload" id="upload">Подтвердить</button>
                    </form>

                </div>
            </div>
            <div class="">






            </div>


        </div>


    </div>
    <script>
        $('#create_comment').submit(function(e) {
            e.preventDefault();

            $.ajax({
                method: 'POST',
                url: 'http://phosphene/teacher_page/create_comment',
                data: new FormData(this),
                dataType:'Json',
                contentType:false,
                processData:false,
                success: function(arg) {
                    console.log(arg);
                }
            })


        })

    </script>


@endsection
