@extends('layouts.master')

@section('content')
    <section class="wrapper">
         <div class="row mt">
            <div class="col-lg-12">
                <div class="row content-panel">
                    <div class="col-md-4 profile-text mt mb centered">
                        <div class="right-divider hidden-sm hidden-xs">
                            <h4>512</h4>
                            <h6>Stripes</h6>
                            <h4>1-9-2016</h4>
                            <h6>Start at Innovum</h6>
                            <h4>1-2-2017</h4>
                            <h6>Active since</h6>
                        </div>
                    </div>
                    <!-- /col-md-4 -->
                    <div class="col-md-4 profile-text">
                        <h3>{{Auth::user()->name}}</h3>
                        <h6>Chairmen ICT Committee</h6>
                        <p>Also known as: Kees</p>
                        <br>
                        <p>
                            <button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Bugreport</button>
                        </p>
                    </div>
                    <!-- /col-md-4 -->
                    <div class="col-md-4 centered">
                        <div class="profile-pic">
                            <p><img src="img/ui-thijstops.jpg" class="img-circle"></p>
                            <p>
                                <button class="btn btn-theme"><i class="fas fa-cookie-bite"></i> Give cookie</button>
                                <button class="btn btn-theme02"> Give a Hug</button>
                            </p>
                        </div>
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /col-lg-12 -->
            <div class="col-lg-12 mt">
                <div class="row content-panel">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a data-toggle="tab" href="#overview">Overview</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#edit">Edit Profile</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /panel-heading -->
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="overview" class="tab-pane active">
                                Overview Page
                            </div>
                            <!-- /tab-pane -->
                            <div id="contact" class="tab-pane">
                                Contact
                                <!-- /row -->
                            </div>
                            <!-- /tab-pane -->
                            <div id="edit" class="tab-pane">
                                Edit
                                {{-- Row --}}
                            </div>
                            <!-- /tab-pane -->
                        </div>
                        <!-- /tab-content -->
                    </div>
                    <!-- /panel-body -->
                </div>
                <!-- /col-lg-12 -->
            </div>
            <!-- /row -->
        </div>


    </section>
@endsection