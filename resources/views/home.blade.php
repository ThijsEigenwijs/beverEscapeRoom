@extends('layouts.master')

@section('content')
    <section class="wrapper">
<div class="container">

    <br><br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thuisscherm</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welkom bij de Bever Escape Room!<br>
                    In de kamer waar je nu in staat zijn verschillende puzzels<br>
                    verstopt, vind ze, los ze op, en vul ze hier in<br>

                </div>
            </div>
        </div>
    </div>
</div>
    </section>
@endsection
