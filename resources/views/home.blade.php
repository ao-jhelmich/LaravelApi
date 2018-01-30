@extends('layouts.app')
@section('content')
<section class="content">
    <div class="col-md-4 align-items-center text-center">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Start your adventure!</h3>
            </div>
            <div class="box-body">
                <p><b><strong>Sign in:</strong></b><p>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-github">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                <a href="#" class="btn btn-block btn-social btn-google">
                <i class="fa fa-google-plus"></i> Sign in with Google
                </a>
            </div>
            <div class="box-footer">
            </div>
        </div>
    </div>
</section>
@endsection