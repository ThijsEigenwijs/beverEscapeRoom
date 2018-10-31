@extends('layouts.master')

@section('content')
    <section class="wrapper">
        <div class="container">

            <br><br>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="panel panel-default">
                        <div class="panel-heading">Puzzel antwoorden</div>

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
                        <div class="panel-heading">De Antwoorden!</div>
                        <div class="panel-body">
                            <table class="table table-striped">

                                <thead>
                                <td>Code</td>
                                <td>Hint</td>
                                <td>Submit</td>
                                </thead>
                                <tbody>
                                {{--Make a table, with the value, and a input field so we can change it--}}

                                <tr>
                                    <form class="form-horizontal" method="POST" action="{{ route('addPuzzelPost') }}">
                                        {{ csrf_field() }}
                                        <td>
                                            <input type="text" id="code" name="code">
                                        </td>
                                        <td><input type="text" id="hint" name="hint"></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Submit
                                            </button>
                                        </td>
                                    </form>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
