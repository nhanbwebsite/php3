@extends('layout.admin')
@section('content')
    <h2>Danh sách danh mục</h2>
    <table class="table">
        <thead>
            <tr>
              <th scope="col">STT</th>
              <th style="font-size:var(--font-size-20)" scope="col">Tên danh mục</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">1</td>
              <td style="font-size:var(--font-size-20)"><a href="#">Nam</a></td>
              <td><i class="fas fa-edit mr-2 edit__color" title="cập nhật danh mục"></i> <i class="fas fa-backspace delete__color" title="xóa danh mục"></i></td>
            </tr>
            <tr>
              <td scope="row">2</td>
              <td style="font-size:var(--font-size-20)"><a href="#">Nữ</a></td>
              <td><i class="fas fa-edit mr-2 edit__color" title="cập nhật danh mục"></i> <i class="fas fa-backspace delete__color" title="xóa danh mục"></i></td>
            </tr>
            <tr>
              <td scope="row">3</td>
              <td style="font-size:var(--font-size-20)"><a href="#">Giảm giá</a></td>
              <td><i class="fas fa-edit mr-2 edit__color" title="cập nhật danh mục"></i> <i class="fas fa-backspace delete__color" title="xóa danh mục"></i></td>
            </tr>
          </tbody>
    </table>
@endsection

@section('cssForThisPage')
    {{asset('admin/css/categories/categories.css')}}
@endsection
@section('jsForThisPage')
    {{asset('admin/js/categories/categories.js')}}
@endsection
