<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tạo mật khẩu mới</title>
  </head>
  <link rel="stylesheet" href="{{asset('clients/css/register.css')}}" />
  <link  rel="icon" type="image/x-icon" href="{{asset('clients/images/logo/logo_shophia.png')}}" />
  <body>
    <div class="container">
      <form  method="post" id="signup">
        <div class="header">
          <h3>Lấy lai mật khẩu</h3>
        </div>
        <div class="sep"></div>
        <div class="inputs">

          <input type="password" name = "password" placeholder="Mật khẩu *" />
          @error('confirm_password')
         <p> <font color="red">  {{$message}}</font></p>
         @enderror
          <input type="password" name = "confirm_password" placeholder="Nhập lại mật khẩu *" />
          @error('address')
         <p> <font color="red">  {{$message}}</font></p>
         <div class="box__btn">
            <a class="text-signup" href="/login">Xác nhận</a>
         </div>
        </div>
        @csrf
      </form>
    </div>
  </body>
</html>
