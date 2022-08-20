@extends('layout.admin')
@section('title')
   Thống kê sản phẩm theo danh mục
@endsection
@section('content')
    {{-- <h2>  Thống kê sản phẩm theo danh mục </h2> --}}

        <div id="chartProductsByCategory"></div>

@endsection

{{-- css for this page --}}

@section('cssForThisPage')
    {{asset('admin/css/products/listProducts.css')}}"
@endsection
{{-- js for this page --}}
@section('jsForThisPage')
    {{asset('admin/js/charts/chartPro.js')}}"
@endsection
