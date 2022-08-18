@php
     use App\Models\clients\Category;
    $cate = new Category();
    $cateSubList = $cate->getCategory_nam();
    $cateSubGList = $cate ->getSubCategory_nu();
@endphp
<div class="logo__and-nav">
    <div class="logo">
        {{-- <a href="#">  <img src="{{asset('clients/images/logo/logo.png')}}" alt="Logo"></a> --}}
        <a href="{{route('client.home')}}">  <img src="{{asset('clients/images/logo/logo_shophia.png')}}" alt="Logo"></a>
   </div>
   <ul class="menu upperCase">
       <li class="menu__item bold">
           <a href="{{route('client.home')}}">Trang chủ</a>
       </li>
       <li class="menu__item bold">
        <a href="#" class="menu__child-list-link">Nam</a>
            <div class="menu__child">
                <ul class="menu__child-list font-normal">
                  @foreach($cateSubList as $item)
                  <li class = "menu__child-list-item">
                    <a href="{{route('client.productsByCategory',['id' => $item->id])}}" class="menu__child-list-link" >{{$item->sub_category_name}}</a>
                </li>
                  @endforeach
                </ul>
            </div>
        </li>
       <li class="menu__item bold">
           <a href="#" class="menu__child-list-link">Nữ</a>
           <div class="menu__child">
               <ul class="menu__child-list font-normal">
                @foreach($cateSubGList as $item)
                  <li class = "menu__child-list-item">
                    <a href="{{route('client.productsByCategory',['id' => $item->id])}}" class="menu__child-list-link" >{{$item->sub_category_name}}</a>
                </li>
                  @endforeach
               </ul>
           </div>

       </li>
{{-- seller --}}
       <li class="menu__item item-seller">
           <a href="#"><img class="item__sell-imgSeller" src="{{asset('clients/images/seller/seller2.png')}}" alt=""></a>
       </li>
       <li class="menu__item bold">
           <a href="{{route('client.news')}}">Bài viết</a>
       </li>
       <li class="menu__item bold">
           <form class="menu__search" >
               <input class="menu__item-search" placeholder="Tìm sản phẩm" type="search">
           </form>
       </li>
       {{-- <li class="menu__item bold">
           <a href="#">Trợ giúp</a>
       </li> --}}

       <li class="menu__item bold">
            @if(Session::has('user'))
                <span class="d-block btn btn-secondary dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(Session::has('user'))
                        {{Session::get('user')['fullname']}}
                    @endif
                </span>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" style="font-size:14px" href="{{route('amin.user.updateGet',['id' => Session::get('user')['id']])}}">Cập nhật tài khoản</a></li>
                    <span hidden id="u_id">{{Session::get('user')['id']}}</span>
                    @if(Session::has('user'))
                        @if(Session::get('user')['role']== 0 ||Session::get('user')['role']== 1 )
                            <li><a class="dropdown-item" style="font-size:14px" href="{{route('amin.products.list')}}">Khu vực quản trị</a></li>
                        @endif
                    @endif
                    <li><a class="dropdown-item" style="font-size:14px" href="{{route('logout')}}">Đăng xuất</a></li>
                  </ul>
                @else
                <a href="{{route('client.login')}}">Đăng nhập</a>
            @endif
       </li>
       <li class="menu__item bold">
           <span class="cart__text">Giỏ hàng (0)</span>
       </li>
       <div class="line"></div>
   </ul>
{{-- mega menu --}}
   <div class="mega__menu">
    <i class="fa-solid fa-bars icon__bar-megamenu" id="icon__bar-megamenu"></i>
    <ul class="mega__menu-item">
        <li class="menu__item bold">
            <form class="menu__search" >
                <input class="menu__item-search" placeholder="Tìm sản phẩm" type="search">
            </form>
        </li>
        <li class="menu__item bold giohang_mega">
            <span class="cart__text">Giỏ hàng (0)</span>
        </li>
   </ul>
   <div class="submenuMega">
    <ul class="submenuMega-item">

        {{-- sub mega list --}}
        <li class="menu__item bold">
            <a href="#" >Nam</a>
            <div class="menu__child">
                    <ul class="menu__child-list font-normal">
                        <li class = "menu__child-list-item">
                            <a href="#" class="menu__child-list-link">Áo nam</a>
                            <div class="menu__child-list-sub">
                                <ul class="menu__child-sub-list">
                                    <li class="menu__child-sub-item">
                                        <a href="#">Xem tất cả</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo polo nam</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo thun tay ngắn</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo thun tay dày</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo thun tay dày</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo sơ mi tay ngắn</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo sơ mi tay dài</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Áo khoát</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class = "menu__child-list-item">
                            <a href="#" class="menu__child-list-link">Quần nam</a>
                            <div class="menu__child-list-sub">
                                <ul class="menu__child-sub-list">
                                    <li class="menu__child-sub-item">
                                        <a href="#">Xem tất cả</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Quần jean nam</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Quần kaki nam</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Quần short nam</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class = "menu__child-list-item">
                            <a href="#" class="menu__child-list-link">Phụ kiện</a>
                            <div class="menu__child-list-sub">
                                <ul class="menu__child-sub-list">
                                    <li class="menu__child-sub-item">
                                        <a href="#">thắt lưng</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">Ví/Balo</a>
                                    </li>
                                    <li class="menu__child-sub-item">
                                        <a href="#">giày dép</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class = "menu__child-list-item">
                            <a href="#" class="menu__child-list-link">Giảm giá</a>
                        </li>
                    </ul>
            </div>

        </li>

        {{--  --}}
        <li class="menu__item bold">
            <span  class="menu__child-list-link">Nữ</span>
            <div class="menu__child">
                <ul class="menu__child-list font-normal">
                    <li class = "menu__child-list-item">
                        <a href="#" class="menu__child-list-link" >Áo nữ</a>
                        <div class="menu__child-list-sub">
                            <ul class="menu__child-sub-list">
                                <li class="menu__child-sub-item">
                                    <a href="#">Xem tất cả</a>
                                </li>
                                <li class="menu__child-sub-item">
                                    <a href="#">Áo thun nữ</a>
                                </li>
                                <li class="menu__child-sub-item">
                                    <a href="#">Áo sơ mi tay ngắn</a>
                                </li>
                                <li class="menu__child-sub-item">
                                    <a href="#">Áo sơ mi tay dài</a>
                                </li>
                                <li class="menu__child-sub-item">
                                    <a href="#">Áo khoát</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class = "menu__child-list-item">
                        <a href="#" class="menu__child-list-link">Quần nữ</a>
                        <div class="menu__child-list-sub">
                            <ul class="menu__child-sub-list">
                                <li class="menu__child-sub-item">
                                    <a href="#">Xem tất cả</a>
                                </li>
                                <li class="menu__child-sub-item">
                                    <a href="#">Quần jean nữ</a>
                                </li>
                                <li class="menu__child-sub-item">
                                    <a href="#">quần kaki nữ</a>
                                </li>
                                <li class="menu__child-sub-item">
                                    <a href="#">quần short nữ</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class = "menu__child-list-item">
                        <a href="#" class="menu__child-list-link">váy/đầm nữ</a>
                        <div class="menu__child-list-sub">
                            <ul class="menu__child-sub-list">

                                <li class="menu__child-sub-item">
                                    <a href="#">chân váy</a>
                                </li>
                                <li class="menu__child-sub-item">
                                    <a href="#">đầm nữ</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class = "menu__child-list-item">
                        <a href="#" class="menu__child-list-link">Giảm giá</a>
                    </li>
                </ul>
        </div>
        {{--  --}}
        <li class="menu__item item-seller">
            <a href="#"><img class="item__sell-imgSeller" src="{{asset('clients/images/seller/seller2.png')}}" alt=""></a>
        </li>
        {{--  --}}
        <li class="menu__item bold">
            <a href="#">Tin tức</a>
        </li>
    </ul>
</div>
   </div>
</div>

<!-- Cart  -->
<div class="cart__pc" id="cart__pc">
    <div class="cart__item">
       <div class="box__title-among">
           <div class="cart__title-text">
            <a href="#" class="cart__title" >Giỏ hàng</a>
           </div>
            <div class="cart__amount-total">
                <span>0 sản phẩm</span>
                <span class="cart__Float-total"></span>
            </div>
       </div>
       <div class="cart__item_cartLoadA">

           {{-- <div class="box__products-cart mt-5">
            <div class="row">
                <div class="col-3">
                   <img src="{{asset('clients/images/products/Father_s_Day_mockupfott.jpg')}}" alt="">
                </div>
                <div class="col-9">
                   <div class="box__products-title-cartFloat">
                    <a href="#"> Áo thun nam tay ngắn - 10S22POL38</a>
                    <i class="fa-solid fa-xmark delete__product-cartFloat"></i>
                   </div>
                   <p>Size: L</p>
                   <p> 570.000 ₫</p>
                   <div class="box__input-among-cart">

                    <div class="box_product-detail-amount">
                        <div class="amount__value">

                         <div class="box__amount">
                             <div class="subtraction">-</div>
                             <input type="number" value= "1" class="box__amount-inputValue">
                             <div class="summation">+</div>
                         </div>
                        </div>

                    </div>

                   </div>
                </div>
            </div>
           </div> --}}

       </div>


       <div class="box__button-cartFloat mt-3">

                <form action="/checkoutInfomation">
                    <x-button type="submit" class="box__button-buy" value="Thanh toán ngay"/>
                </form>
                <form action="/cart">
                    <x-button type="submit" class="box__button-buy" value="Xem chi tiết giỏ hàng"/>
                </form>

            {{-- <div class="box__button-buy">Thành toán ngay</div> --}}
       </div>

       <i class="fa-solid fa-xmark close__cart-pc"></i>
</div>
</div>
{{-- <!-- End cart --> --}}
