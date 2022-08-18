@extends('layout.admin')
@section('content')
    <form method="post">

        @if(Session::has('addSizeSucess'))
        <div class="alert alert-success" role="alert">
             {{Session::get('addSizeSucess')}}
       </div>
        @endif
        @if(Session::has('addSizeFalse'))
        <div class="alert alert-success" role="alert">
             {{Session::get('addSizeFalse')}}
       </div>
        @endif
            @error('msg')
                <div class="alert alert-danger text-center">
                    {{-- Thông báo khi có lỗi --}}
                    {{$message}}
                </div>
            @enderror
        <div class="mb-3">
            <label for="categoryName" class="form-label">Size <font color="red">*</font> </label>
            <input type="text" class="form-control" name="size" id="size" value="{{ old('size') }}" placeholder="Nhập tên danh mục sản phẩm" aria-describedby="emailHelp">
            @error('size')
                <span style="color:red" >{{$message}}</span>
             @enderror
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        @csrf
    </form>
@endsection
