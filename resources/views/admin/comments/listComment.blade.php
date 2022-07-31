@extends('layout.admin')
@section('content')
    <h2>Danh sách bình luận</h2>
    <table class="table">
        <thead>

            <tr>
                <th scope="col">STT</th>
                <th  scope="col">Tên tài khoản</th>
                <th  scope="col">Nội dung</th>
                <th scope="col">Thời gian bình luận</th>
                <th scope="col">Trạng thái</th>
                <th scope="col"></th>
              </tr>
        </thead>

            <tr>
              <td scope="row">1</td>
              <td>nhanbpoc01368</td>
              <td>Sản phẩm rất tốt</td>
              <td>28/07/2022</td>
              <td>
                <select style="width:150px" class="form-select" aria-label="Default select example">
                    <option selected>Chờ xét duyệt</option>
                    <option >Đã kích hoạt</option>
                  </select>
              </td>
              <td><i class="fas fa-backspace delete__color" title="xóa bình luận"></i></td>
            </tr>
            <tr>
              <td scope="row">2</td>
              <td>nguyenbanha</td>
              <td>Sản phẩm rất tốt</td>
              <td>25/07/2022</td>
              <td>
                <select style="width:150px" class="form-select" aria-label="Default select example">
                    <option selected>Đã kích hoạt</option>
                    <option >Chờ xét duyệt</option>
                  </select>
              </td>
              <td><i class="fas fa-backspace delete__color" title="xóa bình luận"></i></td>
            </tr>


    </table>
@endsection

@section('cssForThisPage')
    {{asset('admin/css/categories/categories.css')}}
@endsection
@section('jsForThisPage')
    {{asset('admin/js/categories/categories.js')}}
@endsection
