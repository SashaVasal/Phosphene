@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <?php
                        switch (Auth::user()->role) {
                            case 'admin':
                                header("Location: http://phosphene/admin_page");
                                exit;
                            case 'manager':
                                header("Location: http://phosphene/manager_page");
                                exit;
                            case 'teacher':
                                header("Location: http://phosphene/teacher_page");
                               exit;
                            case 'students':
                                echo 4;
                                break;
                        }
                        ?>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
