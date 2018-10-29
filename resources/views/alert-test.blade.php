@extends('layouts.master')

@section('content')
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!--  ALERTS EXAMPLES -->
                <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> Alerts Examples</h4>
                    <div class="alert alert-success"><b>Well done!</b> You successfully read this important alert
                        message.
                    </div>
                    <div class="alert alert-info"><b>Heads up!</b> This alert needs your attention, but it's not super
                        important.
                    </div>
                    <div class="alert alert-warning"><b>Warning!</b> Better check yourself, you're not looking too good.
                    </div>
                    <div class="alert alert-danger"><b>Oh snap!</b> Change a few things up and try submitting again.
                    </div>
                </div>
                <!-- /showback -->
                <!--  DISMISSABLE ALERT -->
                <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> Dismissable Alert</h4>
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                    </div>
                </div>
            </div>
            <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
    </section>
    <!-- /wrapper -->
@endsection
