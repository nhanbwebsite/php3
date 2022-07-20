@extends('layout.admin')
@section('title')
   Danh sách sản phẩm
@endsection

@section('content')
    <h2>Danh sách sản phẩm</h2>
@endsection

{{-- css for this page --}}

@section('cssForThisPage')
href="{{asset('admin/css/products/listProducts.css')}}"
@endsection
{{-- js for this page --}}
@section('jsForThisPage')
src="{{asset('admin/js/products/listProducts.js')}}"
@endsection
