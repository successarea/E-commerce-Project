<?php
use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user')){
    $total = ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/myorders">Orders</a>
        </li>
    
        <form action="/search" class="d-flex" role="search">
        <input class="form-control me-2 search-box" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary btn-sm" type="submit">Search</button>
        </form>
    </ul>
    <ul class="header-ul">
        @if(Session::has('user'))
        <li class="nav-item">
        <a class="nav-link active" href="/cartlist">Cart({{ $total }})</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ session('user')['name'] }}
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu user-dropdown">
            <li><a class="dropdown-item" href="/logout">Log Out</a></li>
          </ul>
        </li>
        @else
        <li class="nav-item">
        <a class="nav-link active" href="/login">Login</a>
        </li>

        <li class="nav-item">
        <a class="nav-link active" href="/register">register</a>
        </li>
        @endif
    </ul>
    </div>
  </div>
</nav>
