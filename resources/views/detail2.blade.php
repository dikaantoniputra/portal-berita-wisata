@extends('layouts.app')

@section('title')
    Pariwisata | Home
    
@endsection


@section('content')
  <!-- News Ticker Start -->
  <div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>Create Updates</h2>
            <span>({{ $pengumuman->updated_at }})</span>
        </div>

        
    </div>
</div>
<!-- News Ticker End -->

<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            {{-- <li><a href="travel.html" class="btn-link">{{ $pengumuman->company->name }}</a></li> --}}
            <li class="active"><span>{{ $pengumuman->judul }}</span></li>
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
                            <a href="#" class="thumb"><img src="{{ asset('uploads/' . $pengumuman->gambar) }}" alt=""></a>
                           

                            
                        </div>

                       

                      
                        <div class="post--content">
                            <p>{!! $pengumuman->deskripsi !!}</p>

                        
                        </div>
                    </div>
                    <!-- Post Item End -->
            
                    <!-- Advertisement Start -->
                    <div class="ad--space pd--20-0-40">
                        <a href="#">
                            <img src="img/ads-img/ad-728x90-02.jpg" alt="" class="center-block">
                        </a>
                    </div>

                    <div class="comment--form pd--30-0">
                        <!-- Post Items Title Start -->
                        <div class="post--items-title">
                            <h2 class="h4">Komentar</h2>

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
                                   
                                    <li class="active">
                                        <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a>
                                    </li>
                                    
                                </ul>
                            </div>

                            <!-- Post Items Start -->
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    @foreach ($kegiatanall->take(5) as $additionalItem)
                                    <li>
                                        <!-- Additional Post Item Start -->
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="#" class="thumb"><img src="{{ asset($additionalItem->gambar) }}" alt=""></a>
                                
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">{{ $additionalItem->company->name }}</a></li>
                                                        <li><a href="#">{{ $additionalItem->created_at }}</a></li>
                                                    </ul>
                                
                                                    <div class="title">
                                                        <h3 class="h4"><a href="#" class="btn-link">{{ $additionalItem->judul }}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Additional Post Item End -->
                                    </li>
                                @endforeach
                                
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


