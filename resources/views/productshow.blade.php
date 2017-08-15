<div class="">

  <div class="">
    <img src="{{ Storage::disk('local')->url($product->image)}}" alt="product" width="40%">
  </div>

  <div class="">
    {{ $product->title }}
  </div>

  <div class="">
    {{ $product->description }}
  </div>

  <div class="">
    {{ $product->priceText() . $product->originalprice }}
  </div>

  <div class="">
    {{ $product->priceText() . $product->comcomprice }}
  </div>

  <div class="">
    <button type="btn btn-xs" name="button"><a href="#">RESERVAR EL MÍO</a></button>
  </div>

</div>
