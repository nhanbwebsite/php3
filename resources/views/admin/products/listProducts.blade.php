@extends('layout.admin')
@section('title')
   Danh sách sản phẩm
@endsection

@section('content')
    <h2>Danh sách sản phẩm</h2>
    <a href="{{route('amin.products.addGet')}}"  class="btn btn-primary mb-2">Thêm mới</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col text-center">Ảnh</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá sản phẩm</th>
            <th scope="col">% giảm giá</th>
            <th scope="col">Trạng thái</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th style="vertical-align:middle" scope="row">1</th>
            <td style="vertical-align:middle"><a href="#">ÁO THUN NAM PAPA</a></td>
            <td style="vertical-align:middle"><img style="width:70px" src="{{asset('clients/images/products/5.jpg')}}" alt=""></td>
            <td style="vertical-align:middle">10</td>
            <td style="vertical-align:middle">200.000 ₫</td>
            <td style="vertical-align:middle">10 %</td>
            <td style="vertical-align:middle">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Hiển thị</option>
                    <option >Ẩn</option>

                  </select>
            </td>
            <td style="vertical-align:middle"><i title="cập nhật sản phẩm" class="fas fa-edit mr-2 edit__color"></i> <i class="fas fa-backspace delete__color" title="xóa sản phẩm"></i></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" scope="row">2</th>
            <td style="vertical-align:middle"><a href="#">ÁO THUN NAM BASE 2 </a></td>
            <td style="vertical-align:middle"><img style="width:70px" src="{{asset('clients/images/products/4.jpg')}}" alt=""></td>
            <td style="vertical-align:middle">20</td>
            <td style="vertical-align:middle">200.000 ₫</td>
            <td style="vertical-align:middle">0 %</td>
            <td style="vertical-align:middle">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Hiển thị</option>
                    <option >Ẩn</option>

                  </select>
            </td>
            <td style="vertical-align:middle"><i title="cập nhật sản phẩm" class="fas fa-edit mr-2 edit__color"></i> <i class="fas fa-backspace delete__color" title="xóa sản phẩm"></i></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" scope="row">3</th>
            <td style="vertical-align:middle"><a href="#">ÁO THUN NAM CỔ TRÒN BASE</a></td>
            <td style="vertical-align:middle"><img style="width:70px" src="{{asset('clients/images/products/3.jpg')}}" alt=""></td>
            <td style="vertical-align:middle">50</td>
            <td style="vertical-align:middle">200.000 ₫</td>
            <td style="vertical-align:middle">0 %</td>
            <td style="vertical-align:middle">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Ẩn</option>
                    <option >Hiển thị</option>

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
