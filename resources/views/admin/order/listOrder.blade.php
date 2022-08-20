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
            <th scope="col" style="width:25%">Địa chỉ nhận hàng</th>
            <th scope="col">Ghi chú</th>
            <th scope="col text-center">Trạng thái</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @if(!empty($orderList))
                @foreach($orderList as $key => $itemOrder)


                    <tr>
                        <th style="vertical-align:middle" scope="row">{{++$key}}</th>
                        <td style="vertical-align:middle"><a href="#">{{$itemOrder->email}}</a></td>
                        <td style="vertical-align:middle">{{$itemOrder->fullname}}</td>
                        <td style="vertical-align:middle">{{$itemOrder->order_address}}</td>
                        <td style="vertical-align:middle">{{$itemOrder->order_note == null ? "Không" : $itemOrder->order_note  }}</td>
                        <td style="vertical-align:middle">
                            <select style="width:170px" class="form-select" aria-label="Default select example">
                                @if($itemOrder->order_status == 0)
                                     <option selected value="{{$itemOrder->order_status}}">Chờ xử lý</option>
                                     <option value="1" >Đang vận chuyển</option>
                                     <option value="2">Đã thanh toán</option>
                                     <option value="3">Đã hủy</option>
                                @elseif($itemOrder->order_status == 1)
                                     <option selected value="{{$itemOrder->order_status}}">Đanng vận chuyển</option>
                                     <option value="0" >Chờ xử lý</option>
                                     <option value="2">Đã thanh toán</option>
                                     <option value="3">Đã hủy</option>
                                @elseif($itemOrder->order_status == 2)
                                    <option selected disabled value="{{$itemOrder->order_status}}">Đã thanh toán</option>

                                    @elseif($itemOrder->order_status == 3)
                                    <option selected disabled value="{{$itemOrder->order_status}}">Đã hủy</option>
                                @endif

                              </select>
                        </td>
                        <td style="vertical-align:middle" title="Xem chi tiết đơn hàng"><i class="fas fa-info-circle edit__color"></i>  </td>
                      </tr>
                      @endforeach
            @endif
        </tbody>
    </table>
    {{$orderList -> links()}}
@endsection

{{-- css for this page --}}

@section('cssForThisPage')
    {{asset('admin/css/products/listProducts.css')}}"
@endsection
{{-- js for this page --}}
@section('jsForThisPage')
    {{asset('admin/js/products/listProducts.js')}}"
@endsection
