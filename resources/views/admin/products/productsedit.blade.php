@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo producto</div>

                <div class="panel-body">

                  <form action="/admin/products" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <label for="">Titulo</label>
                    <input type="text" name="title" value="{{ old('title', $product->title) }}"><br>

                    <label for="">Categoría</label>
                    <select class="form-control" name="category_id">
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id === $product->category_id) selected @endif> {{ $category->name }} </option>
                      @endforeach

                    </select>

                    <label for="">Descripción</label>
                    <textarea type="text" name="description" value="{{ old('description', $product->description) }}"></textarea><br>

                    <label for="">Precio original</label>
                    <input type="text" name="originalprice" value="{{ old('originalprice', $product->originalprice) }}"><br>

                    <label for="">Precio Promoción</label>
                    <input type="text" name="comcomprice" value="{{ old('comcomprice', $product->comcomprice) }}"><br>

                    <label for="">Mínimas reservas</label>
                    <input type="text" name="minimumreservation" value="{{ old('minimumreservation', $product->minimumreservation) }}"><br>

                    <label for="">Fecha de finalización</label>
                    <input type="date" name="duration" value="{{ old('duration', $product->duration) }}"><br>

                    <label for="">Imagen</label><br>

                    <button class="btn btn-sm btn-primary" type="submit" name="" value="">Actualizar</button>

                  </form>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
