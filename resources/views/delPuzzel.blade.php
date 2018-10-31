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
                                <tr>
                                    <td>NR</td>
                                    <td>Code</td>
                                    <td>Antwoord</td>
                                    <td>Delete</td>
                                </tr>
                                </thead>


                                <tbody>
                                {{--Make a table, with the value, and a input field so we can change it--}}


                                @foreach($codes as $code)
                                        <tr>
                                            <form class="form-horizontal" method="POST"
                                                  action="{{ route('delPuzzelPost') }}">
                                                <input hidden id="id" name="id" value="{{$code->id}}">
                                                {{ csrf_field() }}
                                                <td>{{$code->id}}</td>
                                                <td><input type="text" id="{{$code->id}}" name="{{$code->id}}"
                                                           value="{{$code->code}}"></td>
                                                <td>
                                                    <input type="text" id="{{$code->id}}" name="{{$code->id}}"
                                                           value="{{$code->hint}}"></td>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-danger">Delete
                                                    </button>
                                                </td>
                                            </form>
                                        </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
