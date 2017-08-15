{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.app')
@section('pageTitle', 'Register')
@section('content')

  <br>
    <br>
    <br>
    <div class="box-register">
        <div class="register-container">
            <div class="register-title">
                <h1>CREAR CUENTA</h1>
            </div>
            <div class="register-form">
                <br>
                <form class="" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                      <span class="valError"></span>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="name" placeholder=" NOMBRE" value="{{ old('name') }}" required autofocus>

                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">

                      <span class="valError"></span>
                      <div class="col-md-6">
                          <input id="lastname" type="text" class="form-control" name="lastname" placeholder=" APELLIDO" value="{{ old('lastname') }}" required autofocus>

                          @if ($errors->has('lastname'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('lastname') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>


                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                      <span class="valError"></span>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control" name="email" placeholder=" CORREO ELECTRONICO" value="{{ old('email') }}" required>

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
                          <input id="password" type="password" class="form-control" name="password" placeholder=" CONTRASEÑA" required>

                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>


                  <div class="form-group">

                      <span class="valError"></span>
                      <div class="col-md-6">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder=" CONFIRMAR CONTRASEÑA" required>
                      </div>
                  </div>

                  <div class="">
                    <label><input type="checkbox"><span class="terminos">Acepto <i>términos y condiciones</i> y las <i>políticas de privacidad</i> de Comcom</span></label> <br>
                  </div>
                  <div class="">
                    <button type="submit" class="register-button" name="registrarse"><p>REGISTRARSE</p></button>
                  </div>
                </form>
            </div>
        </div>
        <div class="register-footer">
            ¿Ya tenés cuenta? <a href="{{ route('login') }}"><b>Iniciar sesión</b></a>
        </div>
    </div>
    <br>
    <br>
    <br>

@endsection
