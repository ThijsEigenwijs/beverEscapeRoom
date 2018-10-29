@extends('layouts.master')

@section('content')
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!--  BASIC PROGRESS BARS -->
                <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> Basic Progress Bars</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                             aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                             aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            <span class="sr-only">20% Complete</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete</span>
                        </div>
                    </div>
                </div>
                <!--/showback -->
                <!--  STRIPPED PROGRESS BARS -->
                <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> Stripped Progress Bars</h4>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                             aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                             aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            <span class="sr-only">20% Complete</span>
                        </div>
                    </div>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <!-- /showback -->
                <!--  ANIMATED PROGRESS BARS -->
                <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> Animated Progress Bars</h4>
                    <div class="progress progress-striped active">
                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                             aria-valuemax="100" style="width: 45%">
                            <span class="sr-only">45% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ row -->
    </section>
    <!-- /wrapper -->
@endsection
