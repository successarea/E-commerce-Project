@extends('master')

@section('content')
<div class="custom-product row">
    
    <div class="col-sm-10">
        <div class="trending-wrapper" >
        <h3>Results of Search</h3>
        <a href="/ordernow" class="btn btn-success btn-sm">Order Now</a>
        <br><br>
        @foreach($products as $item)
        <div class="row searched-item cart-list-divider">
            <div class="col-sm-3">
            <a href="/detail/{{ $item->id }}" class="product-detail">
                <img class="trending-image" src="{{ $item->gallery }}">
            </a>
                
            </div>
            
            <div class="col-sm-3">
            
                <div class="">
                <h5>{{ $item->name }}</h5>
                <span>{{ $item->description }}</span>
                </div>
            
            </div>
            
            <div class="col-sm-3">
                <a href="/remove-cart-list/{{ $item->cart_id }}">
                <button class="btn btn-warning">Remove from Cart</button>
                </a>
                
            </div>
            
        </div>
        
        
        @endforeach
        </div>
    </div>
  
</div>
@endsection
