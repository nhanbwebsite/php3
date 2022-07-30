@extends('layout.admin')
@section('title')
   Danh sách người dùng
@endsection

@section('content')
    <h2>Danh sách người dùng</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên tài khoản</th>
            <th scope="col">Vai trò</th>
            <th scope="col">Hình</th>
            <th scope="col text-center">Địa chỉ</th>
            <th scope="col text-center">Trạng thái</th>

            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th style="vertical-align:middle" scope="row">1</th>
            <td style="vertical-align:middle"><a href="#">nhanbpc01368</a></td>
            <td style="vertical-align:middle">Root</td>
            <td style="vertical-align:middle"><img style="width:70px" src="{{asset('clients/images/user/1.png')}}" alt=""></td>
            <td style="vertical-align:middle"> Long Mỹ - Hậu Giang</td>
            <td style="vertical-align:middle">
                <select style="width:150px" class="form-select" aria-label="Default select example">
                    <option selected>Hiển thị</option>
                    <option >Ẩn</option>

                  </select>
            </td>
            <td style="vertical-align:middle"><i title="cập nhật sản phẩm" class="fas fa-edit mr-2 edit__color"></i> <i class="fas fa-backspace delete__color" title="xóa sản phẩm"></i></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" scope="row">2</th>
            <td style="vertical-align:middle"><a href="#">admin1</a></td>
            <td style="vertical-align:middle"> Admin</td>
            <td style="vertical-align:middle"><img style="width:70px" src="{{asset('clients/images/user/1.png')}}" alt=""></td>
            <td style="vertical-align:middle"> 195 - Nguyễn Tri Phương</td>
            <td style="vertical-align:middle">
                <select style="width:150px" class="form-select" aria-label="Default select example">
                    <option selected>Hiển thị</option>
                    <option >Ẩn</option>

                  </select>
            </td>
            <td style="vertical-align:middle"><i title="cập nhật sản phẩm" class="fas fa-edit mr-2 edit__color"></i> <i class="fas fa-backspace delete__color" title="xóa sản phẩm"></i></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" scope="row">3</th>
            <td style="vertical-align:middle"><a href="#">Client_1</a></td>
            <td style="vertical-align:middle"> Khách hàng</td>
            <td style="vertical-align:middle"><img style="width:70px" src="{{asset('clients/images/user/1.png')}}" alt=""></td>
            <td style="vertical-align:middle"> 195 - Trần Hoàng Na</td>
            <td style="vertical-align:middle">
                <select style="width:150px" class="form-select" aria-label="Default select example">
                    <option selected>Hiển thị</option>
                    <option >Ẩn</option>

                  </select>
            </td>
            <td style="vertical-align:middle"><i title="cập nhật sản phẩm" class="fas fa-edit mr-2 edit__color"></i> <i class="fas fa-backspace delete__color" title="xóa sản phẩm"></i></td>
          </tr>

        </tbody>
      </table>
@endsection

{{-- css for this page --}}

@section('cssForThisPage')
    {{asset('admin/css/products/listProducts.css')}}"
@endsection
{{-- js for this page --}}
@section('jsForThisPage')
    {{asset('admin/js/products/listProducts.js')}}"
@endsection
