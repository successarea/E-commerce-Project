@extends('master')

@section('content')
<div class=" row">
    <div class="col-md-8 custom-order-page">
    <table class="table">
            <tbody>
            <tr>
            <td>Amount</td>
            <td>{{$total}}</td>
            </tr>

            <tr>
            <td>Tax</td>
            <td>$ 0</td>
            </tr>

            <tr>
            <td>Delivery Charges</td>
            <td>$ 10</td>
            </tr>

            <tr>
            <td>Total Amount</td>
            <td>$ {{$total + 10}}</td>
            </tr>
            </tbody>
        </table>
        <div>
            <br><br>

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Enter Your Address"></textarea>
                @error('address')
                <div class="invalid-feedback">{{ required }}</div>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label>Payment Method</label><br><br>
                <input class="@error('payment') is-invalid @enderror" type="radio" value="KBZ Pay" name="payment"> <span>KBZ Pay</span><br><br>
                <input type="radio" value="Wave Pay" name="payment"> <span>Wave Pay</span><br><br>
                <input type="radio" value="COD" name="payment"> <span>Cash On Delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Order Now</button><br><br>
        </form>
        </div>
    </div>
    <div class="col-md-2">
        
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
