<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>

    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<style>
    .custom-login{
        height:400px;
        padding-top:100px;
    }

    .custom-product{
        background-color:;
        
    }

    img.slider-img{
        height: 400px; !important
    }

    .slider-text{
        background-color:#8080803d;
    }

    .trending-image{
        height:100px;
    }

    .trending-wrapper {
        background-color:white;
        margin:50px;
    }

    .trending-item{
        float:left;
        width:20%;
    }

    .carousel-style{
        background-color:black;
    }
    .product-detail{
        text-decoration:none;
    }
    .detail-img{
        height:300px;
    }
    .detail-tag{
        text-decoration:none;
    }
    .search-box{
        width:500px;
    }
    .user-dropdown.show{
        margin-left: -60px;
    }
    .header-ul{
        display: inline-flex;
    }
    .header-ul>li{
        list-style:none;
        margin-left: 12px;
    }
    .cart-list-divider{
        border-bottom:2px solid #ccc;
        margin-bottom:20px;
        padding-bottom:20px;
        /* padding-top: 10px; */
    }
    .custom-order-page{
        padding-left:30px;
    }
</style>
</head>
<body>
    
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</body>
</html>