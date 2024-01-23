@extends('layouts.app')

@section('title')
    BUMDES | Home
    
@endsection


@section('content')
  <!-- News Ticker Start -->
  <div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>Create Updates</h2>
            <span>({{ $kegiatan->updated_at }})</span>
        </div>

        
    </div>
</div>
<!-- News Ticker End -->

<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li><a href="travel.html" class="btn-link">{{ $kegiatan->company->name }}</a></li>
            <li class="active"><span>{{ $kegiatan->judul }}</span></li>
        </ul>
    </div>
</div>
<!-- Main Breadcrumb End -->

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Post Item Start -->
                    <div class="post--item post--single post--title-largest pd--30-0">
                        <div class="post--img">
                            <a href="#" class="thumb"><img src="{{ asset($kegiatan->gambar) }}" alt=""></a>
                           

                            
                        </div>

                       

                      
                        <div class="post--content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition words etc.</p>

                        
                        </div>
                    </div>
                    <!-- Post Item End -->
            
                    <!-- Advertisement Start -->
                    <div class="ad--space pd--20-0-40">
                        <a href="#">
                            <img src="img/ads-img/ad-728x90-02.jpg" alt="" class="center-block">
                        </a>
                    </div>
                    <!-- Advertisement End -->


{{--                    
                    <!-- Comment List Start -->
                    <div class="comment--list pd--30-0">
                        <!-- Post Items Title Start -->
                        <div class="post--items-title">
                            <h2 class="h4">03 Comments</h2>

                            <i class="icon fa fa-comments-o"></i>
                        </div>
                        <!-- Post Items Title End -->

                        <ul class="comment--items nav">
                            <li>
                                <!-- Comment Item Start -->
                                <div class="comment--item clearfix">
                                    <div class="comment--img float--left">
                                        <img src="img/news-single-img/comment-avatar-01.jpg" alt="">
                                    </div>

                                    <div class="comment--info">
                                        <div class="comment--header clearfix">
                                            <p class="name">Karla Gleichauf</p>
                                            <p class="date">12 May 2017 at 05:28 pm</p>

                                            <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                        </div>

                                        <div class="comment--content">
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Item End -->
                            </li>

                            <li>
                                <!-- Comment Item Start -->
                                <div class="comment--item clearfix">
                                    <div class="comment--img float--left">
                                        <img src="img/news-single-img/comment-avatar-02.jpg" alt="">
                                    </div>

                                    <div class="comment--info">
                                        <div class="comment--header clearfix">
                                            <p class="name">M Shyamalan</p>
                                            <p class="date">12 May 2017 at 05:28 pm</p>

                                            <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                        </div>

                                        <div class="comment--content">
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Item End -->

                                <ul class="comment--items nav">
                                    <li>
                                        <!-- Comment Item Start -->
                                        <div class="comment--item clearfix">
                                            <div class="comment--img float--left">
                                                <img src="img/news-single-img/comment-avatar-03.jpg" alt="">
                                            </div>

                                            <div class="comment--info">
                                                <div class="comment--header clearfix">
                                                    <p class="name">Liz Montano</p>
                                                    <p class="date">12 May 2017 at 05:28 pm</p>

                                                    <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                                </div>

                                                <div class="comment--content">
                                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Comment Item End -->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Comment List End --> --}}

                    <!-- Comment Form Start -->
                    <div class="comment--form pd--30-0">
                        <!-- Post Items Title Start -->
                        <div class="post--items-title">
                            <h2 class="h4">Leave A Comment</h2>

                            <i class="icon fa fa-pencil-square-o"></i>
                        </div>
                        <!-- Post Items Title End -->

                        <div class="comment-respond">
                            <form action="#" data-form="validate">
                                <p>Don’t worry ! Your email address will not be published. Required fields are marked (*).</p>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>
                                            <span>Comment *</span>
                                            <textarea name="comment" class="form-control" required></textarea>
                                        </label>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>
                                            <span>Name *</span>
                                            <input type="text" name="name" class="form-control" required>
                                        </label>

                                        <label>
                                            <span>Email Address *</span>
                                            <input type="email" name="email" class="form-control" required>
                                        </label>

                                        <label>
                                            <span>Website</span>
                                            <input type="text" name="website" class="form-control">
                                        </label>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Post a Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 ptop--30 pbottom--30" data-sticky-content="true">
                <div class="sticky-content-inner">
                

                 
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
                                                <a href="#" class="thumb"><img src="img/widgets-img/news-widget-01.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Ninurta</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                <a href="#" class="thumb"><img src="img/widgets-img/news-widget-02.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Orcus</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                <a href="#" class="thumb"><img src="img/widgets-img/news-widget-03.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Rahab</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                <a href="#" class="thumb"><img src="img/widgets-img/news-widget-04.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Tannin</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
    </div>
</div>
<!-- Main Content Section End -->


@endsection

@push('after-script')

@endpush


