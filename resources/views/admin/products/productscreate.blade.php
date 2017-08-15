@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo producto</div>

                <div class="panel-body">

                  <form action="/admin/products/create" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}

                    <label for="">Titulo</label>
                    <input type="text" name="title" value=""><br>

                    <label for="">Categoría</label>
                    <select class="form-control" name="category_id">
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                      @endforeach

                    </select>

                    <label for="">Descripción</label>
                    <input type="text" name="description" value=""></input><br>

                    <label for="">Precio original</label>
                    <input type="text" name="originalprice" value=""><br>

                    <label for="">Precio Promoción</label>
                    <input type="text" name="comcomprice" value=""><br>

                    <label for="">Mínimas reservas</label>
                    <input type="text" name="minimumreservation" value=""><br>

                    <label for="">Fecha de finalización</label>
                    <input type="date" name="duration" value=""><br>

                    <label for="">Imagen </label>
                    <input type="file" name="image" value="">
                     <br>

                    <button class="btn btn-sm btn-primary" type="submit" name="" value="">Publicar</button>

                  </form>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
