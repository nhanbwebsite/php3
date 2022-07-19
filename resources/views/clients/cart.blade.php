@extends('layout.clients')

{{-- title --}}

@section('title')
    Giỏ hàng
@endsection
{{-- end cart --}}

{{-- banner --}}
@section('banner')

@endsection
{{-- end banner --}}

{{-- content --}}
@section('content')
    <div class="keep__the-size">
        <div class="content__cart">
            <h2 class="content__cart-title">Giỏ hàng</h2>
            <h5 class="content__cart-amount">2 sản phẩm</h5>
            <div class="row content__checkout mt-4">
                <div class="col-12 col-md-7 col-lg-7">
                  <div class="row content__checkout-product-infomation">
                    <div class="col-12 col-md-3 col-lg-3 content__checkout-img">
                        <img src="{{asset('clients/images/products/Father_s_Day_mockupfott.jpg')}}" title="ÁO thun nam tay ngắn. - 10S22POL038" alt="">
                    </div>
                    <div class="col-12 col-md-9 col-lg-9">
                        <div class="content__checkout-title-close">
                            <h3 class="content__checkout-title-product">ÁO thun nam tay ngắn. - 10S22POL038</h3>
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="content__color_size">
                            TRẮNG / XS
                        </div>
                        <div class="content__checkout-price">
                            472.000 ₫
                        </div>
                        {{-- value --}}
                        <div class="box_product-detail-amount">
                            <div class="amount__value">

                             <div class="box__amount">
                                 <div class="subtraction">-</div>
                                 <input type="number" value= "1" class="box__amount-inputValue">
                                 <div class="summation">+</div>
                             </div>
                            </div>
                             {{-- btn buy product --}}
                           {{-- <form class="form_buy">
                             <x-button type="button" class="box__button-buy" value="Thêm vào giỏ hàng"/>
                           </form> --}}
                        </div>
                        {{-- end value --}}
                    </div>
                  </div>


                  <div class="row content__checkout-product-infomation">
                    <div class="col-12 col-md-3 col-lg-3 content__checkout-img">
                        <img src="{{asset('clients/images/products/Father_s_Day_mockupfott.jpg')}}" title="ÁO thun nam tay ngắn. - 10S22POL038" alt="">
                    </div>
                    <div class="col-12 col-md-9 col-lg-9">
                        <div class="content__checkout-title-close">
                            <h3 class="content__checkout-title-product">ÁO thun nam tay ngắn. - 10S22POL038</h3>
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="content__color_size">
                            TRẮNG / XS
                        </div>
                        <div class="content__checkout-price">
                            472.000 ₫
                        </div>
                        {{-- value --}}
                        <div class="box_product-detail-amount">
                            <div class="amount__value">

                             <div class="box__amount">
                                 <div class="subtraction">-</div>
                                 <input type="number" value= "1" class="box__amount-inputValue">
                                 <div class="summation">+</div>
                             </div>
                            </div>
                             {{-- btn buy product --}}
                           {{-- <form class="form_buy">
                             <x-button type="button" class="box__button-buy" value="Thêm vào giỏ hàng"/>
                           </form> --}}
                        </div>
                        {{-- end value --}}
                    </div>
                  </div>

                </div>

                {{-- right --}}
                <div class="col-12 col-md-5 col-lg-5 content__checkout-right">
                    <div class="content__checkout-right-info">
                        <p class="content__checkout-right-textSec">* Mọi thông tin của quý khách sẽ được bảo mật</p>
                        <div class="content__checkout-right-pricetemp content__checkout-right-flex">
                            <span>Tạm tính</span>
                            <span>944.000 ₫</span>
                        </div>
                        <div class="content__checkout-right-vc content__checkout-right-flex">
                            <span>Phí vận chuyển</span>
                            <span>0 ₫</span>
                        </div>
                        <div class="content__checkout-right-tc content__checkout-right-flex">
                            <span class="content__checkout-right-tc-title">Tổng số</span>
                            <span>944.000 ₫</span>
                        </div>
                    </div>
                   <form class="content__checkout-right-form_ttt">
                     <x-button type="submit" class="box__button-buy mt-2" value="tiến hành thanh toán" />
                   </form>

                   <div class="content__checkout-right-returnBuy">
                     <a href="#"> <i class="fa-solid fa-arrow-rotate-left"></i> Tiếp tục mua hàng</a>
                   </div>

                </div>
                {{-- end right --}}
            </div>
        </div>

    </div>
@endsection

{{-- news --}}
@section('news')
@endsection
{{-- end news --}}

{{-- css for page --}}
@section('cssForPage')
    {{asset('clients/css/cart.css')}}
@endsection

@section('jsForPage')
    {{asset('clients/js/cart.js')}}
@endsection
