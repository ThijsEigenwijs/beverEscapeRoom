@extends('layouts.master')

@section('content')
    <section class="wrapper">
<div class="container">

    <br><br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    What can i say expect you're welcome!
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
@endsection
