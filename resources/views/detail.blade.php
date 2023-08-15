@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product['gallery'] }}" class="detail-img" alt="">
        </div>
        <div class="col-md-6">
            <a href="/" class="detail-tag"><<< Go back</a>
            <h2 class="mt-4">{{ $product['name']}} </h2>
            <h4>Price:>{{ $product['price'] }}</h4>
            <h5>Details:>{{ $product['description'] }}</h5>
            <h5>Category:>{{ $product['category'] }}</h5>
            <br>
            <form action="/add_to_cart", method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                <button class="btn btn-primary btn-sm">Add to Cart</button>
            </form>
            <br>
            <button class="btn btn-success btn-sm">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection
