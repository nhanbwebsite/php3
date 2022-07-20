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
                  <input type="text" class="form-control" >
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Địa chỉ</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Email</label>
                  <input type="email" class="form-control" >
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Số điện thoại</label>
                  <input type="text" class="form-control" >
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Tỉnh/Thành phố</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Chọn tỉnh/thành phố</option>
                    <option value="1">Hậu Giang</option>
                    <option value="2">Cần Thơ</option>
                    <option value="3">Vĩnh Long</option>
                    <option value="4">Sóc Trăng</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Quận/huyện</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Chọn quận/huyện</option>
                    <option value="1">Long Mỹ</option>
                    <option value="2">Vị Thủy</option>
                    <option value="3">Cái Răng</option>
                    <option value="4">Bình Thủy</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Xã/Phường</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Chọn xã/Phường</option>
                    <option value="1">Lương Tâm</option>
                    <option value="2">Vĩnh viễn</option>
                    <option value="3">Lương Nghĩa</option>
                    <option value="4">Xà Phiên</option>
                  </select>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Địa chỉ giao hàng</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Ghí chú đơn hàng</label>
                    <textarea placeholder="Ghi chú cho đơn hàng" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

               {{-- end form --}}
            </div>
            <div class="col-12 col-md-12 col-lg-3 checkout__right">
                <h3 class="title__ctdh"> Chi tiết đơn hàng </h3>
                <button type="button" class="btn btn-primary" id= "test">Primary</button>
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
