@extends('layout.admin')
@section('content')
    <form method="post">
        <div class="mb-3">
            <label for="categoryName" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" id="categoryName" placeholder="Nhập tên danh mục sản phẩm" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
        @csrf
    </form>
@endsection
