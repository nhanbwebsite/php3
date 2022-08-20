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
          @if(Session::has('errorEmailExist'))
              <x-alert type="danger" value="{{Session::get('errorEmailExist')}}" />
          @endif

        </div>

        <div class="sep"></div>

        <div class="inputs">
            <input class="email" type="email" name ="email" placeholder="e-mail" value="{{old('email')}}" autofocus />
            @error('email')
             <font color="red">  {{$message}}</font>
            @enderror
          <x-button type="submit" value="Xác nhận Email" class="box__button-buy mt-2 mb-2" />


        </div>
        @csrf
      </form>
    </div>




  </body>

</html>
