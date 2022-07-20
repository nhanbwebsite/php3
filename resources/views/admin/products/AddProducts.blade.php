@extends('layout.admin')

@section('content')

{{-- form add product --}}
<form method="post" action="">

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
      <label for="exampleInputPassword1" class="form-label">Tên sản phẩm <span style="color:red" >*</span>  </label>
      <input type="text" class="form-control" id="" name="product_name" value = "{{ old('product_name') }}"  placeholder="Nhập tên sản phẩm">
    @error('product_name')
        <span style="color:red" >{{$message}}</span>
    @enderror
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Giá sản phẩm <span style="color:red" >*</span></label>
      <input type="text" class="form-control" id="" name="product_price" value="{{old('product_price')}}" placeholder="Nhập giá sản phẩm">
      @error('product_price')
      <span style="color:red" >{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Danh mục sản phẩm<span style="color:red" >*</span></label>
        <select class="form-control">
            <option value="0"> Chọn danh mục sản phẩm </option>
            @if(!empty($listCategories))
                @foreach($listCategories as $key => $item)
                     <option value="0"> {{$item->category_name}} </option>
                @endforeach
            @endif
        </select>
      @error('category_id')
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
href="{{asset('admin/css/products/addProduct.css')}}"
@endsection

{{-- js for this page --}}
@section('jsForThisPage')
src="{{asset('admin/js/products/addProduct.js')}}"
@endsection


