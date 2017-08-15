@extends('layouts.app')

@section('content')
  <div class="col-md-9">
    <div class="panel panel-default">
      <div class="panel-heading"> PRODUCTOS
        <a class="btn btn-xs btn-info" style="float:right;" href="{{ route('products.create') }}">Agregar producto</a>
      </div>

      <div class="panel-body">

      <table class="table table-hover">
          <thead>
            <tr>
              <th>Imagen</th>
              <th>Producto</th>
              <th>Categoría</th>
              <th>Precio</th>
              <th>Acciones</th>
            <tr>
          </thead>
          <tbody>
            @forelse($products as $product)
              <tr>
                <td><img width="60px" src="{{ Storage::disk('local')->url($product->image)}}"></td>
                <td><a href="{{ route('products.show', $product) }}">{{ $product->title }}</a></td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->priceText() . $product->comcomprice }}</td>
                <td>
                  <a class="btn btn-xs btn-success" href="{{ route('products.edit', $product) }}">Editar</a>
                  <a class="btn btn-xs btn-success" href="{{ url('admin/products/'.$product->id.'/delete') }}">Borrar</a>
                </td>
              <tr>
            @empty
              <tr>
                <td>No hay productos cargados</td>
              </tr>
            @endforelse
          </tbody>
      </table>


    </div>

    </div>
{{ $products->links() }}
</div>


@endsection
