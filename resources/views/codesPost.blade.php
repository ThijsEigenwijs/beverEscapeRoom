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

                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ route('codesPost') }}">
                                {{ csrf_field() }}


                                <table class="table table-striped">

                                    @if(Auth::user()->group_id == -1)
                                        <thead>
                                        <tr>
                                            <td>NR</td>
                                            <td>Group 1</td>
                                            <td>Group 2</td>
                                        </tr>
                                        </thead>
                                    @else
                                        <thead>
                                        <tr>
                                            <td>NR</td>
                                            <td>Check</td>
                                            <td>Antwoord</td>
                                            <td></td>
                                        </tr>
                                        </thead>
                                    @endif

                                    <tbody>
                                    {{--Make a table, with the value, and a input field so we can change it--}}


                                    @foreach($codes as $code)
                                        @if(Auth::user()->group_id == 1)
                                            <tr>
                                                <td>{{$code->id}}</td>
                                                <td>
                                                    @if($code->solved_group1 == true)
                                                        <button type="button" class="btn btn-round btn-success"
                                                                disabled>V
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn btn-round btn-danger" disabled>
                                                            X
                                                        </button>
                                                    @endif
                                                </td>
                                                <td><input type="text" id="{{$code->id}}" name="{{$code->id}}"


                                                           @if($code->solved_group1 == 1)
                                                           value="{{$code->code}}"
                                                            @endif
                                                    ></td>
                                                <td>
                                                    <button type="submit" class="btn
                                                            @if($code->solved_group1 == 1)
                                                            btn-success"disabled>controleer
                                                        @else
                                                            btn-primary">Controleer
                                                            @endif


                                                    </button>
                                                </td>
                                            </tr>
                                        @elseif(Auth::user()->group_id == 2)
                                            <tr>
                                                <td>{{$code->id}}</td>
                                                <td>
                                                    @if($code->solved_group2 == true)
                                                        <button type="button" class="btn btn-round btn-success"
                                                                disabled>V
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn btn-round btn-danger" disabled>
                                                            X
                                                        </button>
                                                    @endif
                                                </td>
                                                <td><input type="text" id="{{$code->id}}" name="{{$code->id}}"


                                                           @if($code->solved_group2 == 1)
                                                           value="{{$code->code}}"
                                                            @endif
                                                    ></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary"
                                                            @if($code->solved_group2 == 1)
                                                            disabled
                                                            @endif

                                                    >Controleer
                                                    </button>
                                                </td>
                                            </tr>
                                        @elseif(Auth::user()->group_id == -1)
                                            <tr>
                                                <td>{{$code->id}}</td>
                                                <td>
                                                    @if($code->solved_group1 == true)
                                                        <button type="button" class="btn btn-round btn-success"
                                                                disabled>V
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn btn-round btn-danger" disabled>
                                                            X
                                                        </button>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($code->solved_group2 == true)
                                                        <button type="button" class="btn btn-round btn-success"
                                                                disabled>V
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn btn-round btn-danger" disabled>
                                                            X
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

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
