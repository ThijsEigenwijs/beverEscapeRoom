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

                            Vul hier je antwoorden in!
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">De Codes!</div>
                        <div class="panel-body">

                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ route('codesPost') }}">
                                {{ csrf_field() }}


                                <table class="table table-striped">

                                    <thead>
                                    <tr>
                                        <td>NR</td>
                                        <td>Check</td>
                                        <td>Code</td>
                                        <td></td>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    {{--Make a table, with the value, and a input field so we can change it--}}


                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <button type="button" class="btn btn-round btn-danger">X</button>
                                        </td>
                                        <td><input type="text" id="code1" name="code1"></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Controleer</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>


                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
