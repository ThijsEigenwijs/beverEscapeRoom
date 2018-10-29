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

                            Op deze pagina kan je per vraag een hint vinden
                        </div>


                    </div>

                    @foreach($codes as $code)
                        <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#puzzel{{$code->id}}">
                            Hint voor puzzel {{$code->id}}
                        </button>
                        <br><br>

                        <div class="modal fade" id="puzzel{{$code->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Puzzel {{$code->id}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        {{$code->hint}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Oké</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
