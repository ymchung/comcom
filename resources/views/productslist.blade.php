@extends('layouts.app')

@section('content')

  @foreach($products as $product)
    <article class="" style="float:left; margin-left:10px;">

      <div class="">
        {{ $product->title }}
      </div>

      <div class="">
        <img src="{{ $product->image }}" alt="">
      </div>

      <div class="">
        {{ $product->priceText() . $product->originalprice }}
      </div>

      <div class="">
        {{ $product->priceText() . $product->comcomprice }}
      </div>

    </article>
  @endforeach




@endsection
