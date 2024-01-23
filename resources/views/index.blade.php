@extends('layouts.app')

@section('title')
    BUMDES | Home
    
@endsection


@section('content')
<!-- Posts Filter Bar Start -->
<div class="posts--filter-bar style--1 hidden-xs">
    <div class="container">
        <ul class="nav">
            <li>
                <a href="#">
                    <i class="fa fa-star-o"></i>
                    <span>Featured News</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-heart-o"></i>
                    <span>Most Popular</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-fire"></i>
                    <span>Hot News</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-flash"></i>
                    <span>Trending News</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-eye"></i>
                    <span>Most Watched</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Posts Filter Bar End -->

<!-- News Ticker Start -->
<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>News Updates</h2>
            <span>(Update 12 minutes ago)</span>
        </div>

        <div class="news-updates--list" data-marquee="true">
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
                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/banner-01.jpg" alt=""></a>
                                <a href="#" class="cat">Politics</a>
                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                <div class="post--map">
                                    <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>

                                    <div class="map--wrapper">
                                        <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                    </div>
                                </div>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#">Norma R. Hogan</a></li>
                                        <li><a href="#">20 April 2017</a></li>
                                    </ul>

                                    <div class="title">
                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Siriyan civil war getting righteous indignation and dislike men who are so beguiled and demoralized by the sure.</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                        @endif
                    </div>
                    

                    <div class="col-md-6">
                        <div class="row gutter--15">
                            <div class="col-xs-6 col-xss-12">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--title-large">
                                    <div class="post--img">
                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/banner-02.jpg" alt=""></a>
                                        <a href="#" class="cat">Travel</a>
                                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Corey I. Dean</a></li>
                                                <li><a href="#">20 April 2017</a></li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Lorem Ipsum is simply dummy text of the printing</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                                @endif
                            </div>
                            
                            <div class="col-xs-6 hidden-xss">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--title-large">
                                    <div class="post--img">
                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/banner-03.jpg" alt=""></a>
                                        <a href="#" class="cat">Education</a>
                                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                        <div class="post--map">
                                            <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>

                                            <div class="map--wrapper">
                                                <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                            </div>
                                        </div>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Leraje</a></li>
                                                <li><a href="#">20 April 2017</a></li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Lorem Ipsum is simply dummy text of the printing</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                                @endif
                            </div>
                            
                            <div class="col-sm-12 hidden-sm hidden-xs">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--title-larger">
                                    <div class="post--img">
                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/banner-04.jpg" alt=""></a>
                                        <a href="#" class="cat">Politics</a>
                                        <a href="#" class="icon"><i class="fa fa-fire"></i></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Balam</a></li>
                                                <li><a href="#">20 April 2017</a></li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a href="news-single-v1.html" class="btn-link">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the sure.</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                                @endif
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
                                <h2 class="h4">Worlds News</h2>

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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/world-news-01.jpg" alt=""></a>
                                                <a href="#" class="cat">War</a>
                                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Siriya attaced by a long established fact that a reader will be distracted by</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/world-news-02.jpg" alt=""></a>

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
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/world-news-03.jpg" alt=""></a>

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
                                    <li class="col-xs-12">
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
                                    </li>
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
                                <h2 class="h4">Technology</h2>

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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/technology-01.jpg" alt=""></a>
                                                <a href="#" class="cat">Computer</a>
                                                <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bathin</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/technology-02.jpg" alt=""></a>

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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/technology-03.jpg" alt=""></a>

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
                                    </li>
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
                                    <img src="{{ asset('') }}portal/img/ads-img/ad-728x90-01.jpg" alt="" class="center-block">
                                </a>
                            </div>
                            <!-- Advertisement End -->
                        </div>
                        <!-- Ad End -->

                        <!-- Finance Start -->
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Finance</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_finance_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_finance_posts">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row" data-ajax-content="inner">
                                    <li class="col-md-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/finance-01.jpg" alt=""></a>
                                                <a href="#" class="cat">Business</a>
                                                <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Vassago</a></li>
                                                        <li><a href="#">Today 03:30 am</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>

                                    <li class="col-md-6">
                                        <ul class="nav row">
                                            <li class="col-xs-12 hidden-md hidden-lg">
                                                <!-- Divider Start -->
                                                <hr class="divider">
                                                <!-- Divider End -->
                                            </li>

                                            <li class="col-xs-6">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/finance-02.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Zepar</a></li>
                                                                <li><a href="#">Today 03:52 pm</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
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
                                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/finance-03.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Demiurge</a></li>
                                                                <li><a href="#">Today 03:02 pm</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
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
                                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/finance-04.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Demiurge</a></li>
                                                                <li><a href="#">Today 02:05 am</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
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
                                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/finance-05.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Zepar</a></li>
                                                                <li><a href="#">Today 12:35 am</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- Finance End -->

                        <!-- Politics Start -->
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Politics</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_politics_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_politics_posts">
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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/politics-01.jpg" alt=""></a>
                                                <a href="#" class="cat">Election</a>
                                                <a href="#" class="icon"><i class="fa fa-fire"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/politics-02.jpg" alt=""></a>

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
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/politics-03.jpg" alt=""></a>

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
                                    <li class="col-xs-12">
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/politics-04.jpg" alt=""></a>

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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/politics-05.jpg" alt=""></a>

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
                                    </li>
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- Politics End -->

                        <!-- Sports Start -->
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Sports</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_sports_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_sports_posts">
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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/sports-01.jpg" alt=""></a>
                                                <a href="#" class="cat">Basketball</a>
                                                <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bathin</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/sports-02.jpg" alt=""></a>

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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/sports-03.jpg" alt=""></a>

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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/sports-04.jpg" alt=""></a>

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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/sports-05.jpg" alt=""></a>

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
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- Sports End -->
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Widget Start -->
                    <div class="widget">
                        <!-- Ad Widget Start -->
                        <div class="ad--widget">
                            <a href="#">
                                <img src="{{ asset('') }}portal/img/ads-img/ad-300x250-1.jpg" alt="">
                            </a>
                        </div>
                        <!-- Ad Widget End -->
                    </div>
                    <!-- Widget End -->

                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Stay Connected</h2>
                            <i class="icon fa fa-share-alt"></i>
                        </div>

                        <!-- Social Widget Start -->
                        <div class="social--widget style--1">
                            <ul class="nav">
                                <li class="facebook">
                                    <a href="#">
                                        <span class="icon"><i class="fa fa-facebook-f"></i></span>
                                        <span class="count">521</span>
                                        <span class="title">Likes</span>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <span class="icon"><i class="fa fa-twitter"></i></span>
                                        <span class="count">3297</span>
                                        <span class="title">Followers</span>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="#">
                                        <span class="icon"><i class="fa fa-google-plus"></i></span>
                                        <span class="count">596282</span>
                                        <span class="title">Followers</span>
                                    </a>
                                </li>
                                <li class="rss">
                                    <a href="#">
                                        <span class="icon"><i class="fa fa-rss"></i></span>
                                        <span class="count">521</span>
                                        <span class="title">Subscriber</span>
                                    </a>
                                </li>
                                <li class="vimeo">
                                    <a href="#">
                                        <span class="icon"><i class="fa fa-vimeo"></i></span>
                                        <span class="count">3297</span>
                                        <span class="title">Followers</span>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="#">
                                        <span class="icon"><i class="fa fa-youtube-square"></i></span>
                                        <span class="count">596282</span>
                                        <span class="title">Subscriber</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Social Widget End -->
                    </div>
                    <!-- Widget End -->

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
                            <h2 class="h4">Featured News</h2>
                            <i class="icon fa fa-newspaper-o"></i>
                        </div>

                        <!-- List Widgets Start -->
                        <div class="list--widget list--widget-1">
                            <div class="list--widget-nav" data-ajax="tab">
                                <ul class="nav nav-justified">
                                    <li>
                                        <a href="#" data-ajax-action="load_widget_hot_news">Hot News</a>
                                    </li>
                                    <li class="active">
                                        <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a>
                                    </li>
                                    <li>
                                        <a href="#" data-ajax-action="load_widget_most_watched">Most Watched</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Post Items Start -->
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/widgets-img/news-widget-01.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Ninurta</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/widgets-img/news-widget-02.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Orcus</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/widgets-img/news-widget-03.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Rahab</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/widgets-img/news-widget-04.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Tannin</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- List Widgets End -->
                    </div>
                    <!-- Widget End -->

                </div>
            </div>
            <!-- Main Sidebar End -->
        </div>

        <!-- Main Content Start -->
        <div class="main--content pd--30-0">
            <!-- Post Items Title Start -->
            <div class="post--items-title" data-ajax="tab">
                <h2 class="h4">Audio &amp; Videos</h2>

                <div class="nav">
                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_audio_video_posts">
                        <i class="fa fa-long-arrow-left"></i>
                    </a>

                    <span class="divider">/</span>

                    <a href="#" class="next btn-link" data-ajax-action="load_next_audio_video_posts">
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Post Items Title End -->

            <!-- Post Items Start -->
            <div class="post--items post--items-4" data-ajax-content="outer">
                <ul class="nav row" data-ajax-content="inner">
                    <li class="col-md-8">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-1 post--type-video post--title-large">
                            <div class="post--img">
                                <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/audio-video-01.jpg" alt=""></a>
                                <a href="#" class="cat">Wave</a>
                                <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#">Succubus</a></li>
                                        <li><a href="#">Today 03:52 pm</a></li>
                                    </ul>

                                    <div class="title">
                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->

                        <!-- Divider Start -->
                        <hr class="divider hidden-md hidden-lg">
                        <!-- Divider End -->
                    </li>

                    <li class="col-md-4">
                        <ul class="nav">
                            <li>
                                <!-- Post Item Start -->
                                <div class="post--item post--type-audio post--layout-3">
                                    <div class="post--img">
                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/audio-video-02.jpg" alt=""></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Maclaan John</a></li>
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
                                <div class="post--item post--type-video post--layout-3">
                                    <div class="post--img">
                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/audio-video-03.jpg" alt=""></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Maclaan John</a></li>
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
                                <div class="post--item post--type-video post--layout-3">
                                    <div class="post--img">
                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/audio-video-04.jpg" alt=""></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Maclaan John</a></li>
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
                                <div class="post--item post--type-audio post--layout-3">
                                    <div class="post--img">
                                        <a href="news-single-v1.html" class="thumb"><img src="{{ asset('') }}portal/img/home-img/audio-video-05.jpg" alt=""></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Maclaan John</a></li>
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
                        </ul>
                    </li>
                </ul>

                <!-- Preloader Start -->
                <div class="preloader bg--color-0--b" data-preloader="1">
                    <div class="preloader--inner"></div>
                </div>
                <!-- Preloader End -->
            </div>
            <!-- Post Items End -->
        </div>
        <!-- Main Content End -->
            
       

    </div>
</div>
<!-- Main Content Section End -->
@endsection


@push('after-script')


@endpush


