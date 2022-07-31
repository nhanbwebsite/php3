@extends('layout.admin')

@section('content')
{{-- form thêm mới danh mục --}}
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
    {{-- Thông báo khi có lỗi dữ liệu --}}
    @if(Session::has('error'))
         <div class="alert alert-danger text-center">{{Session::get('error')}}</div>
    @endif
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tên danh mục <span style="color:red" >*</span>  </label>
      <input type="text" class="form-control" id="category_name" name="category_name" value = "{{ old('category_name') ?? $dataCategory->category_name }}"  placeholder="Nhập tên danh mục">
    @error('category_name')
        <span style="color:red" >{{$message}}</span>
    @enderror
    </div>

    <button type="submit" class="btn btn-primary">Sửa danh mục</button>
    <a href="{{route('admin.listCategories')}}" class="btn btn-info">Danh sách danh mục</a>
  @csrf
</form>


@endsection
