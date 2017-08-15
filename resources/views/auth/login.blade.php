@extends('layouts.app')
@section('pageTitle', 'Login')
@section('content')

  <br>
  <br>
  <br>
  <div class="box-register">
      <div class="register-container">
          <div class="register-title">
              <h1>INICIAR SESIÓN</h1>
          </div>
          <div class="register-form">
            <br>
              <form class="" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <span class="valError"></span>

                    <div class="col-md-6">

                        <input id="email" type="email" class="form-control" name="email" placeholder=" CORREO ELECTRONICO" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <span class="valError"></span>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password"  placeholder=" CONTRASEÑA" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>

                  <label><input type="checkbox" name="recordame" {{ old('remember') ? 'checked' : '' }}><span class="terminos">Mantenerme conectado</span></label> <br>

                  <button type="submit" class="register-button" name="registrarse"><p>INICIAR SESIÓN</p></button> <br>
                  <a href="{{ route('password.request') }}"><span> ¿Olvidaste tu contraseña? </span></a>

              </form>
          </div>
      </div>
      <div class="register-footer">
          ¿No tenés cuenta? <a href="{{ route('register') }}"><b>Registrate</b></a>
      </div>
  </div>
  <br>
  <br>
  <br>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
