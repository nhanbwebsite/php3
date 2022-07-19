<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <link rel="stylesheet" href="{{asset('clients/css/register.css')}}" />
  <link  rel="icon" type="image/x-icon" href="{{asset('clients/images/logo/logo_shophia.png')}}" />
  <body>
    <div class="container">
      <form action ="/register" method="post" id="signup">
        <div class="header">
          <h3>Đăng ký tài khoản</h3>

          <p> Trường có dấu (*) là bắt buộc nhập </p>
        </div>

        <div class="sep"></div>

        <div class="inputs">
          <input type="text" name = "ho_ten" placeholder="Họ và tên *" />
          <input type="email" name ="email" placeholder="Địa chỉ e-mail *" autofocus />
          <input type="password" name = "password" placeholder="Mật khẩu *" />
          <input type="password" name = "confirm_password" placeholder="Nhập lại mật khẩu *" />
          <input type="text" name = "dia_chi" placeholder="Địa chỉ" />
          <input type="text" name = "sdt" placeholder="Số điện thoại" />
          <x-button type="button" class="box__button-buy" value="Đăng ký"/>
          <br />
         <div class="box__btn">
            <a class="text-signup" href="/login"> Đăng nhập</a>
            <a class="text-signup text-trang-chu" href="/">Về trang chủ</a>
         </div>
        </div>
      </form>
    </div>
  </body>
</html>
