@extends('layout.clients')

{{-- banner --}}

@section('banner')
{{-- @parent -> giữ lại banner layout đã include --}}
    @parent
@endsection

{{-- content --}}
@section('content')
<h2 class="title__header-textProduct">Sản phẩm mới</h2>
<div class="row box__pd" id="productsNew">
    <a class="mb-3" align="right" href="{{route('clients.allProducts')}}">Xem tất cả sản phẩm</a>
    @foreach($ListProductNew as $item)
    <div class="col-12 col-md-6 col-lg-3 product__box-col">
        <div class="product__box-col-img">
            <a class="product__box-col-img-link" href="#"><img src="{{asset('clients/images/products/')}}/{{$item->product_img}}" alt="{{$item->product_img}}"></a>
            <a href="{{route('proDetail',['id'=>$item->id])}}" class="product__box-col-img-hover" ></a>
        <div class="product__box-quickviews">
            {{-- <i class="fa-solid fa-magnifying-glass" onclick="quickView(${item.id})" title="Xem nhanh sản phẩm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i> --}}
            <a href="{{route('proDetail',['id'=>$item->id])}}" class="fa-solid fa-magnifying-glass"  title="Xem nhanh sản phẩm"  data-bs-target="#staticBackdrop"></a>
        </div>
        <div class="item_New">
            <img class="" src="{{asset('clients/images/seller/new.png')}}" alt="seller">
        </div>
        </div>
        <div class="product__box-col-text">
            <div class="product__box-col-text-title">
                {{$item->product_name}}
            </div>
            <div class="product__box-col-text-price">
                <del class="product__box-col-text-price-del">{{$item->product_price_discount > 0 ? number_format($item->product_price)  . '₫' : '' }} </del>
                <span class="product__box-col-text-price-now">{{$item->product_price_discount > 0 ? number_format($item->product_price - ($item->product_price_discount * $item->product_price)/100): number_format($item->product_price)}} ₫</span>
            </div>
        </div>
    </div>
    @endforeach

{{--
    <div class="col-12 col-md-6 col-lg-3 product__box-col">
        <div class="product__box-col-img">
            <a class="product__box-col-img-link" href="#"><img src="{{asset('clients/images/products/slimfit_main.jpg')}}" alt=""></a>
            <a href="#" class="product__box-col-img-hover" ></a>
           <div class="product__box-quickviews">
            <i class="fa-solid fa-magnifying-glass" title="Xem nhanh sản phẩm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
           </div>
           <div class="item_New">
            <img class="" src="{{asset('clients/images/seller/new.png')}}" alt="">
        </div>
        </div>
        <div class="product__box-col-text">
            <div class="product__box-col-text-title">
                Tên sản phẩm
            </div>
            <div class="product__box-col-text-price">
                <del class="product__box-col-text-price-del">450.000 ₫</del>
                <span class="product__box-col-text-price-now">380.000 ₫</span>
            </div>
        </div>
    </div>

    </div> --}}



</div>

{{-- sản phẩm mới --}}

<h2 class="title__header-textProduct">Sản phẩm giảm giá</h2>
<div class="row box__pd" id="productsSeller">

    @foreach($ListProductDiscount as $item)
    <div class="col-12 col-md-6 col-lg-3 product__box-col">
        <div class="product__box-col-img">
            <a class="product__box-col-img-link" href="#"><img src="{{asset('clients/images/products/')}}/{{$item->product_img}}" alt="{{$item->product_img}}"></a>
            <a href="{{route('proDetail',['id'=>$item->id])}}" class="product__box-col-img-hover" ></a>
        <div class="product__box-quickviews">
            {{-- <i class="fa-solid fa-magnifying-glass"  title="Xem nhanh sản phẩm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i> --}}
            <a href="{{route('proDetail',['id'=>$item->id])}}" class="fa-solid fa-magnifying-glass"  title="Xem nhanh sản phẩm"  data-bs-target="#staticBackdrop"></a>
        </div>
        <div class="item_New">
            <img class="" src="{{asset('clients/images/seller/seller2.png')}}" alt="seller">
        </div>
        </div>
        <div class="product__box-col-text">
            <div class="product__box-col-text-title">
                {{$item->product_name}}
            </div>
            <div class="product__box-col-text-price">
                <del class="product__box-col-text-price-del">{{$item->product_price_discount > 0 ? number_format($item->product_price)  . '₫' : '' }} </del>
                <span class="product__box-col-text-price-now">{{$item->product_price_discount > 0 ? number_format($item->product_price - ($item->product_price_discount * $item->product_price)/100): number_format($item->product_price)}} ₫</span>
            </div>
        </div>
    </div>
    @endforeach

    {{-- <div class="col-12 col-md-6 col-lg-3 product__box-col">
        <div class="product__box-col-img">
            <a class="product__box-col-img-link" href="#"><img src="{{asset('clients/images/products/3.jpg')}}" alt=""></a>
            <a href="#" class="product__box-col-img-hover" ></a>
           <div class="product__box-quickviews">
            <i class="fa-solid fa-magnifying-glass" title="Xem nhanh sản phẩm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
           </div>
           <div class="item_seller">
            <img class="" src="{{asset('clients/images/seller/seller2.png')}}" alt="">
           </div>
        </div>
        <div class="product__box-col-text">
            <div class="product__box-col-text-title">
                Tên sản phẩm
            </div>
            <div class="product__box-col-text-price">
                <del class="product__box-col-text-price-del">450.000 ₫</del>
                <span class="product__box-col-text-price-now">380.000 ₫</span>
            </div>
        </div>
    </div>



    --}}
</div>



<!-- Button trigger modal -->
{{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> --}}

<!-- Modal quick view -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <i class="fa-solid fa-circle-xmark close__modal" data-bs-dismiss="modal" aria-label="Close"></i>
      </div>
      <div class="modal-body">
        <div class="box__product-detail m-0">

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


      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
        <button type="button" class="btn btn-primary">Thêm vào giỏ hàng</button>
      </div> --}}
    </div>
  </div>
</div>
{{-- end model quick view --}}

@endsection

@section('jsForPage')
{{asset('clients/js/home.js')}}
@endsection
