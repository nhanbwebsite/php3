<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('clients/css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/app.css')}}">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100&display=swap" rel="stylesheet">




    <link href="{{asset('fonts/PTS55F.ttf')}}" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

<div class="container-fluid">
    <header class="header">
        <div class="logo">
        <a href="#">  <img src="{{asset('clients/images/logo/logo.png')}}" alt="Logo"></a>
        </div>
        <ul class="menu upperCase">
            <li class="menu__item bold">
                <a href="#">Trang chủ</a>
            </li>
            <li class="menu__item bold">
                <a href="#">Nam</a>
                <div class="menu__child">
                        <ul class="menu__child-list font-normal">
                            <li class = "menu__child-list-item">
                                <a href="#" class="menu__child-list-link">Áo nam</a>
                                <div class="menu__child-list-sub">
                                    <ul class="menu__child-sub-list">
                                        <li class="menu__child-sub-item">
                                            <a href="#">Xem tất cả</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Áo polo nam</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Áo thun tay ngắn</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Áo thun tay dày</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Áo thun tay dày</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Áo sơ mi tay ngắn</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Áo sơ mi tay dài</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Áo khoát</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class = "menu__child-list-item">
                                <a href="#" class="menu__child-list-link">Quần nam</a>
                                <div class="menu__child-list-sub">
                                    <ul class="menu__child-sub-list">
                                        <li class="menu__child-sub-item">
                                            <a href="#">Xem tất cả</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Quần jean nam</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Quần kaki nam</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Quần short nam</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class = "menu__child-list-item">
                                <a href="#" class="menu__child-list-link">Phụ kiện</a>
                                <div class="menu__child-list-sub">
                                    <ul class="menu__child-sub-list">
                                        <li class="menu__child-sub-item">
                                            <a href="#">thắt lưng</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">Ví/Balo</a>
                                        </li>
                                        <li class="menu__child-sub-item">
                                            <a href="#">giày dép</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class = "menu__child-list-item">
                                <a href="#" class="menu__child-list-link">Giảm giá</a>
                            </li>
                        </ul>
                </div>

            </li>
            <li class="menu__item bold">
                <a href="#" class="menu__child-list-link">Nữ</a>
                <div class="menu__child">
                    <ul class="menu__child-list font-normal">
                        <li class = "menu__child-list-item">
                            <a href="#">Áo nữ</a>
                            <div class="menu__child-list-sub">
                                <ul class="menu__child-sub-list">
                                    <li class="menu__child-sub-item">
                                        <a href="#">Xem tất cả</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo thun nữ</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo sơ mi tay ngắn</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo sơ mi tay dài</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo khoát</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class = "menu__child-list-item">
                            <a href="#" class="menu__child-list-link">Quần nữ</a>
                            <div class="menu__child-list-sub">
                                <ul class="menu__child-sub-list">
                                    <li class="menu__child-sub-item">
                                        <a href="#">Xem tất cả</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Quần jean nữ</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">quần kaki nữ</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">quần short nữ</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class = "menu__child-list-item">
                            <a href="#" class="menu__child-list-link">váy/đầm nữ</a>
                            <div class="menu__child-list-sub">
                                <ul class="menu__child-sub-list">

                                    <li class="menu__child-sub-item">
                                        <a href="#">chấn váy</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">đầm nữ</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class = "menu__child-list-item">
                            <a href="#" class="menu__child-list-link">Giảm giá</a>
                        </li>
                    </ul>
            </div>

            </li>
            <li class="menu__item item-seller">
                <a href="#"><img width = "120px" src="{{asset('clients/images/seller/seller2.png')}}" alt=""></a>
            </li>
            <li class="menu__item bold">
                <a href="#">Tin tức</a>
            </li>
            <li class="menu__item bold">
                <form class="menu__search" >
                    <input class="menu__item-search" placeholder="Tìm sản phẩm" type="search">
                </form>
            </li>
            <li class="menu__item bold">
                <a href="#">Trợ giúp</a>
            </li>
            <li class="menu__item bold">
                <a href="#">Đăng nhập</a>
            </li>
            <li class="menu__item bold">
                <span class="cart__text">Giỏ hàng (0)</span>
            </li>
            <div class="line"></div>
        </ul>

<!-- Cart  -->
    <div class="cart__pc" id="cart__pc">
        <div class="cart__item">
           <div class="box__title-among">
                <a href="#" class="cart__title" >Giỏ hàng</a>
                <p>0 sản phẩm</p>
           </div>
           <div class="box__products-cart mt-5">
            <div class="row">
                <div class="col-3">
                   <img src="{{asset('clients/images/products/10s21djaw003_-_camel_4__4.jpg')}}" alt="">
                </div>
                <div class="col-9">
                   <div class="box__products-title-cartFloat">
                    <a href="#"> ÁO KHOÁC NỮ. LOOSE FORM</a>
                    <i class="fa-solid fa-xmark delete__product-cartFloat"></i>
                   </div>
                   <p>Size: L</p>
                   <p> 570.000 ₫</p>
                   <div class="box__input-among-cart">
                    <input class="number__cart-float" value="1" min="1" type="number">
                   </div>
                </div>
            </div>
           </div>
           <div class="box__products-cart mt-5">
            <div class="row">
                <div class="col-3">
                   <img src="{{asset('clients/images/products/10s21djaw003_-_camel_4__4.jpg')}}" alt="">
                </div>
                <div class="col-9">
                   <div class="box__products-title-cartFloat">
                    <a href="#"> ÁO KHOÁC NỮ. LOOSE FORM</a>
                    <i class="fa-solid fa-xmark delete__product-cartFloat"></i>
                   </div>
                   <p>Size: L</p>
                   <p> 570.000 ₫</p>
                   <div class="box__input-among-cart">
                    <input class="number__cart-float" value="1" min="1" type="number">
                   </div>
                </div>
            </div>
           </div>

           <div class="box__products-cart mt-5">
            <div class="row">
                <div class="col-3">
                   <img src="{{asset('clients/images/products/10s21djaw003_-_camel_4__4.jpg')}}" alt="">
                </div>
                <div class="col-9">
                   <div class="box__products-title-cartFloat">
                    <a href="#"> ÁO KHOÁC NỮ. LOOSE FORM</a>
                    <i class="fa-solid fa-xmark delete__product-cartFloat"></i>
                   </div>
                   <p>Size: L</p>
                   <p> 570.000 ₫</p>
                   <div class="box__input-among-cart">
                    <input class="number__cart-float" value="1" min="1" type="number">
                   </div>
                </div>
            </div>
           </div>
           <div class="box__products-cart mt-5">
            <div class="row">
                <div class="col-3">
                   <img src="{{asset('clients/images/products/10s21djaw003_-_camel_4__4.jpg')}}" alt="">
                </div>
                <div class="col-9">
                   <div class="box__products-title-cartFloat">
                    <a href="#" > ÁO KHOÁC NỮ. LOOSE FORM</a>
                    <i class="fa-solid fa-xmark delete__product-cartFloat"></i>
                   </div>
                   <p>Size: L</p>
                   <p> 570.000 ₫</p>
                   <div class="box__input-among-cart">
                    <input class="number__cart-float" value="1" min="1" type="number">
                   </div>
                </div>
            </div>
           </div>
           <div class="box__products-cart mt-5">
            <div class="row">
                <div class="col-3">
                   <img src="{{asset('clients/images/products/10s21djaw003_-_camel_4__4.jpg')}}" alt="">
                </div>
                <div class="col-9">
                   <div class="box__products-title-cartFloat">
                    <a href="#"> ÁO KHOÁC NỮ. LOOSE FORM</a>
                    <i class="fa-solid fa-xmark delete__product-cartFloat"></i>
                   </div>
                   <p>Size: L</p>
                   <p> 570.000 ₫</p>
                   <div class="box__input-among-cart">
                    <input class="number__cart-float" value="1" min="1" type="number">
                   </div>
                </div>
            </div>
           </div>

           <div class="box__button-cartFloat mt-3">
               <form>
                    <x-button type="button" class="box__button-buy" value="Thanh toán ngay"/>
                    <x-button type="button" class="box__button-buy" value="Xem chi tiết giỏ hàng"/>
               </form>
                {{-- <div class="box__button-buy">Thành toán ngay</div> --}}
           </div>

           <i class="fa-solid fa-xmark close__cart-pc"></i>
    </div>
</div>
<!-- End cart -->
</header>
    <div class="banner">
       <a href=""> <img class="banner-item"  src="{{asset('clients/images/banner/Holiday_Season_Sale_Th_ng_5_Web_Slider_1920x1000.jpg')}}" alt="banner"></a>
    </div>



<main class="row content">
    <h2 class="title__header-textProduct">Sản phẩm giảm giá</h2>

    <div class="row product__box">
        <div class="col-12 col-md-6 col-lg-3">
        <a href="#"> <img src="{{asset(('clients/images/products/fitted.jpg'))}}" alt="ảnh sản phẩm"></a>
            <div class="product__box-title mt-2"><a href="#">ÁO POLO SỌC GÂN TAY NGẮN. FITTED - 10S22POL046</a></div>
        <div class="product__box-price d-flex">
            <div class="box__price-item1 me-3"><del class="product__box-priceDell" >472.000 ₫</del></div>
            <div class="box__price-item2 product__now">472.000 ₫</div>
        </div>
        <div class="product__box-seller">
            <img  src="{{asset('clients/images/seller/seller2.png')}}" alt="">
        </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
        <a href="#"> <img src="{{asset(('clients/images/products/fitted.jpg'))}}" alt="ảnh sản phẩm"></a>
            <div class="product__box-title mt-2"><a href="#">ÁO POLO SỌC GÂN TAY NGẮN. FITTED - 10S22POL046</a></div>
        <div class="product__box-price d-flex">
            <div class="box__price-item1 me-3"><del class="product__box-priceDell" >472.000 ₫</del></div>
            <div class="box__price-item2 product__now">472.000 ₫</div>
        </div>
        <div class="product__box-seller">
            <img  src="{{asset('clients/images/seller/seller2.png')}}" alt="">
        </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
        <a href="#"> <img src="{{asset(('clients/images/products/fitted.jpg'))}}" alt="ảnh sản phẩm"></a>
            <div class="product__box-title mt-2"><a href="#">ÁO POLO SỌC GÂN TAY NGẮN. FITTED - 10S22POL046</a></div>
        <div class="product__box-price d-flex">
            <div class="box__price-item1 me-3"><del class="product__box-priceDell" >472.000 ₫</del></div>
            <div class="box__price-item2 product__now">472.000 ₫</div>
        </div>
        <div class="product__box-seller">
            <img  src="{{asset('clients/images/seller/seller2.png')}}" alt="">
        </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
        <a href="#"> <img src="{{asset(('clients/images/products/fitted.jpg'))}}" alt="ảnh sản phẩm"></a>
            <div class="product__box-title mt-2"><a href="#">ÁO POLO SỌC GÂN TAY NGẮN. FITTED - 10S22POL046</a></div>
        <div class="product__box-price d-flex">
            <div class="box__price-item1 me-3"><del class="product__box-priceDell" >472.000 ₫</del></div>
            <div class="box__price-item2 product__now">472.000 ₫</div>
        </div>
        <div class="product__box-seller">
            <img  src="{{asset('clients/images/seller/seller2.png')}}" alt="">
        </div>
        </div>
    </div>
    <div class="product__new">
        <h2 class="title__header-textProduct new">Sản phẩm mới</h2>
        <div class="row product__box">
            <div class="col-12 col-md-6 col-lg-3">
            <a href="#"> <img src="{{asset(('clients/images/products/fitted.jpg'))}}" alt="ảnh sản phẩm"></a>
                <div class="product__box-title mt-2"><a href="#">ÁO POLO SỌC GÂN TAY NGẮN. FITTED - 10S22POL046</a></div>
            <div class="product__box-price d-flex">
                <div class="box__price-item1 me-3"><del class="product__box-priceDell" >472.000 ₫</del></div>
                <div class="box__price-item2 product__now">472.000 ₫</div>
            </div>
            <div class="product__box-seller">
                <img  src="{{asset('clients/images/seller/new.png')}}" alt="">
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
            <a href="#"> <img src="{{asset(('clients/images/products/fitted.jpg'))}}" alt="ảnh sản phẩm"></a>
                <div class="product__box-title mt-2"><a href="#">ÁO POLO SỌC GÂN TAY NGẮN. FITTED - 10S22POL046</a></div>
            <div class="product__box-price d-flex">
                <div class="box__price-item1 me-3"><del class="product__box-priceDell" >472.000 ₫</del></div>
                <div class="box__price-item2 product__now">472.000 ₫</div>
            </div>
            <div class="product__box-seller">
                <img  src="{{asset('clients/images/seller/new.png')}}" alt="">
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
            <a href="#"> <img src="{{asset(('clients/images/products/fitted.jpg'))}}" alt="ảnh sản phẩm"></a>
                <div class="product__box-title mt-2"><a href="#">ÁO POLO SỌC GÂN TAY NGẮN. FITTED - 10S22POL046</a></div>
            <div class="product__box-price d-flex">
                <div class="box__price-item1 me-3"><del class="product__box-priceDell" >472.000 ₫</del></div>
                <div class="box__price-item2 product__now">472.000 ₫</div>
            </div>
            <div class="product__box-seller">
                <img  src="{{asset('clients/images/seller/new.png')}}" alt="">
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
            <a href="#"> <img src="{{asset(('clients/images/products/fitted.jpg'))}}" alt="ảnh sản phẩm"></a>
                <div class="product__box-title mt-2"><a href="#">ÁO POLO SỌC GÂN TAY NGẮN. FITTED - 10S22POL046</a></div>
            <div class="product__box-price d-flex">
                <div class="box__price-item1 me-3"><del class="product__box-priceDell" >472.000 ₫</del></div>
                <div class="box__price-item2 product__now">472.000 ₫</div>
            </div>
            <div class="product__box-seller">
                <img  src="{{asset('clients/images/seller/new.png')}}" alt="">
            </div>
            </div>
        </div>
    </div>
    <a href="#"> <h2 class="title__header-textProduct new">Bài viết</h2></a>
    <div class="box_news row">
        <div class="box__news-item col-12 col-md-6 col-lg-2">
            <img class="img-responsive image-new" src="{{'clients/images/products/fitted.jpg'}}" alt="">
            <a href="#"><h4 href="#" class="box__new-title">Tiêu đề bài viết</h4></a>
            <p class="box__news-description">Thành lập đầu năm 2019,
                startup thời trang nội địa này cung cấp các sản phẩm may mặc
                100% sản xuất tại Việt Nam dành cho nam giới.
                Họ ứng dụng công nghệ ở cả khâu sản xuất và bán hàng.</p>
        </div>
        <div class="box__news-item col-12 col-md-6 col-lg-2">
            <img class="img-responsive image-new" src="{{'clients/images/products/fitted.jpg'}}" alt="">
            <a href="#"><h4 href="#" class="box__new-title">Tiêu đề bài viết</h4></a>
            <p class="box__news-description">Thành lập đầu năm 2019,
                startup thời trang nội địa này cung cấp các sản phẩm may mặc
                100% sản xuất tại Việt Nam dành cho nam giới.
                Họ ứng dụng công nghệ ở cả khâu sản xuất và bán hàng.</p>
        </div>
        <div class="box__news-item col-12 col-md-6 col-lg-2">
            <img class="img-responsive image-new" src="{{'clients/images/products/fitted.jpg'}}" alt="">
            <a href="#"><h4 href="#" class="box__new-title">Tiêu đề bài viết</h4></a>
            <p class="box__news-description">Thành lập đầu năm 2019,
                startup thời trang nội địa này cung cấp các sản phẩm may mặc
                100% sản xuất tại Việt Nam dành cho nam giới.
                Họ ứng dụng công nghệ ở cả khâu sản xuất và bán hàng.</p>
        </div>
        <div class="box__news-item col-12 col-md-6 col-lg-2">
            <img class="img-responsive image-new" src="{{'clients/images/products/fitted.jpg'}}" alt="">
            <a href="#"><h4 href="#" class="box__new-title">Tiêu đề bài viết</h4></a>
            <p class="box__news-description">Thành lập đầu năm 2019,
                startup thời trang nội địa này cung cấp các sản phẩm may mặc
                100% sản xuất tại Việt Nam dành cho nam giới.
                Họ ứng dụng công nghệ ở cả khâu sản xuất và bán hàng.</p>
        </div>
        <div class="box__news-item col-12 col-md-6 col-lg-2">
            <img class="img-responsive image-new" src="{{'clients/images/products/fitted.jpg'}}" alt="">
            <a href="#"><h4 href="#" class="box__new-title">Tiêu đề bài viết</h4></a>
            <p class="box__news-description">Thành lập đầu năm 2019,
                startup thời trang nội địa này cung cấp các sản phẩm may mặc
                100% sản xuất tại Việt Nam dành cho nam giới.
                Họ ứng dụng công nghệ ở cả khâu sản xuất và bán hàng.</p>
        </div>
        <div class="box__news-item col-12 col-md-6 col-lg-2">
            <img class="img-responsive image-new" src="{{'clients/images/products/fitted.jpg'}}" alt="">
            <a href="#"><h4 href="#" class="box__new-title">Tiêu đề bài viết</h4></a>
            <p class="box__news-description">Thành lập đầu năm 2019,
                startup thời trang nội địa này cung cấp các sản phẩm may mặc
                100% sản xuất tại Việt Nam dành cho nam giới.
                Họ ứng dụng công nghệ ở cả khâu sản xuất và bán hàng.</p>
        </div>

    </div>
</main>

<footer class="footer row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
        <div class=" footer__item-1">
            <h5>THAM GIA BẢN TIN CỦA CHÚNG TÔI</h5>
            <form class="form__nhanthongtin">
                <input type="search" class="form__nhanthongtin-item form__nhanthongtin-search"
                placeholder="Nhập email của bạn" >
            </form>
            <p class="footer__diachi">Lương Tâm - Long Mỹ - Hậu Giang</p>
            <ul class="footer__socimedia">
                <li class="footer__socimedia-item"><i class="fa-brands fa-facebook"></i></li>
                <li class="footer__socimedia"><i class="fa-brands fa-instagram"></i></li>
            </ul>
            <div class="logo__bocongthuong">
                <img src="{{asset('clients/images/logo/bo-cong_thuong.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
        <div class="footer__item-2">
            <h6>CÔNG TY</h6>
            <ul class="footer__item-list">
                <li><a href="#">Giới thiệu về MyShope</a></li>
                <li><a href="#">Tuyển dụng</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Chăm sóc khách hàng</a></li>
                <li><a href="#">Hợp tác nhượng quyền</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
        <div class="footer__item-3">
            <h6>CHÍNH SÁCH KHÁCH HÀNG</h6>
            <ul class="footer__item-list">
                <li><a href="#">Chính sách khách hàng thân thiết</a></li>
                <li><a href="#">Chính sách đổi & trả hàng</a></li>
                <li><a href="#">Chính sách bảo hành</a></li>
                <li><a href="#">Chính sách bảo mật</a></li>
                <li><a href="#">Các câu hỏi thường gặp</a></li>
            </ul>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
        <div class="footer__item-4">
            <h6>THÔNG TIN CỬA HÀNG</h6>
            <ul class="footer__item-list">
                <li><a href="#">CỬA HÀNG THỨ 1</a>
                    <p class="footer__diachi1">Lương Tâm - Long Mỹ - Hậu Giang</p>
                </li>
                <li><a href="#">CỬA HÀNG THỨ 2</a>
                    <p class="footer__diachi1">68 - Ninh Kiều - Cần Thơ</p>
                </li>

            </ul>
        </div>
    </div>
</footer>
    <!-- cart empty -->
    <!-- <div class="cart__pc" id="cart__pc">
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
    </div> -->

    <!-- cart exist -->
   <a href="#"> <i class="fa-solid fa-square-caret-up"></i></a>

</body>
<script src="{{asset('clients/js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
