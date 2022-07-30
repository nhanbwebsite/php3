@extends('layout.admin')

@section('content')

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
      <label for="" class="form-label">Giá sản phẩm <span style="color:red" >*</span></label>
      <input type="text" class="form-control" id="" name="product_price" value="{{old('product_price')}}" placeholder="Nhập giá sản phẩm">
      @error('product_price')
      <span style="color:red" >{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Số lượng sản phẩm (lớn hơn hoặc = 0)<span style="color:red" >*</span></label>
      <input type="number" min="0" class="form-control" id="" name="product_quantity" value="{{old('product_price')}}" placeholder="Nhập giá sản phẩm">
      @error('product_quantity')
      <span style="color:red" >{{$message}}</span>
      @enderror
    </div>

     <div class="mb-3">
        <label for="" class="form-label">Thông tin chi tiết sản phẩm<span style="color:red" >*</span></label>
        <textarea class="form-control" id="editorProdetails" rows="3"></textarea>
        @error('product_desc')
        <span style="color:red" >{{$message}}</span>
        @enderror
      </div>
    <div class="mb-3">
        <label for="" class="form-label">Mô tả sản phẩm<span style="color:red" >*</span></label>
        <textarea class="form-control" id="editorDesc" rows="3"></textarea>
        @error('product_desc')
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
