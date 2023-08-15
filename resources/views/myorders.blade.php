@extends('master')

@section('content')
<div class="custom-product row">
    
    <div class="col-sm-10">
        <div class="trending-wrapper" >
        <h3>My Orders</h3>
        <br><br>
        @foreach($orders as $item)
        <div class="row searched-item cart-list-divider">
            <div class="col-sm-3">
            <a href="/detail/{{ $item->id }}" class="product-detail">
                <img class="trending-image" src="{{ $item->gallery }}">
            </a>
            </div>
            
            <div class="col-sm-5">
            
                <div class="">
                <h2>Name: {{ $item->name }}</h2>
                <h5>Delivery Status: {{ $item->status }}</h5>
                <h5>Address: {{ $item->address }}</h5>
                <h5>Payment Status: {{ $item->payment_status }}</h5>
                <h5>Payment_method: {{ $item->payment_method }}</h5>
                </div>
            
            </div>
            
            <div class="col-sm-3">
            </div>
        </div>
        @endforeach
        </div>
    </div>
  
</div>
@endsection
