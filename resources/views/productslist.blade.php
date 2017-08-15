@extends('layouts.app')

@section('content')

<section>
  @foreach($products as $product)
    <article class="" style="float:left; margin-left:10px;">

      <div class="">
        {{ $product->title }}
      </div>

      <div class="">
        <img src="{{ Storage::disk('local')->url($product->image)}}" alt="product" width="290px">
      </div>

      <div class="">
        {{ $product->priceText() . $product->originalprice }}
      </div>

      <div class="">
        {{ $product->priceText() . $product->comcomprice }}
      </div>

      <div class="">
        <button type="btn btn-xs" name="button"></button><a href="#">Ver más</a>
      </div>

    </article>
  @endforeach
</section>



@endsection
