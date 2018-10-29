@extends('layouts.master')

@section('content')
    <section class="wrapper">
        <div class="container text-center">
            <br/>
            <h2>Jquery - notification popup box using toastr JS Plugin</h2>
            <br/>
            <button class="success btn btn-success">Success</button>
            <button class="error btn btn-danger">Error</button>
            <button class="info btn btn-info">Info</button>
            <button class="warning btn btn-warning">Warning</button>


        </div>

        <script type="text/javascript">

            {{-- For code: https://codeseven.github.io/toastr/demo.html --}}

            $(".success").click(function () {
                //toastr.success('We do have the Kapua suite available.', 'Success Alert', {timeOut: 5000})

                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "-1",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }

                toastr["success"]("For some strange reasons, it does work now!", "It's alive!")


            });


            $(".error").click(function () {
                toastr.error('You Got Error', 'Inconceivable!', {timeOut: 5000})
            });


            $(".info").click(function () {
                toastr.info('It is for your kind information', 'Information', {timeOut: 5000})
            });


            $(".warning").click(function () {
                toastr.warning('It is for your kind warning', 'Warning', {timeOut: 5000})
            });
        </script>

    </section>
@endsection
