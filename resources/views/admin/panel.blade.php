@extends('layouts.app')

@section('content')
<div class="panel-container">
  <div class="panel-title">
    <p>Menú administrador</p>
  </div>

    <ul class="panel-blocks">
      <div class="block">
        <a href="{{ route('users.index') }}"><li>Lista de usuarios</li></a>
      </div>
      <div class="block">
        <a href="{{ route('products.index') }}"><li>Lista de productos</li></a>
      </div>

    </ul>

</div>

<br>
<br>
<br>

@endsection
