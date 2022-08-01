@extends('layout.admin')

@section('content')
{{-- form thêm mới danh mục --}}
<form method="post">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ID danh mục <span style="color:red" >*</span>  </label>
      <input type="text" class="form-control" id="category_id" name="category_id" value = "{{$category -> id}}" >
      @error('category_id')
         <span style="color:red" >{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tên danh mục <span style="color:red" >*</span>  </label>
      <input type="text" class="form-control" id="category_name" name="category_name" value = "{{$category -> category_name}}"  placeholder="Nhập tên danh mục">
    @error('category_name')
        <span style="color:red" >{{$message}}</span>
    @enderror
    </div>

    <button type="submit" class="btn btn-primary">Sửa danh mục</button>
    <a href="{{route('admin.listCategories')}}" class="btn btn-info">Danh sách danh mục</a>
  @csrf
</form>


@endsection
