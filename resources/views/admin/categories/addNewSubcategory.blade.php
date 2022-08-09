@extends('layout.admin')
@section('content')
    <form method="post">
        @if(Session::has('addSuccess'))
            <div class="alert alert-success text-center">{{Session::get('addSuccess')}}</div>
            @endif
            @error('msg')
                <div class="alert alert-danger text-center">
                    {{-- Thông báo khi có lỗi --}}
                    {{$message}}
                </div>
            @enderror
        @if(Session::has('success'))
          <div class="alert alert-success text-center">{{Session::get('success')}}</div>
        @endif
        <div class="mb-3">
            <label for="categoryName" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" name="category_name" id="categoryName" value="{{ old('category_name') }}" placeholder="Nhập tên danh mục sản phẩm" aria-describedby="emailHelp">
            @error('category_name')
                <span style="color:red" >{{$message}}</span>
             @enderror
        </div>
        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
        @csrf
    </form>
@endsection
