<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- vendor css -->
    <link href="{{ URL::asset('lib/font-awesome/css/font-awesome.css')}}"  rel="stylesheet">
    <link href="{{ URL::asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('../css/starlight.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('../css/chat.css')}}">
    <link rel='stylesheet' id='wp-piwik-css' href='https://www.braekling.de/wp-content/plugins/wp-piwik/css/wp-piwik-spark.css?ver=1.0.19' type='text/css' media='all' />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="{{ URL::asset('lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('lib/select2/css/select2.min.css')}}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/starlight.css')}}">

</head>

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
            <div class="chat-container " >
                <ul class="chat-box chatContainerScroll" >
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


<script src="{{ URL::asset('lib/jquery/jquery.js')}}"></script>
<script src="{{ URL::asset('lib/popper.js/popper.js')}}"></script>
<script src="{{ URL::asset('lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{ URL::asset('lib/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{ URL::asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{ URL::asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
<script src="{{ URL::asset('lib/d3/d3.js')}}"></script>
<script src="{{ URL::asset('lib/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{ URL::asset('lib/chart.js/Chart.js')}}"></script>
<script src="{{ URL::asset('lib/Flot/jquery.flot.js')}}"></script>
<script src="{{ URL::asset('lib/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{ URL::asset('lib/Flot/jquery.flot.resize.js')}}"></script>
<script src="{{ URL::asset('lib/flot-spline/jquery.flot.spline.js')}}"></script>
<script src="{{ URL::asset('js/starlight.js')}}"></script>
<script src="{{ URL::asset('js/ResizeSensor.js')}}"></script>
<script src="{{ URL::asset('js/dashboard.js')}}"></script>


<script src="{{ URL::asset('lib/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ URL::asset('lib/datatables-responsive/dataTables.responsive.js')}}"></script>
<script src="{{ URL::asset('lib/select2/js/select2.min.js')}}"></script>
<script src="{{ URL::asset('lib/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ URL::asset('lib/datatables-responsive/dataTables.responsive.js')}}"></script>
<script src="{{ URL::asset('lib/select2/js/select2.min.js')}}"></script>

<script>
    if(!{{Auth::user()->status}}) alert('Вы не подтверждены');
</script>
</body>
</html>
