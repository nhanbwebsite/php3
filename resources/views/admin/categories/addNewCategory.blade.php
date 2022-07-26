@extends('layout.admin')
@section('content')
    <form method="post">
        @if(Session::has('addSuccess'))
            <div class="alert alert-success text-center">{{Session::get('addSuccess')}}</div>
            @endif
            @error('msg')
                <div class="alert alert-danger text-center">
                    {{-- Thông báo khi có lỗi --}}
                    {{$message}}
                </div>
            @enderror
        @if(Session::has('success'))
          <div class="alert alert-success text-center">{{Session::get('success')}}</div>
        @endif
        <div class="mb-3">
            <label for="categoryName" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" name="category_name" id="categoryName" value="{{ old('category_name') }}" placeholder="Nhập tên danh mục sản phẩm" aria-describedby="emailHelp">
            @error('category_name')
                <span style="color:red" >{{$message}}</span>
             @enderror
        </div>
        <div class="mb-3">
            <select name="categoryParent" class="form-select" aria-label="Default select example">
                <option disabled selected>Chọn danh mục cha</option>
                @if(!empty($categoryParent))
                    @foreach($categoryParent as $item)
                         <option value="{{$item -> id}}">{{$item -> category_name}}</option>
                    @endforeach
                @endif
              </select>
              @error('categoryParent')
              <span style="color:red" >{{$message}}</span>
           @enderror
        </div>
        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
        @csrf
    </form>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $.get('http://127.0.0.1:8000/categoryAPI', function(data){
    })
</script>
