@extends('layout.admin')
@section('title')
   Thống kê sản phẩm bán được
@endsection
@section('content')
    {{-- <h2>  Thống kê sản phẩm theo danh mục </h2> --}}

        <div id="chartProductsByOrder"></div>

@endsection

{{-- css for this page --}}

@section('cssForThisPage')
    {{asset('admin/css/products/listProducts.css')}}"
@endsection
{{-- js for this page --}}
@section('jsForThisPage')
    {{asset('admin/js/charts/chartProByOrder.js')}}"
@endsection
