@extends('admin.panel')

@section('subcontent-admin')
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
              <th>Precio</th>
              <th>Acciones</th>
            <tr>
          </thead>
          <tbody>
            @foreach($products as $product)
              <tr>
                <td><img width="60px" src="{{ $product->image }}"></td>
                <td><a href="{{ route('products.show', $product) }}">{{ $product->title }}</a></td>
                <td>{{ $product->priceText() . $product->comcomprice }}</td>
                <td>
                  <a class="btn btn-xs btn-success" href="{{ route('products.edit', $product) }}">Editar</a>
                  <a class="btn btn-xs btn-danger" href="{{ route('products.edit', $product) }}">Borrar</a>
                </td>
              <tr>
            @endforeach
          </tbody>
      </table>


    </div>

    </div>
{{ $products->links() }}
</div>


@endsection
