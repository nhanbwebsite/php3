@extends('layout.admin')
@section('title')
   Danh sách người dùng
@endsection

@section('content')
    <h2>Danh sách người dùng</h2>
    @if(Session::has('updateSucess'))
    <x-alert type="success" value="{{Session::get('updateSucess')}}" />
    @endif
    @if(Session::has('deleteSuccess'))
    <x-alert type="success" value="{{Session::get('deleteSuccess')}}" />
    @endif
    @if(Session::has('addSuccess'))
    <x-alert type="success" value="{{Session::get('addSuccess')}}" />
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Email</th>
            <th scope="col">Điện thoại</th>
            <th scope="col text-center">Địa chỉ</th>
            <th scope="col">Vai trò</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse($listUser as $key => $item)
                <tr>
                    <td style="vertical-align:middle"><a href="#">{{$item->fullname}}</a></td>
                    <td style="vertical-align:middle"><a href="#">{{$item->email}}</a></td>
                    <td style="vertical-align:middle">{{$item->phone}}</td>
                    <td style="vertical-align:middle"> {{$item->address}}</td>
                    <td style="vertical-align:middle">
                        @if($item->role == 0)
                            {{'Root'}}
                        @elseif($item->role == 1)
                        {{'Admin'}}
                        @else
                        {{'Khách hàng'}}
                        @endif
                    </td>
                    <td style="vertical-align:middle">
                        @if($item->role == 0)
                        ========
                        @elseif($item->role==1 || $item->role==2)
                        <a href="{{route('amin.user.updateGet',['id'=>$item->id])}}"><i title="cập nhật sản phẩm" class="fas fa-edit mr-2 edit__color"></i></a>
                        <a href="{{route('amin.user.delete',['id'=>$item->id])}}" class="linkDeleteUser"> <i class="fas fa-backspace delete__color" title="xóa user {{$item->email}}"></i></a>
                    </td>
                    @endif
                </tr>
            @empty
            <h3>Danh sách user trống</h3>
            @endforelse
        </tbody>
      </table>
@endsection

{{-- css for this page --}}

@section('cssForThisPage')
    {{asset('admin/css/products/listProducts.css')}}"
@endsection
{{-- js for this page --}}
@section('jsForThisPage')
    {{asset('admin/js/user/list.js')}}"
@endsection
