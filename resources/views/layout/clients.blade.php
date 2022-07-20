<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('clients/css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/app.css')}}">
    {{-- reponsive --}}
    <link rel="stylesheet" href="{{asset('clients/css/responsive.css')}}">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100&display=swap" rel="stylesheet">
    <link href="{{asset('fonts/PTS55F.ttf')}}" rel="stylesheet">
    {{-- favicon --}}
    <link  rel="icon" type="image/x-icon" href="{{asset('clients/images/logo/logo_shophia.png')}}" />
    {{-- <!-- Font awesome --> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    {{-- css for page  --}}
    <link rel="stylesheet" href="@yield('cssForPage')">
    <script src="{{asset('clients/js/jquery.js')}}"></script>
</head>
<body>

<div class="container-fluid">
    <header class="header">
        @section('header')
            @include('part.header')
        @show
    </header>
{{-- banner --}}
<div class="banner">
    @section('banner')
        @include('part.banner')
    @show
</div>


<main class="row content">
   @yield('content')
   @section('news')
        @include('part.news')
   @show
</main>

<footer class="footer row">
    @include('part.footer')
</footer>

    {{-- cart empty --}}
    {{-- <div class="cart__pc" id="cart__pc">
        <div class="cart__item">
           <div class="box__title-among">
                <a href="#" class="cart__title" >Giỏ hàng</a>
                <p>0 sản phẩm</p>
           </div>
            <div class="box__cart-empty">
                <img src="../../../public/clients/images/cart/empty_cart_retina.png" alt="">
                <h3  class="mt-4">Không có sản phẩm nào trong giỏ hàng của bạn </h3>
                <a  href="#" class="mt-5 text__buy-cart-empty">Mua sắm ngay nào  <i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
        <i class="fa-solid fa-xmark close__cart-pc"></i>
    </div> --}}


   {{-- <a href="#"> <i class="fa-solid fa-square-caret-up"></i></a> --}}
</div>
</body>
<script src="{{asset('clients/js/app.js')}}"></script>
<script src="@yield('jsForPage')" > </script>
{{-- js bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
