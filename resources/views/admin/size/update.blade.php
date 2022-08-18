@extends('layout.admin')
@section('content')
    <form method="post">
        @if(Session::has('addSizeSucess'))
            <div class="alert alert-success text-center">{{Session::get('addSizesucess')}}</div>
        @endif
        @if(Session::has('addSizeFalse'))
            <div class="alert alert-success text-center">{{Session::get('addSizeFalse')}}</div>
        @endif
            @error('msg')
                <div class="alert alert-danger text-center">
                    {{-- Thông báo khi có lỗi --}}
                    {{$message}}
                </div>
            @enderror
        <div class="mb-3">
            <label for="categoryName" class="form-label">Size <font color="red">*</font> </label>
            <input type="text" class="form-control" name="size" id="size" value="{{$sizeById->size}}" placeholder="Nhập tên danh mục sản phẩm" aria-describedby="emailHelp">
            @error('size')
                <span style="color:red" >{{$message}}</span>
             @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        @csrf
    </form>
@endsection
