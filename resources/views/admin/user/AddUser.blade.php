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
    @if(Session::has('confirm_pass_err'))
        <x-alert type="danger" value="{{Session::get('confirm_pass_err')}}" />
    @endif
    @if(Session::has('errEmail'))
        <x-alert type="danger" value="{{Session::get('errEmail')}}" />
    @endif
    <div class="mb-3">
        <label for="" class="form-label">Họ tên<span style="color:red" >*</span></label>
        <input type="text"  class="form-control" id="" name="fullname" value="{{old('fullname')??session('fullname')}}" placeholder="Nhập họ tên người dùng">
        @error('fullname')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>
    <div class="mb-3">
      <label for="" class="form-label">Địa chỉ email<span style="color:red" >*</span></label>
      <input type="text" class="form-control" id="" name="email" value="{{old('email')??session('email')}}" placeholder="Nhập địa chỉ email, vd: nhanbpc01368@fpt.edu.vn">
      @error('email')
      <span style="color:red" >{{$message}}</span>
      @enderror
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Mật khẩu<span style="color:red" >*</span></label>
        <input type="password" min="0" class="form-control" id="" name="password" value="{{old('password')??session('password')}}" placeholder="Nhập mật khẩu">
        @error('password')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Xác mật khẩu<span style="color:red" >*</span></label>
        <input type="password" min="0" class="form-control" id="" name="confirm_pass_word" value="{{old('confirm_pass_word')??session('confirm_pass_word')}}" placeholder="Nhập lại mật khẩu">
        @error('confirm_pass_word')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Địa chỉ<span style="color:red" >*</span></label>
        <input type="text" min="0" class="form-control" id="" name="address" value="{{old('address')??session('address')}}" placeholder="Nhập địa chỉ">
        @error('address')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Số điện thoại<span style="color:red" >*</span></label>
        <input type="text" min="0" class="form-control" id="" name="phone" value="{{old('phone')??session('phone')}}" placeholder="Nhập số điện thoại">
        @error('phone')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Vai trò<span style="color:red" >*</span></label>
        <select name ="role" class="form-select" aria-label="Default select example">
            <option value="2">Khách hàng</option>
            <option value="1">Admin</option>
          </select>
        @error('role')
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
