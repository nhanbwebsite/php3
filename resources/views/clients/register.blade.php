<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <link rel="stylesheet" href="{{asset('clients/css/register.css')}}" />
  <link  rel="icon" type="image/x-icon" href="{{asset('clients/images/logo/logo_shophia.png')}}" />
  <body>
    <div class="container">
      <form  method="post" id="signup">
        <div class="header">
          <h3>Đăng ký tài khoản</h3>
          <p> Trường có dấu (*) là bắt buộc nhập </p>
          @if(Session::has('emailExist'))
                <p style="color:red">{{Session::get('emailExist')}}</p>
          @endif
        </div>
        <div class="sep"></div>
        <div class="inputs">
            @error('fullname')
            <p> <font color="red">  {{$message}}</font></p>
            @enderror
          <input type="text" name = "fullname" value="{{old('fullname')}}" placeholder="Họ và tên *" />
          @error('email')
            <p> <font color="red">  {{$message}}</font></p>
         @enderror
          <input type="email" name ="email"  value="{{old('email')}}" placeholder="Địa chỉ e-mail *" autofocus />
          @error('password')
         <p> <font color="red">  {{$message}}</font></p>
         @enderror
          <input type="password" name = "password"  value="{{old('password')}}" placeholder="Mật khẩu *" />
          @error('confirm_password')
         <p> <font color="red">  {{$message}}</font></p>
         @enderror
          <input type="password" name = "confirm_password" value="{{old('confirm_password')}}" placeholder="Nhập lại mật khẩu *" />
          @error('address')
         <p> <font color="red">  {{$message}}</font></p>
         @enderror
          <input type="text" name = "address" value="{{old('address')}}" placeholder="Địa chỉ" />
          @error('phone')
         <p> <font color="red">  {{$message}}</font></p>
         @enderror
          <input type="text" name = "phone" value="{{old('phone')}}" placeholder="Số điện thoại" />
          <x-button type="submit" class="box__button-buy" value="Đăng ký"/>
          <br />
         <div class="box__btn">
            <a class="text-signup" href="/login"> Đăng nhập</a>
            <a class="text-signup text-trang-chu" href="/">Về trang chủ</a>
         </div>
        </div>
        @csrf
      </form>
    </div>
  </body>
</html>
