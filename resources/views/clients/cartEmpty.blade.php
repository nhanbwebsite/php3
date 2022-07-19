@extends('layout.clients')

{{-- banner --}}
@section('banner') @endsection
{{-- end banner --}}

{{-- content --}}

@section('content')

    <div class="keep__the-size">
        <div class="box__cartEmty">
            <img src="{{asset('clients/images/cart/empty_cart_retina.png')}}" alt="">
            <h3 class="box__cartEmty-title">GIỎ HÀNG TRỐNG</h3>
            <p class="box__cartEmty-text">Bạn không có sản phẩm nào trong giỏ hàng</p>
        <form action="/" >
            <x-button type="submit" value="Tiếp tục mua sắm" class="box__button-buy" />
        </form>
        </div>
    </div>

@endsection

{{-- end content --}}


{{-- news --}}
@section('news') @endsection

{{-- css for page --}}
@section('cssForPage')
{{asset('clients/css/cart.css')}}
@endsection
{{-- end css for page -->}}

{{-- js for page --}}
@section('jsForPage')
{{asset('clients/js/cart.js')}}
@endsection
{{-- end js for page --}}
