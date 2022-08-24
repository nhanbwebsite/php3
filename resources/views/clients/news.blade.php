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
        <div class="box__pd" style="min-height: 100vh">
            <div class="row box__new">
                <div class="col-12 col-md-3 col-lg-3 box__new-img">
                    <img class="box__new-img-item" src="https://static.dosi-in.com/images/news_content/89614/2021/12/20/10-xu-huong-thoi-trang-hot-trend-se-duoc-ua-chuong-trong-2022_2021_12_20_0.png" alt="">
                </div>
                <div class="col-12 col-md-9 col-lg-9 box__new-info">
                    <a href="{{route('client.newsDetails')}}" class="box__new-info-title">10 Xu hướng thời trang hot trend sẽ được ưa chuộng trong 2022</a>
                    <div class="box__new-info-author">
                        {{-- <span class="box__new-info-author-atv">
                            <img class="box__new-info-author-atv-item" src="{{asset('clients/images/news/new.jpg')}}" alt="">
                        </span>
                        <span class="box__new-info-author-time">Thời gian đăng bài</span> --}}
                    </div>
                    <div class="desc">
                        Thế là sắp kết thúc một năm đầy mong đợi bởi những phong cách thời trang vô cùng độc đáo. Đây cũng là thời điểm tín đồ thời trang tích cực săn lùng những bộ cánh đẹp để có thể thoải mái diện đồ trong năm mới. Nhưng liệu phong cách thời trang bạn đang theo đuổi có phù hợp với thời trang năm 2022?

                    </div>
                </div>
            </div>

        </div>
   </div>
    @endsection
{{-- end content --}}

{{--  css for page --}}
@section('cssForPage')
    {{asset('clients/css/newsPage.css')}}
@endsection
{{-- end css --}}

{{-- js for page --}}
@section('jsForPage')
    {{asset('clients/css/newsPage.js')}}
@endsection
{{-- end js for page --}}

