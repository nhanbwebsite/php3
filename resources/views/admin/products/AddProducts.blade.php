@extends('layout.admin')

@section('content')

{{-- form add product --}}
<h2 style="color:black">Thêm mới sản phẩm</h2>
<form method="post" enctype="multipart/form-data">
    <div class="box_add_form row">
        <div class="col-9">
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
                <label for="" class="form-label">Tên sản phẩm <span style="color:red" >*</span></label>
                <input type="text" class="form-control" id="" name="product_name" value="{{old('product_name')}}" placeholder="Nhập tên sản phẩm">
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
              <label for="" class="form-label">Giá khuyến mãi (%)<span style="color:red" >*</span></label>
              <input type="number" min="0" max="100" value="0" class="form-control" id="" name="product_price_discount" value="{{old('product_price_discount')}}" placeholder="Nhập giá khuyến mãi sản phảm theo %, VD: 5">
              @error('product_price_discount')
                <span style="color:red" >{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Số lượng sản phẩm (lớn hơn hoặc = 0)<span style="color:red" >*</span></label>
               <input type="number" min="0" class="form-control" id="" value="0" name="product_quantity" value="{{old('product_quantity')}}" placeholder="Nhập giá sản phẩm">
              @error('product_quantity')
               <span style="color:red" >{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">size: <span style="color:red" >*</span></label>
              <div class="box__size">
                @forelse($listSize as $itemSize)
                    <div class="form-check">
                        <input class="form-check-input" name="product_size[]" type="checkbox" value="{{$itemSize->size}}">
                        <label class="form-check-label" for="flexCheckDefault">
                           {{$itemSize->size}}
                        </label>
                    </div>
                    @empty
                    <h4>Không có size, vui lòng thêm size trước khi thêm sản phẩm</h4>
                @endforelse
            </div>
            @error('product_size')
            <span style="color:red" >{{$message}}</span>
            @enderror

             <div class="mb-3">
                <label for="" class="form-label">Thông tin chi tiết sản phẩm<span style="color:red" >*</span></label>
                <textarea class="form-control" name="product_details" id="editorProdetails" rows="3"></textarea>
                @error('product_desc')
                <span style="color:red" >{{$message}}</span>
                @enderror
              </div>
            <div class="mb-3">
                <label for="" class="form-label">Mô tả sản phẩm<span style="color:red" >*</span></label>
                <textarea class="form-control" name= "product_desc" id="editorDesc" rows="3"></textarea>
                @error('product_desc')
                <span style="color:red" >{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Danh mục sản phẩm<span style="color:red" >*</span></label>
            <select class="form-select" name="id_sub_cate" aria-label="Default select example">

                @forelse($dataListCate as $item)
                     <option value="{{$item->id}}">{{$item->sub_category_name}}</option>
                @empty
                <h4>Không có danh mục, vui lòng thêm danh mục trước khi thêm sản phẩm</h4>

                @endforelse
              </select>
            @error('product_desc')
            <span style="color:red" >{{$message}}</span>
            @enderror
        </div>


    </div>
    <div class="col-3">
        <div class="mb-3">
            <label for="" class="form-label">Trạng thái<span style="color:red" >*</span></label>
            <select class="form-select" name="status" aria-label="Default select example">
                <option value="1" selected>Hiển thị</option>
                <option value="0">Ẩn</option>
              </select>
            @error('product_status')
            <span style="color:red" >{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Hình:<span style="color:red" >*</span></label>
            <div class="input-group mb-3">
                <input type="file" name="product_img" class="form-control" title=" " id="inputGroupFile02">
                {{-- <label class="input-group-text" title = " " for="inputGroupFile02">Upload</label> --}}
              </div>
            @error('product_img')
            <span style="color:red" >{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
          <img width="100%" src="" id="box_img_watch" alt="">
        </div>
    </div>
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
