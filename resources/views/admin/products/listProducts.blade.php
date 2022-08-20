@extends('layout.admin')
@section('title')
   Danh sách sản phẩm
@endsection

@section('content')
    <h2>Danh sách sản phẩm</h2>
    <a href="{{route('amin.products.addGet')}}"  class="btn btn-primary mb-2">Thêm mới</a>
        @if(Session::has('errorImg'))
            <x-alert type="danger" value="{{Session::get('errorImg')}}" />
        @endif
        @if(Session::has('updateSuccess'))
            <x-alert type="success" value="{{Session::get('updateSuccess')}}" />
        @endif
        @if(Session::has('deleteSuccess'))
            <x-alert type="success" value="{{Session::get('deleteSuccess')}}" />
        @endif
    <table class="table">
        <thead>
          <tr>
            {{-- <th scope="col">STT</th> --}}
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
            @foreach($dataList as $item)
                <tr>
                    {{-- <th style="vertical-align:middle" scope="row">1</th> --}}
                    <td style="vertical-align:middle"><a href="#">{{$item->product_name}}</a></td>
                    <td style="vertical-align:middle"><img style="width:70px" src="{{asset('clients/images/products/')}}/{{$item->product_img}}" alt="{{$item->product_img}}'"></td>
                    <td style="vertical-align:middle">{{$item->product_quantity}}</td>
                    <td style="vertical-align:middle">{{number_format($item->product_price,2)}} ₫</td>
                    <td style="vertical-align:middle">{{$item->product_price_discount}} %</td>
                    <td style="vertical-align:middle">
                        <select class="form-select proStatus" data-id = "{{$item->id}}" aria-label="Default select example">

                           @if($item->product_status == 1)
                            <option value ="1" selected>Hiển thị</option>
                            <option value ="0">Ẩn</option>
                           @else
                            <option selected value ="0">Ẩn</option>
                            <option value ="1" >Hiển thị</option>
                           @endif
                        </select>
                    </td>
                    <td style="vertical-align:middle"><a href="{{route('amin.products.update',$item->id)}}"><i title="cập nhật sản phẩm {{$item->product_name}}" class="fas fa-edit mr-2 edit__color"></i></a> <a href="{{route('amin.products.delete',['id'=>$item->id])}}" class="urlDeletePro"><i class="fas fa-backspace delete__color" title="xóa sản phẩm {{$item->product_name}}"></i></a></td>
                </tr>
            @endforeach


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
