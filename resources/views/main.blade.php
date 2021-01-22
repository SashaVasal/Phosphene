@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @guest
                    <h1>Ты незареган</h1>
                @else
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
                        case 'student':
                            header("Location: http://phosphene/student_page");
                            exit;
                    }
                    ?>
                @endguest

            </div>

        </div>
    </div>
@endsection
