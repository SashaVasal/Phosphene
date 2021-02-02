@extends('layouts.app')
@section('content')
    <div >
        <div class="container">

            <div class="col-3 pd-20 " >
                <h1>Личный кабинет</h1>
                <div>
                    <div style="background: #fff; padding: 40px">
                        <img class="card-img-top img-fluid" src="images/{{Auth::user()->image}}" alt="Image">
                        <div class="card-body bd bd-t-0">
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input">
                                <span class="custom-file-control"></span>
                            </label>
                        </div>
                    </div><!— col —>
                </div><!— row —>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40 col-4">
                <h6 class="card-body-title">Основная информация</h6>

                <div class="form-layout">
                        <form method="POST" id="edit_main_data" enctype="multipart/form-data" action="http://phosphene/edit_profile/edit_main_data" class=" mg-b-25">
                            @csrf
                            <div class="">
                                <div class="form-group">
                                    <label class="form-control-label">Имя: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" id="name" value="{{Auth::user()->name}}"
                                           placeholder="Измените имя">
                                </div>
                            </div><!-- col-4 -->
                            <div class="">
                                <div class="form-group">
                                    <label class="form-control-label">Фамилия: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="surname" id="surname"  value="{{Auth::user()->surname}}"
                                           placeholder="Измените фамилию">
                                </div>
                            </div><!-- col-4 -->
                            <div class="">
                                <div class="form-group">
                                    <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email" id="email"  value="{{Auth::user()->email}}"
                                           placeholder="Enter email address">
                                </div>
                            </div><!-- col-4 -->
                            <div class="form-layout-footer" >
                                <button type="submit" class="btn btn-primary" name="upload" value="upload" id="upload">Подтвердить</button>
                            </div><!-- form-layout-footer -->
                        </form>


                </div><!-- row -->


            </div><!-- form-layout -->
            <div class="card pd-20 pd-sm-40 col-4" style="margin-left: 10px">

                <div class="card">
                    <h6 class="card-body-title">Изменение пароля</h6>

                    <form>
                        <div >
                            <div class="">
                                <div class="form-group mg-b-0" style="width: 80%">
                                    <label>Старый пароль: <span class="tx-danger">*</span></label>
                                    <input type="text" name="firstname" class="form-control" placeholder="Введите имя"
                                           required>
                                </div><!-- form-group -->
                                <div class="form-group mg-b-0  mg-md-t-0"  style="width: 80%; margin-top: 25px">
                                    <label>Новый пароль: <span class="tx-danger">*</span></label>
                                    <input type="text" name="lastname" class="form-control " placeholder="Введите фамилию"
                                           required>
                                </div><!-- form-group -->
                                <button type="submit" class="btn btn-info  mg-t-20">Подтвердить</button>
                            </div><!-- d-flex -->

                        </div>
                    </form>
                </div><!-- card -->

            </div><!-- sl-pagebody -->
        </div>

    </div>


        <script>
            $('#edit_main_data').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    method: 'POST',
                    url: 'http://phosphene/edit_profile/edit_main_data',
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
