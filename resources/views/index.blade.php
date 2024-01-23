@extends('layouts.app')

@section('title')
    BUMDES | Home
    
@endsection


@section('content')

<!-- News Ticker Start -->
<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>News Updates</h2>
            <span>(Update 12 minutes ago)</span>
        </div>
        {{-- <div class="news-updates--list" data-marquee="true">
            <ul class="nav">
                <li>
                    <h3 class="h3"><a href="#">Contrary to popular belief Lorem Ipsum is not simply random text.</a></h3>
                </li>
                <li>
                    <h3 class="h3"><a href="#">Education to popular belief Lorem Ipsum is not simply</a></h3>
                </li>
                <li>
                    <h3 class="h3"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                </li>
                <li>
                    <h3 class="h3"><a href="#">Corporis repellendus perspiciatis reprehenderit.</a></h3>
                </li>
                <li>
                    <h3 class="h3"><a href="#">Deleniti consequatur laudantium sit aspernatur?</a></h3>
                </li>
            </ul>
        </div> --}}
        <div class="news-updates--list" data-marquee="true">
            {{-- <ul class="nav">
                <li>
                    <h3 class="h3"><a href="#">Contrary to popular belief Lorem Ipsum is not simply random text.</a></h3>
                </li>
                <li>
                    <h3 class="h3"><a href="#">Education to popular belief Lorem Ipsum is not simply</a></h3>
                </li>
                <li>
                    <h3 class="h3"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                </li>
                <li>
                    <h3 class="h3"><a href="#">Corporis repellendus perspiciatis reprehenderit.</a></h3>
                </li>
                <li>
                    <h3 class="h3"><a href="#">Deleniti consequatur laudantium sit aspernatur?</a></h3>
                </li>
            </ul> --}}
        </div>
    </div>
</div>
<!-- News Ticker End -->

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <!-- Main Content Start -->
        <div class="main--content">
            <!-- Post Items Start -->
            <div class="post--items post--items-1 pd--30-0">
                <div class="row gutter--15">
                    <div class="col-md-6">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-1 post--title-larger">
                            <div class="post--img">
                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/surabaya.png" alt=""></a>
                                <a href="#" class="cat">Wisata Sejarah</a>
                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                <div class="post--map">
                                    <p class="btn-link"><i class="fa fa-map-o"></i>Location di Google Map</p>

                                    <div class="map--wrapper">
                                        <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                    </div>
                                </div>

                                <div class="post--info">
                                    <div class="title">
                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Monumen Sura Baya Diresmikan: Jejak Kecemerlangan dan Kekuatan Budaya Surabaya</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-md-6">
                        <div class="row gutter--15">
                            <div class="col-xs-6 col-xss-12">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--title-large">
                                    <div class="post--img">
                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/naga.png" alt=""></a>
                                        <a href="#" class="cat">Wisata Keluarga</a>
                                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                        <div class="post--map">
                                            <p class="btn-link"><i class="fa fa-map-o"></i>Location di Google Map</p>
        
                                            <div class="map--wrapper">
                                                <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                            </div>
                                        </div>

                                        <div class="post--info">
                                            <div class="title">
                                                <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Patung Naga Kenpark Surabaya: Wisata Edukatif dan Menyenangkan untuk Keluarga</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            </div>

                            <div class="col-xs-6 hidden-xss">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--title-large">
                                    <div class="post--img">
                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/ampel.png" alt=""></a>
                                        <a href="#" class="cat">Wisata Religi</a>
                                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                        <div class="post--map">
                                            <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>

                                            <div class="map--wrapper">
                                                <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                            </div>
                                        </div>

                                        <div class="post--info">
                                            <div class="title">
                                                <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Mengenal Lebih Dekat Sunan Ampel: Destinasi Penuh Hikmah untuk Wisatawan Religi</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            </div>

                            <div class="col-sm-12 hidden-sm hidden-xs">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--title-larger">
                                    <div class="post--img">
                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/zangrandi.png" alt=""></a>
                                        <a href="#" class="cat">Wisata Kuliner</a>
                                        <a href="#" class="icon"><i class="fa fa-fire"></i></a>

                                        <div class="post--map">
                                            <p class="btn-link"><i class="fa fa-map-o"></i>Location di Google Map</p>
        
                                            <div class="map--wrapper">
                                                <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                            </div>
                                        </div>

                                        <div class="post--info">
                                            <div class="title">
                                                <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Mengulik Kelezatan Es Krim Zangrandi di Surabaya: Pengalaman Kuliner yang Tak Terlupakan</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Items End -->
        </div>
        <!-- Main Content End -->

        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">
                        <!-- World News Start -->
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Wisata Religi</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_world_news_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_world_news_posts">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-xs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/chengho.png" alt=""></a>

                                                <div class="post--info">
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Masjid Cheng Ho Surabaya: Keindahan Arsitektur Islami yang Memikat Hati Wisatawan Religi</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-xs-12">
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/akbar.png" alt=""></a>

                                                <div class="post--info">
                                                    

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Masjid Al Akbar: Destinasi Religi Utama di Surabaya</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/religi.png" alt=""></a>

                                                <div class="post--info">
                                                    

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Mengenal Lebih Dekat Sunan Ampel: Destinasi Penuh Hikmah untuk Wisatawan Religi</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    {{-- <li class="col-xs-12">
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/world-news-04.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/world-news-05.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Hantu Raya</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li> --}}
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- World News End -->

                        <!-- Technology Start -->
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Wisata Keluarga</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_technology_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_technology_posts">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/ciputra.png" alt=""></a>

                                                <div class="post--info">

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Keasyikan Berkeliling Ciputra Waterpark: Destinasi Wisata Air Terpopuler di Surabaya</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/snq.png" alt=""></a>

                                                <div class="post--info">
                                                    

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Surabaya North Quay, Tempat Hiburan Keluarga Favorit</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/kenpark.png" alt=""></a>

                                                <div class="post--info">
                                                    

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Patung Naga Kenpark Surabaya: Wisata Edukatif dan Menyenangkan untuk Keluarga</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    {{-- <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/technology-04.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/technology-05.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li> --}}
                                    
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- Technology End -->

                        <!-- Ad Start -->
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <!-- Advertisement Start -->
                            <div class="ad--space">
                                <a href="#">
                                    <img src="{{ asset('') }}portal/img/ads-img/suramadu.png" alt="" class="center-block">
                                </a>
                            </div>
                            <!-- Advertisement End -->
                        </div>
                        <!-- Ad End -->
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                <div class="sticky-content-inner">
                    

                    

                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Get Newsletter</h2>
                            <i class="icon fa fa-envelope-open-o"></i>
                        </div>

                        <!-- Subscribe Widget Start -->
                        <div class="subscribe--widget">
                            <div class="content">
                                <p>Subscribe to our newsletter to get  latest news, popular news and exclusive updates.</p>
                            </div>

                            <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax">
                                <div class="input-group">
                                    <input type="email" name="EMAIL" placeholder="E-mail address" class="form-control" autocomplete="off" required>

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-lg btn-default active"><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </div>

                                <div class="status"></div>
                            </form>
                        </div>
                        <!-- Subscribe Widget End -->
                    </div>
                    <!-- Widget End -->

                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Advertisement</h2>
                            <i class="icon fa fa-bullhorn"></i>
                        </div>

                        <!-- Ad Widget Start -->
                        <div class="ad--widget">
                            <a href="#">
                                <img src="{{ asset('') }}portal/img/ads-img/ad-300x250-2.jpg" alt="">
                            </a>
                        </div>
                        <!-- Ad Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>
            </div>
            <!-- Main Sidebar End -->
        </div>
            
       

    </div>
</div>
<!-- Main Content Section End -->
@endsection


@push('after-script')


@endpush


