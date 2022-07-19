<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
      <form action ="/login" method="post" id="signup">
        <div class="header">
          <h3 class="" >Đăng nhập</h3>

          <p class="noteText">Điền thông tin đăng nhập</p>
        </div>

        <div class="sep"></div>

        <div class="inputs">
          <input class="email" type="email" name ="email" placeholder="e-mail" autofocus />

          <input class="pass" type="password" name = "password" placeholder="Password" />

          <div class="checkboxy">
            <input  id="checky" name ="saveLogin" value="1" type="checkbox" />
            <label for ="checky"
              class="terms"> Ghi nhớ thông tin đăng nhập </label>
          </div>

          <x-button type="submit" value="Đăng nhập" class="box__button-buy mt-2 mb-2" />
          <br />
         <div class="box__btn mb-3">
            <a class="text-signup" href="/register"> Đăng ký tài khoản</a>
            <a class="text-signup text-trang-chu" href="{{route('client.home')}}">Về trang chủ</a>
         </div>
         <br />
         <a class="text-signup mt-3" href="/quen-mk">Quên mật khẩu </a>
        </div>
        @csrf
      </form>
    </div>




  </body>
</html>
