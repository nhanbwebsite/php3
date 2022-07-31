@extends('layout.admin')

@section('content')
<h2 style="color:black;">Thêm người dùng</h2>
{{-- form add product --}}
<form method="post">
    @error('msg')
    <div class="alert alert-danger text-center">
        {{-- Thông báo khi có lỗi --}}
        {{$message}}
    </div>
    @enderror
    {{-- Thông báo khi thêm dữ liệu thành công --}}
    @if(Session::has('success'))
                <div class="alert alert-success text-center">{{Session::get('success')}}</div>
    @endif
    <div class="mb-3">
        <label for="" class="form-label">Họ tên<span style="color:red" >*</span></label>
        <input type="number" min="0" class="form-control" id="" name="fullname" value="{{old('fullname')}}" placeholder="Nhập họ tên của bạn">
        @error('fullname')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>
    <div class="mb-3">
      <label for="" class="form-label">Địa chỉ email<span style="color:red" >*</span></label>
      <input type="text" class="form-control" id="" name="email" value="{{old('email')}}" placeholder="Nhập địa chỉ email, vd: nhanbpc01368@fpt.edu.vn">
      @error('email')
      <span style="color:red" >{{$message}}</span>
      @enderror
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Mật khẩu<span style="color:red" >*</span></label>
        <input type="password" min="0" class="form-control" id="" name="pass_word" value="{{old('pass_word')}}" placeholder="Nhập họ tên của bạn">
        @error('pass_word')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Xác mật khẩu<span style="color:red" >*</span></label>
        <input type="password" min="0" class="form-control" id="" name="confirm_pass_word" value="{{old('confirm_pass_word')}}" placeholder="Nhập họ tên của bạn">
        @error('confirm_pass_word')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Nhập địa chỉ<span style="color:red" >*</span></label>
        <input type="text" min="0" class="form-control" id="" name="address" value="{{old('address')}}" placeholder="Nhập họ tên của bạn">
        @error('address')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
    @csrf
</form>
@endsection
{{-- end section content --}}

{{-- css for this page --}}
@section('cssForThisPage')
{{asset('admin/css/products/addProduct.css')}}"
@endsection

{{-- js for this page --}}
@section('jsForThisPage')
{{asset('admin/js/products/addProduct.js')}}"
@endsection
