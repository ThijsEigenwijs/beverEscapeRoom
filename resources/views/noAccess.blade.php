@extends('layouts.master')

@section('content')
    <section class="wrapper">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">401 Error</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are not allowed to view this resource
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
