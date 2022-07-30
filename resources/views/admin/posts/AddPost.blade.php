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
      <label for="exampleInputPassword1" class="form-label">Tên bài viết <span style="color:red" >*</span>  </label>
      <input type="text" class="form-control" id="" name="product_name" value = "{{ old('product_name') }}"  placeholder="Nhập tên sản phẩm">
    @error('product_post')
        <span style="color:red" >{{$message}}</span>
    @enderror
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Nội dung bài viết<span style="color:red" >*</span></label>
        <textarea class="form-control" id="editorPost" rows="3"></textarea>
        @error('post_content')
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
{{asset('admin/css/posts/add.css')}}"
@endsection

{{-- js for this page --}}
@section('jsForThisPage')
{{asset('admin/js/posts/add.js')}}"
@endsection

