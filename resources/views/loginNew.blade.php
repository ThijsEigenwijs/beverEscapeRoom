@extends('layouts.master')

@section('content')
    <section class="">
        <div class="container">
            <div class="row">


                <div class="col-md-10 col-md-offset-1">
                    <form class="form-horizontal form-login" method="POST" action="{{ route('login') }}">
                        <h2 class="form-login-heading">Sign in</h2>
                        {{ csrf_field() }}

                        <br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required autofocus
                                       placeholder="E-mail Address">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" type="password" class="form-control" name="password"
                                       placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"
                                               name="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                                        Me
                                    </label>
                                    <span class="pull-right">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>


                            </div>
                        </div>

                        <hr>
                        <div class="registration">
                            Don't have an account yet?<br/>
                            <a class="" href="/register">
                                Create an account
                            </a>
                        </div>
                        <br>
                    </form>


                    <br>
                </div>

            </div>
        </div>
    </section>
@endsection
