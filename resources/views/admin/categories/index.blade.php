@extends('layout.admin')
@section('content')
    <h2>Danh sách danh mục</h2>
    <a class="btn btn-primary mb-2" href="{{route('amin.category.addGet')}}">Thêm mới</a>
    <table class="table">
        {{-- editSuccess --}}
       @if(Session::has('editSuccess'))
       <div class="alert alert-success" role="alert">
            {{Session::get('editSuccess')}}
      </div>
       @endif
       @if(Session::has('producstExist'))
       <div class="alert alert-danger" role="alert">
            {{Session::get('producstExist')}}
      </div>
       @endif
       {{-- delete alert --}}
       @if(Session::has('deleteSuccess'))
       <div class="alert alert-success" role="alert">
            {{Session::get('deleteSuccess')}}
      </div>
       @endif
        <thead>
            <tr>
              <th scope="col">STT</th>
              <th style="font-size:var(--font-size-20)" scope="col">Tên danh mục</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $key => $item)
                 <tr>
                    <td scope="row">{{++$key}}</td>
                    <td style="font-size:var(--font-size-20)"><a href="#">{{$item -> sub_category_name}}</a></td>
                    <td> <a href="{{route('admin.getEditCategory',['id' => $item -> id ])}}"><i class="fas fa-edit mr-2 edit__color " title="cập nhật danh mục"></i></a>  <a  href="{{route('admin.deleteCategory',['id'=>$item-> id])}}" class="deleteCategory"><i class="fas fa-backspace delete__color edittext" title="xóa danh mục {{$item -> sub_category_name}}"></i></a></td>
               </tr>
            @endforeach
          </tbody>
        </table>
        {{$categories -> links()}}
@endsection

@section('cssForThisPage')
    {{asset('admin/css/categories/categories.css')}}
@endsection
@section('jsForThisPage')
    {{asset('admin/js/categories/categories.js')}}
@endsection
