@extends('layout.clients')
{{-- title paga --}}
@section('title')
Chi tiết sản phẩm
@endsection
{{-- news --}}
@section('news')
@endsection

{{-- banner --}}
@section('banner')
@endsection

{{-- content --}}
@section('content')
<div class="box__product-detail">

   <div class="row box__product-responsive">
        <div class="col-12 col-md-12 col-lg-7 box__product-detail-desc">
            <img src="{{asset('clients/images/products/10s21dpa053_-_mgrey_2__1.jpg')}}" alt="">

            <img src="{{asset('clients/images/products/10s21dpa053_-_mgrey_5__1.jpg')}}" alt="">

            <img src="{{asset('clients/images/products/10s21dpa053_-_mgrey_4__1.jpg')}}" alt="">

            <img src="{{asset('clients/images/products/10s21dpa053_-_mgrey_6__1.jpg')}}" alt="">
        </div>
        <div class="col-12 col-md-12 col-lg-5 box__product-detail-info">
            <h3 class="box__product-detail-title" >QUẦN JEAN PHỐI TAPE LƯNG. SLIM - 10S21DPA053</h3>
            <h4 class="box__product-detail-price" >540.000 ₫</h4>
            <p class="box__product-detail-code" ><b> MÃ HÀNG HÓA: </b> 10S21DPA053</p>
           <div class="box__product-detail-color">
                <h4 class="box__product-detail-color-text">Màu: </h4>
                <div class="box__product-detail-color-img">
                    <div class="box__product-detail-color-img-item">
                        <img src="{{asset('clients/images/products/10s21dpa053_-_mgrey_2__1.jpg')}}" title="Nâu" alt="">
                    </div>
                    <div class="box__product-detail-color-img-item">
                        <img src="{{asset('clients/images/products/10s21dpa053_-_mgrey_5__1.jpg')}}" title="Xám/Bạc" alt="">
                    </div>
                    <div class="box__product-detail-color-img-item">
                        <img src="{{asset('clients/images/products/10s21dpa053_-_mgrey_6__1.jpg')}}" title="Đen" alt="">
                    </div>
                </div>
           </div>
           <div class="box__desction-details">
                <h3 class="text__title">Mô tả sản phẩm</h3>
                <div class="text_desction">
                    <p>Chất liệu: COTTON DOUBLE FACE</p>
                    <p>- Vải sợi Cotton được dệt theo "DOUBLE-FACE" có cấu trúc 2 bề mặt giống nhau, có thể sử dụng được cả 2 mặt vải</p>
                    <p> - Thành phần: 87% Cotton 13% Polyester</p>

                </div>
           </div>
           <div class="box__product-detail-size">
                <div class="box__product-detail-size-text">Size: </div>
                <div class="box__product-detail-size-number">
                    <div class="box__product-detail-size-number-item" title = "Size: 29" >29</div>
                    <div class="box__product-detail-size-number-item" title = "Size: 30" >30</div>
                    <div class="box__product-detail-size-number-item" title = "Size: 31" >31</div>
                    <div class="box__product-detail-size-number-item" title = "Size: 32" >32</div>
                    <div class="box__product-detail-size-number-item" title = "Size: 33" >33</div>
                    <div class="box__product-detail-size-number-item" title = "Size: 34" >34</div>
                </div>
                <h4 class="choose_guide mt-3"> <i class="fa-solid fa-share"></i> Hướng Dẫn Chọn Size</h4>
           </div>
           <div class="box_product-detail-amount">
               <div class="amount__value">

                <div class="box__amount">
                    <div class="subtraction">-</div>
                    <input type="number" value= "1" class="box__amount-inputValue">
                    <div class="summation">+</div>
                </div>
               </div>
                {{-- btn buy product --}}
              <form class="form_buy">
                <x-button type="button" class="box__button-buy" value="Thêm vào giỏ hàng"/>
              </form>
           </div>
           <div class="delivery">
                <img src="{{asset('clients/images/chinh_sach/chinh_sach.jpg')}}" alt="">
           </div>
        </div>
   </div>
<div class="box__chooseSezeGuide">

    <div class="box__chooseSeziGuide-item">
       <div class="box__chooseZiseGuide-text">
        <i class="fa-solid fa-circle-xmark close_chooseSize"></i>
            <h3 class="box__chooseSezeGuide-title">
                HƯỚNG DẪN CHỌN SIZE
            </h3>
            <h3 class="box__chooseSezeGuide-proname"> QUẦN JEAN PHỐI TAPE LƯNG. SLIM - 10S21DPA053</h3>
        </div>
        <div class="img_chooseSize">
            <img src="{{asset('clients/images/size/choose_size.jpg')}}" alt="">
        </div>
    </div>

</div>
</div>



@endsection

{{-- css for page  --}}
@section('cssForPage')
{{asset('clients/css/product_details.css')}}
@endsection

{{-- js for page --}}
@section('jsForPage')
{{asset('clients/js/product_details.js')}}
@endsection