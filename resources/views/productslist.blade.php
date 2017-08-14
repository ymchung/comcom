@extends('layouts.app')

@section('content')

  <article class="" style="float:left; margin-left:10px;">
    <div class=""> RELOJ </div>
    <div class=""> <img src="images/reloj.png" alt=""> </div>
    <div class=""> $6000 </div>
    <div class=""> $3500 </div>
    <div class=""> <button type="btn btn-xs" name="button"><a href="#">Reservar</a></button> </div>
  </article>

  <article class="" style="float:left; margin-left:10px;">
    <div class=""> AURICULARES </div>
    <div class=""> <img src="images/auricular.png" alt=""> </div>
    <div class=""> $2000 </div>
    <div class=""> $799 </div>
    <div class=""> <button type="btn btn-xs" name="button"><a href="#">Reservar</a></button> </div>
  </article>

  <article class="" style="float:left; margin-left:10px;">
    <div class=""> BORCEGOS </div>
    <div class=""> <img src="images/borcegos.png" alt=""> </div>
    <div class=""> $4500 </div>
    <div class=""> $2500 </div>
    <div class=""> <button type="btn btn-xs" name="button"><a href="#">Reservar</a></button> </div>
  </article>

  <article class="" style="float:left; margin-left:10px;">
    <div class=""> BILLETERA </div>
    <div class=""> <img src="images/billetera.png" alt=""> </div>
    <div class=""> $3000 </div>
    <div class=""> $1600 </div>
    <div class=""> <button type="btn btn-xs" name="button"><a href="#">Reservar</a></button> </div>
  </article>

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

      <div class="">
        <button type="btn btn-xs" name="button"></button><a href="#">Reservar</a>
      </div>

    </article>
  @endforeach




@endsection
