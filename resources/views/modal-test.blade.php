@extends('layouts.master')

@section('content')
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!--  MODALS -->
                <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> Modal Example</h4>
                    <!-- Button trigger modal -->
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                        Launch Modal
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    Hi there, I am a Modal Example for Dashio Admin Panel.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /showback -->
                <!--  GRITTER NOTICES -->
            </div>
            <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
    </section>
    <!-- /wrapper -->
@endsection
