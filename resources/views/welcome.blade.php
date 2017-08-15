@extends('layouts.app')

@section('content')
  <div class="bannerppal">
    <img src="storage/images/bannerppal.jpg" alt="banner">
  </div>

  <div class="categories-container">
    <div class="banner-category">
      <img src="storage/images/moda.png" alt="banner">
      <p>PRODUCTOS DE MODA</p>
    </div>

    <div class="banner-category">
      <img src="storage/images/tecnologia.png" alt="banner">
      <p>PRODUCTOS TECNOLÓGICOS</p>
    </div>

    <div class="banner-category">
      <img src="storage/images/turismo.png" alt="banner">
      <p>PAQUETES TURÍSTICOS</p>
    </div>
  </div>

@endsection
