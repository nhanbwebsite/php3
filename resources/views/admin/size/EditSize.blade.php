@extends('layout.admin')
@section('content')
{{-- form thêm mới danh mục --}}
<form method="post" action="http://127.0.0.1:8000/admin/categories/edit/1">
      @if(!empty($category))
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">ID danh mục <span style="color:red" >*</span>  </label>
          <input type="text" class="form-control" id="category_id" name="sub_category_id" value = "{{$category[0] -> id_sub_category }}" >
          @error('category_id')
            <span style="color:red" >{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tên danh mục <span style="color:red" >*</span>  </label>
          <input type="text" class="form-control" id="category_name_edit" name="sub_category_name_edit" value = "{{$category[0] -> sub_category_name}}"  placeholder="Nhập tên danh mục">
        @error('category_name_edit')
            <span style="color:red" >{{$message}}</span>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Sửa danh mục</button>
        <a href="{{route('amin.category.list')}}" class="btn btn-info">Danh sách danh mục</a>
        @else
          <div class="alert alert-danger text-center"><h2>Không tim thấy danh mục, vui lòng kiểm tra lại</h2></div>
      @endif
      @csrf
</form>
@endsection
