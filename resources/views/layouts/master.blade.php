<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>The Bever Escape Room</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--Testing scripts--}}
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header innovum-orange-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo logo-red"><b>SOB Bevers</b></a>
        <!--logo end-->
        @if(Auth::user() != null)
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        {{--<ul class="dropdown-menu extended tasks-bar">--}}
                            {{--<div class="notify-arrow notify-arrow-green"></div>--}}
                            {{--<li>--}}
                                {{--<p class="green">You have 4 pending tasks</p>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="index.html#">--}}
                                    {{--<div class="task-info">--}}
                                        {{--<div class="desc">Doing stuff with the new panel</div>--}}
                                        {{--<div class="percent">10%</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="progress progress-striped">--}}
                                        {{--<div class="progress-bar progress-bar-success" role="progressbar"--}}
                                             {{--aria-valuenow="10"--}}
                                             {{--aria-valuemin="0" aria-valuemax="100" style="width: 10%">--}}
                                            {{--<span class="sr-only">10% Complete (success)</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="index.html#">--}}
                                    {{--<div class="task-info">--}}
                                        {{--<div class="desc">Database Update</div>--}}
                                        {{--<div class="percent">60%</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="progress progress-striped">--}}
                                        {{--<div class="progress-bar progress-bar-warning" role="progressbar"--}}
                                             {{--aria-valuenow="60"--}}
                                             {{--aria-valuemin="0" aria-valuemax="100" style="width: 60%">--}}
                                            {{--<span class="sr-only">60% Complete (warning)</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="index.html#">--}}
                                    {{--<div class="task-info">--}}
                                        {{--<div class="desc">Product Development</div>--}}
                                        {{--<div class="percent">80%</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="progress progress-striped">--}}
                                        {{--<div class="progress-bar progress-bar-info" role="progressbar"--}}
                                             {{--aria-valuenow="80"--}}
                                             {{--aria-valuemin="0" aria-valuemax="100" style="width: 80%">--}}
                                            {{--<span class="sr-only">80% Complete</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="index.html#">--}}
                                    {{--<div class="task-info">--}}
                                        {{--<div class="desc">Payments Sent</div>--}}
                                        {{--<div class="percent">70%</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="progress progress-striped">--}}
                                        {{--<div class="progress-bar progress-bar-danger" role="progressbar"--}}
                                             {{--aria-valuenow="70"--}}
                                             {{--aria-valuemin="0" aria-valuemax="100" style="width: 70%">--}}
                                            {{--<span class="sr-only">70% Complete (Important)</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="external">--}}
                                {{--<a href="#">See All Tasks</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </li>
                    <!-- settings end -->
                </ul>
                <!--  notification end -->
            </div>
        @endif
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @if(Auth::user() != null)
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="img/logo_bevers.png" class="img-circle"
                                                                    width="80"></a>
                    </p>
                    <h5 class="centered">{{ Auth::user()->name }}</h5>
                    <li>
                        <a href="{{route('home')}}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Hoofdpagina</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('codes')}}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>OntgrendelPagina</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('hints')}}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Hints</span>
                        </a>
                    </li>


                    {{-- The logout --}}
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off text-red"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
    @else
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li class="mt">
                        <a href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Login</span>
                        </a>
                    </li>

                    <li class="mt">
                        <a href="{{ route('loginNew') }}">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Login (new variant)</span>
                        </a>
                    </li>

                    <li class="mt">
                        <a href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i>
                            <span>Register</span>
                        </a>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
@endif
<!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        @yield('content');
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<!--script for this page-->
<script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="lib/gritter-conf.js"></script>


</body>

</html>
