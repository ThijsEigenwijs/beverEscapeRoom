@extends('layouts.master')

@section('content')
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!--  BADGES -->
                <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> Badges</h4>
                    <span class="badge">5</span>
                    <span class="badge bg-primary">10</span>
                    <span class="badge bg-success">15</span>
                    <span class="badge bg-info">20</span>
                    <span class="badge bg-inverse">25</span>
                    <span class="badge bg-warning">30</span>
                    <span class="badge bg-important">35</span>
                </div>
                <!-- /showback -->
                <!--  LABELS -->
                <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> Labels</h4>
                    <span class="label label-default">label</span>
                    <span class="label label-primary">Primary</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-danger">Danger</span>
                </div>
                <!-- /showback -->
            </div>
            <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
    </section>
    <!-- /wrapper -->
@endsection
