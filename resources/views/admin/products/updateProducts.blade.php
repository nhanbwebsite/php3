@extends('layout.admin')

@section('content')

{{-- form add product --}}
<h2 style="color:black">Cập nhật sản phẩm</h2>
@if(Session::has('errorImg'))
            <x-alert type="danger" value="{{Session::get('errorImg')}}" />
        @endif
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
                <input type="text" class="form-control" id="" name="product_name" value="{{$proModel->product_name}}">
                @error('product_name')
                <span style="color:red" >{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Giá sản phẩm <span style="color:red" >*</span></label>
              <input type="text" class="form-control" id="" name="product_price" value="{{$proModel->product_price}}">
              @error('product_price')
              <span style="color:red" >{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Giá khuyến mãi (%)<span style="color:red" >*</span></label>
              <input type="number" min="0" max="100" class="form-control" id="" name="product_price_discount" value="{{$proModel->product_price_discount}}">
              @error('product_price')
              <span style="color:red" >{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Số lượng sản phẩm (lớn hơn hoặc = 0)<span style="color:red" >*</span></label>
              <input type="number" min="0" class="form-control" id="" name="product_quantity" value="{{$proModel->product_quantity}}" placeholder="Nhập giá sản phẩm">
              @error('product_quantity')
              <span style="color:red" >{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">size: <span style="color:red" >*</span></label>
              <div class="box__size">
                @php
                    $listSize = explode(',',$proModel->product_size);
                @endphp
                @foreach($listSize as $itemSzie)
                    <div class="form-check">
                        <input class="form-check-input size_old_item" name="product_size[]" type="checkbox" checked value="{{$itemSzie}}" id="flexCheckDefault-{{$itemSzie}}">
                        <label class="form-check-label" for="flexCheckDefault-{{$itemSzie}}">
                            {{$itemSzie}}
                        </label>
                    </div>
                @endforeach

              </div>
              <div class="box__size sizeAll">
                @foreach($listSizeAll as $item)
                <div class="form-check">
                    <input class="form-check-input sizeAll_item" name="product_size[]" type="checkbox"  value="{{$item->size}}" id="flexCheckDefaultSizeOld-{{$item->size}}">
                    <label class="form-check-label" for="flexCheckDefault-{{$item->size}}">
                        {{$item->size}}
                    </label>
                </div>
                @endforeach
              </div>

              @error('product_size')
              <span style="color:red" >{{$message}}</span>
              @enderror
            </div>
             <div class="mb-3">
                <label for="" class="form-label">Thông tin chi tiết sản phẩm<span style="color:red" >*</span></label>
                <textarea class="form-control" name="product_details" id="editorProdetails" rows="3"> {{$proModel->product_details}} </textarea>
                @error('product_desc')
                <span style="color:red" >{{$message}}</span>
                @enderror
              </div>
            <div class="mb-3">
                <label for="" class="form-label">Mô tả sản phẩm<span style="color:red" >*</span></label>
                <textarea class="form-control" name= "product_desc" id="editorDesc" rows="3"> {{$proModel->product_desc}} </textarea>
                @error('product_desc')
                <span style="color:red" >{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-3">
            <div class="mb-3">
                <label for="" class="form-label">Danh mục sản phẩm<span style="color:red" >*</span></label>
                @php
                    use App\Models\admin\AdminModelCategory;
                    $subcateById = AdminModelCategory::find($proModel -> id_sub_cate);
                @endphp
                <select class="form-select" name="id_sub_cate" aria-label="Default select example">
                    <option value="{{$proModel -> id_sub_cate}}" selected> {{$subcateById -> sub_category_name}}</option>
                    @foreach($allSubcate as $itemListCate)
                    <option value="{{$itemListCate -> id}}"> {{$itemListCate -> sub_category_name}}</option>
                    @endforeach
                </select>
                @error('product_desc')
                <span style="color:red" >{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Trạng thái<span style="color:red" >*</span></label>
                <select class="form-select" name="status" aria-label="Default select example">
                    @if($proModel -> product_status == 1)
                        <option value="1" selected>Hiển thị</option>
                        <option value="0">Ẩn</option>
                    @else
                        <option value="0" selected>Ẩn</option>
                        <option value="1">Hiển thị</option>
                    @endif
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
                    <br />
                    <img width="100%" src="{{asset('clients/images/products')}}/{{$proModel->product_img}}" alt="{{$proModel->product_img}}">
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
