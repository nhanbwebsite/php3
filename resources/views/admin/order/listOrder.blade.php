@extends('layout.admin')
@section('title')
   Danh sách đặt hàng
@endsection
@section('content')
    <h2>  Danh sách đặt hàng</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên tài khoản</th>
            <th scope="col">Tên người nhận</th>
            <th scope="col">Địa chỉ nhận hàng</th>
            <th scope="col text-center">Trạng thái</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th style="vertical-align:middle" scope="row">1</th>
            <td style="vertical-align:middle"><a href="#">nhanbpc01368</a></td>
            <td style="vertical-align:middle">Nguyễn Bá Nha</td>
            <td style="vertical-align:middle">132 - Ninh Kiều - cần Thơ</td>
            <td style="vertical-align:middle">
                <select style="width:170px" class="form-select" aria-label="Default select example">
                    <option selected>Chờ xử lý</option>
                    <option >Đang vận chuyển</option>
                    <option >Đã thanh toán</option>
                    <option >Đã hủy</option>
                  </select>
            </td>
            <td style="vertical-align:middle" title="Xem chi tiết đơn hàng"><i class="fas fa-info-circle edit__color"></i>  </td>
          </tr>
          <tr>
            <th style="vertical-align:middle" scope="row">2</th>
            <td style="vertical-align:middle"><a href="#">khachhang2</a></td>
            <td style="vertical-align:middle">Nguyễn Văn A</td>
            <td style="vertical-align:middle">32 - Ninh Kiều - cần Thơ</td>
            <td style="vertical-align:middle">
                <select style="width:170px" class="form-select" aria-label="Default select example">
                    <option selected>Đang vận chuyển</option>
                    <option >Chờ xử lý </option>
                    <option >Đã thanh toán</option>
                    <option >Đã hủy</option>
                  </select>
            </td>
            <td style="vertical-align:middle" title="Xem chi tiết đơn hàng"><i class="fas fa-info-circle edit__color"></i>  </td>
          </tr>
          <tr>
            <th style="vertical-align:middle" scope="row">3</th>
            <td style="vertical-align:middle"><a href="#">datga</a></td>
            <td style="vertical-align:middle">Trần Thị T</td>
            <td style="vertical-align:middle">Long Mỹ - Hậu Giang</td>
            <td style="vertical-align:middle">
                <select disabled style="width:170px" class="form-select" aria-label="Default select example">
                    <option selected>Đã thanh toán</option>
                  </select>
            </td>
            <td style="vertical-align:middle" title="Xem chi tiết đơn hàng"><i class="fas fa-info-circle edit__color"></i>  </td>
          </tr>
          <tr>
            <th style="vertical-align:middle" scope="row">4</th>
            <td style="vertical-align:middle"><a href="#">khachhang3</a></td>
            <td style="vertical-align:middle">Nguyễn Văn B</td>
            <td style="vertical-align:middle">Long Mỹ - Hậu Giang</td>
            <td style="vertical-align:middle">
                <select disabled style="width:170px" class="form-select" aria-label="Default select example">
                    <option selected>Đã hủy</option>
                  </select>
            </td>
            <td style="vertical-align:middle" title="Xem chi tiết đơn hàng"><i class="fas fa-info-circle edit__color"></i>  </td>
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
