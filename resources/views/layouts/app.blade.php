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

<body>
<?php
    if(!Auth::user()){
        header("Location: http://phosphene/login");
        exit;
    }
?>
<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>Phosphene</a></div>
<div class="sl-sideleft" hidden>
    <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
    </div><!-- input-group -->

    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">
        <a href="index.html" class="sl-menu-link active">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                <span class="menu-item-label">Forms</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="form-elements.html" class="nav-link">Form Elements</a></li>
            <li class="nav-item"><a href="form-layouts.html" class="nav-link">Form Layouts</a></li>
            <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
            <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
            <li class="nav-item"><a href="form-editor-text.html" class="nav-link">Text Editor</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">UI Elements</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">

            <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
            <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
            <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>

        </ul>
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
                <span class="menu-item-label">Tables</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
            <li class="nav-item"><a href="table-datatable.html" class="nav-link">Data Table</a></li>
        </ul>

        <a href="mailbox.html" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">Mailbox</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
                <span class="menu-item-label">Pages</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
            <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
            <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
        </ul>
    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->

<div class="sl-header">
    <div class="sl-header-left">

    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            @guest
                @if (Route::has('register'))
                    <div>
                        <a href="/register">Sign Up</a>
                        <a href="/login">Sign In</a>
                    </div>
                @endif
            @else
                @if (Auth::user()->status == 0)



                @else
                    <div class="dropdown">
                        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                            <span class="logged-name">{{ Auth::user()->name }} {{Auth::user()->surname}}</span>
                            <img src="../images/{{Auth::user()->image}}" class="wd-32 rounded-circle" style="border-radius: 50%; height:32px" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-header wd-200">
                            <ul class="list-unstyled user-profile-nav">
                                <li><a href="http://phosphene/edit_profile"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="icon ion-power"></i> Sign Out
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div><!-- dropdown-menu -->
                    </div><!-- dropdown -->
                @endif



            @endguest
        </nav>

    </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->
<main class="py-4">
    <h1>123</h1>
    @if(Auth::user())
        @if(Auth::user()->status == 1)
            @yield('content')
        @else
            <h1>Ожидайте подтверждения аккаунта</h1>
        @endif

    @endif


</main>
<!-- ########## START: RIGHT PANEL ########## -->
<div class="sl-sideright">
    <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (0)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (0)</a>
        </li>
    </ul><!-- sidebar-tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
            <div class="media-list">

            <div class="pd-15">
                <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
            </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
            <div class="media-list">



            </div><!-- media-list -->
        </div><!-- #notifications -->

    </div><!-- tab-content -->
</div><!-- sl-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->

    @guest
        <?php
            header("Location: http://phosphene/login");
            exit;
        ?>
    @else

    @endguest

<!-- ########## START: MAIN PANEL ########## -->

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
