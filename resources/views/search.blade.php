@extends('master')

@section('content')
<div class="custom-product row">
    <div class="col-md-3">
        
    </div>
    <div class="col-md-6">
        <div class="trending-wrapper" >
        <h3>Results of Search</h3>
        @foreach($products as $item)
        <div class="searched-item">
        <a href="/detail/{{ $item['id'] }}" class="product-detail">
            <img class="trending-image" src="{{ $item['gallery'] }}">
        </a>
            <div class="">
            <h3>{{ $item['name'] }}</h3>
            <h5>{{ $item['description'] }}</h5>
            </div>
        
        </div>
        <br>
        @endforeach
        </div>
    </div>
  <div class="col-md-3"></div>
</div>
@endsection
