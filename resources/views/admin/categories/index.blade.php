@extends('layout.admin')

@section('content')
@if(Session::has('error'))
        <div class="alert alert-danger text-center">{{Session::get('error')}}</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success text-center">{{Session::get('success')}}</div>
@endif
{{-- thông báo Xóa --}}
@if(Session::has('deleteSuccess'))
<div class="alert alert-success text-center">{{Session::get('deleteSuccess')}}</div>
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên danh mục</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody id="tbody">
        @if(!empty($dataList))
            @foreach($dataList as $key => $item)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td class="categories_name" >{{$item->category_name}}</td>
                <td ><button data-id="{{$item->id}}" class="btn btn-danger btnDelete" data-bs-toggle="modal" data-bs-target="#exampleModal">Xóa</button> <a href = "{{route('admin.categories.getEdit',['id' => $item->id])}}" class="btn btn-warning">Sửa</a></td>
            </tr>
            @endforeach
        @endif

    </tbody>
  </table>

@endsection

{{-- css for this page --}}
<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Xóa danh mục sản phẩm</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
          <a  type="button" class="btn btn-primary btn-confirm_delete">Xác nhận xóa</a>
        </div>
      </div>
    </div>
  </div>

  {{-- {{route('admin.categories.deleteCategory',['id' => $item->id])}} --}}
  @section('jsForThisPage')
  src="{{asset('admin/js/categories/index.js')}}"
  @endsection
