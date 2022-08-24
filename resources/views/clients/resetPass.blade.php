<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quên mật khẩu</title>
  </head>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('clients/css/login.css')}}">

  <link  rel="icon" type="image/x-icon" href="{{asset('clients/images/logo/logo_shophia.png')}}" />

  <style>
    .noteText {
        color: #c23564 !important;
    }

  </style>

  <body>
    <div class="container">
      <form method="post" id="signup">
        <div class="header">
          <h3 class="" >Quên mật khẩu</h3>
          <p class="noteText" style="color: #0d0a0b !important">Bạn quên mật khẩu? đừng quá lo lắng, hãy điền thông tin Email để lấy lại mật khẩu tài khoản.</p>
          @if(Session::has('updateErr'))
              <x-alert type="danger" value="{{Session::get('updateErr')}}" />
          @endif
          @if(Session::has('confirmErrr'))
              <x-alert type="danger" value="{{Session::get('confirmErrr')}}" />
          @endif
          @if(Session::has('codeErr'))
              <x-alert type="danger" value="{{Session::get('codeErr')}}" />
          @endif
        </div>
        <div class="sep"></div>
        <div class="inputs">
            <input class="email" type="email" name ="email" readonly placeholder="e-mail" value="@if(!empty($dataEmail)) {{$dataEmail}} @else {{'sdsdsd'}} @endif" autofocus />

            <input class="email" type="password" name ="pass" placeholder="Mật khẩu mới" value="{{old('password')}}" autofocus />
            @error('pass')
             <x-alert type="danger" value="{{$message}}" />
            @enderror
            <input class="email" type="password" name ="confirmPass" placeholder="Xác nhận mật khẩu mới" value="{{old('confirmPass')}}" autofocus />
            @error('confirmPass')
            <x-alert type="danger" value="{{$message}}" />
           @enderror
            <input class="email" type="text" name ="code" placeholder="Nhập mã xác nhận" value="{{old('code')}}" autofocus />
            @error('code')
             <x-alert type="danger" value="{{$message}}" />
            @enderror
          <x-button type="submit" value="Xác nhận Email" class="box__button-buy mt-2 mb-2" />

        </div>
        @csrf
      </form>
    </div>




  </body>

</html>
