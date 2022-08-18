@extends('layout.admin')
@section('content')
    <h2>Danh sách size sản phẩm</h2>
    <a class="btn btn-primary mb-2" href="{{route('amin.size.addGet')}}">Thêm mới</a>
    <table class="table">
        {{-- editSuccess --}}
       @if(Session::has('updateSuccess'))
       <div class="alert alert-success" role="alert">
            {{Session::get('updateSuccess')}}
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
              <th style="font-size:var(--font-size-20)" scope="col">Tên size</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @forelse($listSzie as $key => $item)
                 <tr>
                    <td scope="row">{{++$key}}</td>
                    <td style="font-size:var(--font-size-20)"><a href="#">{{$item -> size}}</a></td>
                    <td> <a href="{{route('amin.size.updateGet',['id' => $item -> id ])}}"><i class="fas fa-edit mr-2 edit__color " title="cập nhật size"></i></a>  <a  href="{{route('admin.size.delete',['id'=>$item-> id])}}" class="urlDeleteSize"><i class="fas fa-backspace delete__color edittext" title="xóa size {{$item -> size}}"></i></a></td>
               </tr>
               @empty
               <h2>Không có size để hiển thị</h2>
            @endforelse
          </tbody>
        </table>
        {{$listSzie -> links()}}
@endsection

@section('cssForThisPage')
    {{asset('admin/css/categories/categories.css')}}
@endsection
@section('jsForThisPage')
    {{asset('admin/js/size/listSize.js')}}
@endsection
