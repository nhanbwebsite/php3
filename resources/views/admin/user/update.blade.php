@extends('layout.admin')

@section('content')
<h2 style="color:black;">Thêm người dùng</h2>
{{-- form add product --}}
<form method="post">
    @error('msg')
    <div class="alert alert-danger text-center">
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
        <label for="" class="form-label">Họ tên<span style="color:red" ></span></label>
        <input type="text" min="0" class="form-control" id="" name="fullname" value="{{$userById->fullname}}" placeholder="Nhập họ tên của bạn">
        @error('fullname')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>
    <div class="mb-3">
      <label for="" class="form-label">Địa chỉ email<span style="color:red" ></span></label>
      <input type="text" class="form-control" readonly name="email" value="{{$userById->email}}" placeholder="Nhập địa chỉ email, vd: nhanbpc01368@fpt.edu.vn">
      @error('email')
      <span style="color:red" >{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Điển thoại<span style="color:red" ></span></label>
      <input type="text" class="form-control"  name="phone" value="{{$userById->phone}}" placeholder="Nhập địa chỉ email, vd: nhanbpc01368@fpt.edu.vn">
      @error('email')
      <span style="color:red" >{{$message}}</span>
      @enderror
    </div>
      <div class="mb-3">
        <label for="" class="form-label">Nhập địa chỉ<span style="color:red" ></span></label>
        <input type="text" min="0" class="form-control" id="" name="address" value="{{$userById->address}}" placeholder="Nhập họ tên của bạn">
        @error('address')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
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
