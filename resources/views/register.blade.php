@extends('master')

@section('content')
<div class="container custom-login mb-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Registration Form</h3>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" name="name" placeholder="User Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection
