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
{{-- modal --}}

<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">


    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Đã thêm sản phẩm vào giỏ hàng</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            @if(Session::has('addCartSuccess'))
            <button type="button" hidden class="btn btn-primary" data-bs-toggle="modal" id="toastModal" data-bs-target="#exampleModal">
                Successfully
            </button>

                <div class="alert alert-success pa-2" role="alert">
                    <h4>{{Session::get('addCartSuccess')}}</h4>
                </div>
            @endif
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="close_toast">Tiếp tục mua sắm</button>
          </div>
        </div>
      </div>

  </div>

{{-- end modal --}}
<div class="box__product-detail">
    <form method="post" class="form_buy" id="form_pro_details">
    {{-- {{dd($productDetails)}} --}}
   <div class="row box__product-responsive">
        <div class="col-12 col-md-12 col-lg-7 box__product-detail-desc">
            {!!$productDetails->product_desc!!}
        </div>
        <div class="col-12 col-md-12 col-lg-5 box__product-detail-info">
            <input type="text" value="{{$productDetails->id}}" hidden name="product_id_post" id="product_id_post">
            <input type="text" value="{{$productDetails->product_img}}" hidden name="product_image_post">
            <h3 class="box__product-detail-title" >{{$productDetails->product_name}}</h3>
            <input type="text" hidden value="{{$productDetails->product_name}}" name="product_name_post">
            <span class="box__product-detail-price" style="color:gray" >
                @if($productDetails->product_price_discount > 0)
                <del>
                    {{number_format($productDetails->product_price)}}
                </span> <span style="color:gray" class="price-mol">₫</span>
                </del>
                <br />
                @endif

            <span class="box__product-detail-price" >
                @if($productDetails->product_price_discount > 0)
                    {{number_format($productDetails->product_price - ($productDetails->product_price_discount *$productDetails->product_price)/100)}}
                @else
                {{$productDetails->product_price}}
                @endif
                <input type="bumber" name="price_post" hidden value="@if($productDetails->product_price_discount > 0){{round($productDetails->product_price - ($productDetails->product_price_discount *$productDetails->product_price)/100)}}@else{{$productDetails->product_price}}
                @endif" id="">
            </span> <span class="price-mol">₫</span>
            <p class="box__product-detail-code" id="pro_code_show" ><b> MÃ HÀNG HÓA: </b>  <span id="pro_code_show_text">SP{{$productDetails->id}}</span> </p>
            <input type="text" hidden name="pro_code_post" id="pro_code_hidden">
           {{-- <div class="box__product-detail-color">
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
           </div> --}}
           <div class="box__desction-details">
                <h3 class="text__title">Mô tả sản phẩm</h3>
                <div class="text_desction">
                    {!!$productDetails->product_details!!}
                </div>
           </div>
           {{-- toast --}}



           {{-- end toast --}}
           <div class="box__product-detail-size">
                <div class="box__product-detail-size-text">Size: </div>
                <div class="box__product-detail-size-number mb-2">
                    @foreach($listSize as $itemSize)
                        <div class="box__product-detail-size-number-item" title = "Size: {{$itemSize}}" >{{$itemSize}}</div>
                    @endforeach
                    {{-- <div class="box__product-detail-size-number-item" title = "Size: 30" >30</div>
                    <div class="box__product-detail-size-number-item" title = "Size: 31" >31</div>
                    <div class="box__product-detail-size-number-item" title = "Size: 32" >32</div>
                    <div class="box__product-detail-size-number-item" title = "Size: 33" >33</div>
                    <div class="box__product-detail-size-number-item" title = "Size: 34" >34</div> --}}
                </div>
                <input type="text" hidden name="size" value=""  id="size_input_hidden">
                @error('size')
               <x-alert type="danger" value="{{$message}}"/>
                @enderror
                <h4 class="choose_guide mt-3"> <i class="fa-solid fa-share"></i> Hướng Dẫn Chọn Size</h4>
           </div>
           <div class="box_product-detail-amount">
               <div class="amount__value">
                <div class="box__amount">
                    <div class="subtraction">-</div>
                    <input type="number" value= "1" min="1" name="quatity" class="box__amount-inputValue">
                    <div class="summation">+</div>
                </div>
               </div>
                {{-- btn buy product --}}

                {{-- <x-button type="submit" class="box__button-buy" value="Thêm vào giỏ hàng"/> --}}
        <button class="box__button-buy" type="submit" id="addToCart">Thêm vào giỏ hàng</button>
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
    @csrf
</form>
</div>
{{--

<script>

 $(function(){
    $.get('http://127.0.0.1:8000/api/productDetails/{{$id}}', function(response) {

    let product_name = '';
    let product_price = '';
    let product_price_discount = '';
    let description = '';
    let details = '';

    let data =  response.data.forEach((item) => {
        console.log(item)
        product_name = item.product_name;
        product_price = item.product_price;
        product_price_discount = item.product_price_discount;
        description  = item.description;
        details = item.details;
    })

    $('.text_desction').html(details);
    $('.box__product-detail-desc').html(description);
    $('.box__product-detail-title').html(product_name);
    let box__product = document.querySelector('.box__product-detail');

    })
})

</script> --}}

@endsection

{{-- css for page  --}}
@section('cssForPage')
{{asset('clients/css/product_details.css')}}
@endsection

{{-- js for page --}}
@section('jsForPage')
{{asset('clients/js/product_details.js')}}
@endsection
