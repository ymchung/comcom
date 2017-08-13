@extends('layouts.app')

@section('content')

  <form action="/productscreate" method="POST" enctype='multipart/form-data' data-toggle="validator" role="form">
    {{ csrf_field() }}

    <label for="">Titulo</label>
    <label for="">Descripción</label>
    <label for="">Imagen</label>
    <label for="">Precio original</label>
    <label for="">Precio Promoción</label>
    <label for="">Mínimas reservas</label>
    <label for="">Fecha de finalización</label>

  </form>




@endsection
