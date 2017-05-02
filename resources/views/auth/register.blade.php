@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                            <label for="bio" class="col-md-4 control-label">Bio</label>

                            <div class="col-lg-6">
                                <input id="bio" type="textarea" class="form-control" name="bio" value="{{ old('bio') }}">

                                @if ($errors->has('bio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('question_1') ? ' has-error' : '' }}">
                            <label for="question_1" class="col-md-4 control-label">Question 1</label>

                            <div class="col-md-6">
                                <input id="question_1" type="text" class="form-control" name="question_1" value="{{ old('question_1') }}">

                                @if ($errors->has('question_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('question_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('question_2') ? ' has-error' : '' }}">
                            <label for="question_2" class="col-md-4 control-label">Question 2</label>

                            <div class="col-md-6">
                                <input id="question_2" type="text" class="form-control" name="question_2" value="{{ old('question_2') }}">

                                @if ($errors->has('question_2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('question_2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('question_3') ? ' has-error' : '' }}">
                            <label for="question_3" class="col-md-4 control-label">Question 3</label>

                            <div class="col-md-6">
                                <input id="question_3" type="text" class="form-control" name="question_3" value="{{ old('question_3') }}">

                                @if ($errors->has('question_3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('question_3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('question_4') ? ' has-error' : '' }}">
                            <label for="question_4" class="col-md-4 control-label">Question 4</label>

                            <div class="col-md-6">
                                <input id="question_4" type="text" class="form-control" name="question_4" value="{{ old('question_4') }}">

                                @if ($errors->has('question_4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('question_4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@yield('content');
