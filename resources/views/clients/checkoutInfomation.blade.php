@extends('layout.clients')

{{-- title --}}

@section('title')
   checkout
@endsection
{{-- end cart --}}

{{-- banner --}}
@section('banner')

@endsection
{{-- end banner --}}

{{-- content --}}
@section('content')
    <div class="keep__the-size">
        <div class="row box__checkout">
            <div class="col-12 col-md-12 col-lg-9 box__checkout-l">
               <h3 class="box__checkout-title">NHẬP CÁC CHI TIẾT VỀ VIỆC GỬI HÀNG</h3>
               <h4 class="box__checkout-ttlh">THÔNG TIN LIÊN HỆ</h4>
               {{-- form --}}
               <form class="row g-3 checkout__form">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Họ tên</label>
                  <input type="text" value="@if(Session::has('user')) {{Session::get('user')['fullname']}} @endif" placeholder="Nhập họ tên của bạn" class="form-control" >
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Địa chỉ</label>
                  <input value="@if(Session::has('user')) {{Session::get('user')['address']}} @endif" placeholder="Nhập địa chỉ của bạn" type="text" class="form-control" >
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Email</label>
                  <input placeholder="Nhập email của bạn" value="@if(Session::has('user')) {{Session::get('user')['email']}} @endif"  type="email" class="form-control" >
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Số điện thoại</label>
                  <input placeholder="Nhập số điện thoại của bạn" value="@if(Session::has('user')) {{Session::get('user')['phone']}} @endif" type="text" class="form-control" >
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Tỉnh/Thành phố</label>
                  <select class="form-select" aria-label="Default select example" id="province">

                  </select>
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Quận/huyện</label>
                  <select class="form-select" aria-label="Default select example" id="district">

                  </select>
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Xã/Phường</label>
                  <select class="form-select" aria-label="Default select example" id="wards">

                  </select>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Địa chỉ giao hàng</label>
                    <input placeholder="số nhà-đường: vd: 195 Nguyễn Tri Phương" type="text" class="form-control">
                </div>
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Ghí chú đơn hàng</label>
                    <textarea placeholder="Ghi chú cho đơn hàng- vd: có thể nhận hàng vào buổi chiều lúc 15h" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

               {{-- end form --}}
            </div>
            <div class="col-12 col-md-12 col-lg-3 checkout__right">
                <h3 class="title__ctdh"> Chi tiết đơn hàng </h3>
                <div class="details__products-checkout">

                    {{-- <div class="box__products-cart">
                        <div class="row">
                            <div class="col-3 relative">
                               <img src="{{asset('clients/images/products/Father_s_Day_mockupfott.jpg')}}" alt="">
                               <div class="cart__number-checkout">2</div>
                            </div>
                            <div class="col-9">
                               <div class="box__products-title-cartFloat">
                                <a href="#"> Áo thun nam tay ngắn - 10S22POL38</a>
                                <i class="fa-solid fa-xmark delete__product-cartFloat"></i>
                               </div>
                               <p>Size: L</p>
                               <p> 570.000 ₫</p>
                               <div class="box__input-among-cart">

                               </div>
                            </div>
                        </div>
                       </div> --}}
                </div>
                   <table class="table">
                    <thead>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Tạm tính: </th>
                        <td class="tam__tinh-checkout"></td>

                      </tr>
                      <tr>
                        <th scope="row">Phí vận chuyển: </th>
                        <td colspan="2"> <span id="phiVanchuyen"> 0 </span>   đ</td>

                      </tr>
                      <tr>
                        <th scope="row" style="font-size:20px; color:var(--dark-red)">Tổng: </th>
                        <td colspan="2" style="font-size:20px; color:var(--dark-red)" id="totalCheckkout"></td>
                        <span hidden id="totalCheckkoutHidden"></span>

                      </tr>
                    </tbody>
                    <x-button type="button" value="Thanh toán" class="box__button-buy"/>
                  </table>
            </div>
        </form>
        </div>
    </div>
@endsection

{{-- news --}}
@section('news')
@endsection
{{-- end news --}}

{{-- css for page --}}
@section('cssForPage')
    {{asset('clients/css/checkkoutInfomation.css')}}
@endsection

@section('jsForPage')
    {{asset('clients/js/checkkoutInfomation.js')}}
@endsection
