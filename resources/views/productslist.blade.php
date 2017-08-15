@extends('layouts.app')

@section('content')

<div class="categories">
  <ul>
    @foreach ($categories as $category)
      <li><a href="#">{{$category->name}}</a></li>
    @endforeach
  </ul>
</div>

<section>
  @foreach($products as $product)
    <article class="" style="float:left; margin-left:10px;">

      <div class="">
        <img src="{{ Storage::disk('local')->url($product->image)}}" alt="product" width="290px">
      </div>

      <div class="">
        {{ $product->title }}
      </div>

      <div class="">
        {{ $product->priceText() . $product->originalprice }}
      </div>

      <div class="">
        {{ $product->priceText() . $product->comcomprice }}
      </div>

      <div class="">
        <button type="btn btn-xs" name="button"><a href="{{ route('products.show', $product)}}">Ver más</a></button>
      </div>

    </article>
  @endforeach
</section>



@endsection
