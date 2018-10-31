<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Scouting Oud Best Bevers Escape Room">
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
        <a href="{{route('codes')}}" class="logo logo-red"><b>Bever Escape Room</b></a>
        <!--logo end-->
        @if(Auth::user() != null)
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-user-lock"></i>
                            <span class="badge bg-theme">{{\App\Codes::all()->where('solved',0)->count()}}</span>
                        </a>

                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green innovum-orange-bg"></div>
                            <li>
                                <p class="green">Nog {{\App\Codes::all()->where('solved',0)->count()}} onopgeloste
                                    puzzels!</p>
                            </li>

                            @foreach(\App\Codes::all() as $code)
                                @if($code->solved == false)
                                    <li>
                                        <a href="{{route('codes')}}">
                                            <div class="task-info">
                                                <div class="desc">Puzzel {{$code->id}}</div>
                                            </div>
                                            <div>
                                                {{$code->hint}}
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endforeach

                            <li class="external">
                                <a href="{{route('codes')}}">See All Tasks</a>
                            </li>
                        </ul>
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
                    <p class="centered"><a href="{{route('codes')}}"><img src="img/logo_bevers.png" class="img-circle"
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
                            <i class="fas fa-lock"></i>
                            <span>Oplossingen</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('hints')}}">
                            <i class="fas fa-question"></i>
                            <span>Hints</span>
                        </a>
                    </li>

                    <li>
                        <a data-toggle="modal" data-target="#about">
                            <i class="fas fa-paper-plane"></i>
                            <span>About</span>
                        </a>
                    </li>

                    @if(Auth::user()->group_id == -1)

                        <li>
                            <a href="{{route('addPuzzel')}}">
                                <i class="far fa-plus-square"></i>
                                <span>Add puzzels</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('delPuzzel')}}">
                                <i class="far fa-trash-alt"></i>
                                <span>Delete puzzels</span>
                            </a>
                        </li>

                        <li>
                            <a data-toggle="modal" data-target="#reset">
                                <i class="fas fa-redo-alt"></i>
                                <span>Reset the game!</span>
                            </a>
                        </li>
                    @endif

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
                        <a href="{{ route('loginNew') }}">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Login</span>
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

        <div class="modal fade" id="about" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="myModalLabel">About</h4>
                    </div>
                    <div class="modal-body">
                        Het spel is verzonnen door: Stan Tops<br>
                        De website is ontwikkeld door: Thijs Tops<br>
                        Thijs Tops (c) 2018
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Oké</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reset" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                        </button>
                        <h4 id="myModalLabel">Reset</h4>
                    </div>
                    <div class="modal-body">
                        Weet je zeker dat je het spel wil resetten?
                    </div>
                    <div class="modal-footer">
                        <form method="get" action="/reset">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Nee</button>

                            <button class="btn btn-danger" type="submit">Ja</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


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
