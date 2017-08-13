@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Menú administrador</div>

                <div class="panel-body">
                    <ul>
                      <li><a href="{{ route('users.index') }}">Usuarios</a></li>
                      <li><a href="{{ route('products.index') }}">Productos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading"></div>
          </div>
          <div class="panel-body"> --}}
            @yield('subcontent-admin')
          {{-- </div>
        </div> --}}


    </div>
</div>
@endsection
