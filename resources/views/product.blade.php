@extends('master')

@section('content')
<div class="custom-product">
  <div id="carouselExampleCaptions" class="carousel slide carousel-style">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
      @foreach($products as $item)
      <a href="/detail/{{ $item['id'] }}" class="product-detail">
        <div class="carousel-item {{ $item['id'] == 1?'active':''}}">
          <img class="slider-img" src="{{ $item['gallery'] }}">
          <div class="carousel-caption slider-text d-none d-md-block">
            <h5>{{ $item['name']}}</h5>
            <p>{{ $item['description'] }}</p>
          </div>
        </div>
      </a>
      @endforeach
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="">Next</span>
    </button>
  </div>

  <div class="trending-wrapper" >
    <h3>Trending Products</h3>
    @foreach($products as $item)
    <div class="trending-item">
      <a href="/detail/{{ $item['id'] }}" class="product-detail">
        <img class="trending-image" src="{{ $item['gallery'] }}">
        <div class="">
          <h5>{{ $item['name'] }}</h5>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection
