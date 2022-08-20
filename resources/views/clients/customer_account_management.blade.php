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
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                         Thông tin tài khoản
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Trạng thái đơn hàng
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">


                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Accordion Item <span style="margin-left:2px; color:red"> - Tổng: 234.678 đ</span>
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <select class="form-select fs-3" aria-label="Default select example">
                                        <option selected>Đang vận chuyển</option>
                                      </select>
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Thành tiền</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                          </tr>

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
           </div>

        </div>
   </div>
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

