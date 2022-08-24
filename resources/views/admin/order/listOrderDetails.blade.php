@extends('layout.admin')
@section('title')
 Chi tiết hóa đơn
@endsection
@section('content')
    <h2>  Chi tiết hóa đơn</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá</th>
            <th scope="col">Thành tiền</th>
          </tr>
        </thead>
        <tbody>

                @php
                    $tong = 0;
                @endphp
                @foreach($listOrderDetails as $key => $itemOrder)

                    {{-- {{dd($itemOrder)}} --}}
                    <tr>
                        <th scope="col">{{++$key}}</th>
                        <th scope="col">{{$itemOrder->product_name}}</th>
                        <th scope="col">{{$itemOrder->order_detail_quantity}}</th>
                        <th scope="col">{{$itemOrder->order_details_pro_price}}</th>
                        <th scope="col">{{number_format($itemOrder->order_details_pro_price * $itemOrder->order_detail_quantity)}}</th>
                    </tr>
                      @endforeach

        </tbody>
    </table>
    {{-- {{$orderList -> links()}} --}}
@endsection

{{-- css for this page --}}

@section('cssForThisPage')
    {{asset('admin/css/products/listProducts.css')}}"
@endsection
{{-- js for this page --}}
@section('jsForThisPage')
    {{asset('admin/js/order/order.js')}}"
@endsection

