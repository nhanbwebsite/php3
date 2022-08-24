@extends('layout.clients')

{{-- news --}}
@section('news')

@endsection
{{-- end 4 news --}}

{{-- banner --}}
    @section('banner')

    @endsection
{{-- end --}}

{{-- csscontent --}}
    @section('content')
   <div class="keep__the-size">
        <div class="box__pd">

           <div class="box__account_clients">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    @if(Session::has('updateInfo'))
                        <h3 style="color:blue; font-size:16px">{{Session::get('updateInfo')}}</h3>
                    @endif
                    @if(Session::has('errPass'))
                    <h3 style="color:red; font-size:16px">{{Session::get('errPass')}}</h3>
                   @endif
                  <h2 class="accordion-header" id="flush-headingOne">

                    <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Quản lý tài khoản
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">



                          <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fs-3 bg-secondary" style="color:white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    thông tin
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">


                                    <form method="post">

                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Họ tên</label>
                                            <input type="text" class="form-control fs-3" name="fullname" value="@if(Session::has('user')) {{Session::get('user')->fullname}} @endif" id="formGroupExampleInput" placeholder="Example input placeholder">
                                          </div>
                                          <div class="mb-3">
                                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                                            <input type="text" class="form-control fs-3" name="email" value="@if(Session::has('user')) {{Session::get('user')->email}} @endif" readonly id="formGroupExampleInput2" placeholder="Another input placeholder">
                                          </div>
                                          <div class="mb-3">
                                            <label for="formGroupExampleInput2" class="form-label">Điện thoại</label>
                                            <input type="text" class="form-control fs-3" name="phone" value="@if(Session::has('user')) {{Session::get('user')->phone}} @endif" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                          </div>
                                          <div class="col-12">
                                            <button type="submit" id="updateAccountClient"  class="btn btn-primary fs-3">Cập nhật thông tin</button>
                                          </div>
                                          @csrf
                                    </form>

                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">

                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fs-3 bg-secondary" style="color:white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Đổi mật khẩu
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                        <form  method="post">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Mật khẩu cũ</label>
                                                <input type="password" name="oldPass" class="form-control fs-3"  id="formGroupExampleInput" placeholder="Nhập mật khẩu cũ">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">Mật khẩu mới</label>
                                                <input type="password" name="newPass" class="form-control fs-3"   id="formGroupExampleInput2" placeholder="Nhập mật khẩu mới">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">Xác nhận lại mật khẩu mới</label>
                                                <input type="password" name="confirmPass" class="form-control fs-3"  id="formGroupExampleInput2" placeholder="Xác nhận lại mật khẩu">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" id="btndoimk" class="btn btn-primary fs-3">Đổi mật khẩu</button>
                                            </div>
                                            @csrf
                                        </form>

                                </div>
                              </div>
                            </div>

                          </div>

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                       Đơn hàng
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <div class="accordion-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">STT</th>
                                  <th scope="col">Tên sản phẩm</th>
                                  <th scope="col">Giá sản phẩm (VNĐ)</th>
                                  <th scope="col">Số lượng</th>
                                  <th scope="col">Thành tiền</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @if(!empty($dataOrder))

                                  @php
                                      $tong = 0;
                                  @endphp

                              @forelse($dataOrder as $key => $item)

                               @php
                                   $tong += $item->order_details_pro_price * $item->order_detail_quantity
                               @endphp
                                  <tr>
                                      <th scope="col">{{++$key}}</th>
                                      <th scope="col">{{$item->product_name}}</th>
                                      <th scope="col" style="text-align:right">{{number_format($item->order_details_pro_price)}} đ</th>
                                      <th scope="col" style="text-align:right">{{$item->order_detail_quantity}}</th>
                                      <th scope="col" style="text-align:right">{{number_format($item->order_details_pro_price * $item->order_detail_quantity)}} đ</th>
                                    </tr>
                              @empty
                              <h2>Bạn chưa có hóa đơn, hãy đi mua sắm ngay đi nào ^^!</h2>
                              @endforelse
                              @endif
                              </tbody>
                            </table>
                      </div>



                    </div>
                  </div>
                </div>

              </div>
           </div>

        </div>
   </div>

   <script>
        let updateAccountClient  = document.getElementById('updateAccountClient');
        updateAccountClient.addEventListener('click', function(e){
           if(confirm('Bạn sẽ phải đăng nhập lại khi cập nhật tài khoản !')){

           } else{
                e.preventDefault();
           }
        })
        let btndoimk  = document.getElementById('btndoimk');
            btndoimk.addEventListener('click', function(e){
            if(confirm('Bạn sẽ phải đăng nhập lại khi cập nhật tài khoản !')){

            } else{
                    e.preventDefault();
            }
        })
   </script>

    @endsection
{{-- end content --}}

{{--  css for page --}}
@section('cssForPage')
    {{asset('clients/css/accountClient.css')}}
@endsection
{{-- end css --}}

{{-- js for page --}}
@section('jsForPage')
    {{asset('clients/css/newsPage.js')}}
@endsection
{{-- end js for page --}}

