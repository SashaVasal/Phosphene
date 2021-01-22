@extends('layouts.app')
@section('content')
    <div class="sl-mainpanel">


        <div class="sl-pagebody">

            <img src="../images/{{Auth::user()->image}}" class="wd-170 rounded-circle" alt="">
            <span>
        <h1>{{Auth::user()->surname}} {{Auth::user()->name}}</h1>
      </span>
            <div class="sl-page-title">
                <h5>Личный кабинет</h5>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Основная информация</h6>

                <div class="form-layout">
                        <form method="POST" id="edit_main_data" enctype="multipart/form-data" action="http://phosphene/edit_profile/edit_main_data" class="row mg-b-25">
                            @csrf
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Имя: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" id="name" value="{{Auth::user()->name}}"
                                           placeholder="Enter firstname">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Фамилия: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="surname" id="surname"  value="{{Auth::user()->surname}}"
                                           placeholder="Enter lastname">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email" id="email"  value="{{Auth::user()->email}}"
                                           placeholder="Enter email address">
                                </div>
                            </div><!-- col-4 -->
                            <div class="form-layout-footer">
                                <button type="submit" class="btn btn-primary" name="upload" value="upload" id="upload">Подтвердить</button>
                            </div><!-- form-layout-footer -->
                        </form>


                </div><!-- row -->


            </div><!-- form-layout -->
        </div>
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Изменение аватара</h6>

                <div class="row">
                    <div class="col-lg-3">
                        <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input">
                            <span class="custom-file-control"></span>
                        </label>
                    </div><!-- col -->

                </div><!-- row -->
            </div><!-- card -->
        </div>

        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Изменение пароля</h6>

                <form>
                    <div class="wd-300">
                        <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0">
                                <label>Старый пароль: <span class="tx-danger">*</span></label>
                                <input type="text" name="firstname" class="form-control wd-200 wd-sm-250" placeholder="Enter firstname"
                                       required>
                            </div><!-- form-group -->
                            <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                <label>Новый пароль: <span class="tx-danger">*</span></label>
                                <input type="text" name="lastname" class="form-control wd-200 wd-sm-250" placeholder="Enter lastname"
                                       required>
                            </div><!-- form-group -->
                        </div><!-- d-flex -->
                        <button type="submit" class="btn btn-info">Validate Form</button>
                    </div>
                </form>
            </div><!-- card -->

        </div><!-- sl-pagebody -->
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
