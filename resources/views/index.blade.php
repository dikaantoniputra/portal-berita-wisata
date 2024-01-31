@extends('layouts.app')

@section('title')
    Pariwisata | Home
    
@endsection

@section('content')
<!-- Posts Filter Bar Start -->

<!-- Posts Filter Bar End -->

<!-- News Ticker Start -->
<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>News Updates</h2>
          
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
                    
                    </div>
                    

                    <div class="col-md-6">
                        <div class="row gutter--15">
                            <div class="col-xs-6 col-xss-12">
                                <!-- Post Item Start -->
                                @if($kegiatan->count() > 0)
                                    @php
                                        $item = $kegiatan->get(1);
                                    @endphp
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb">
                                                <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}">
                                            </a>
                                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="cat">{{ $item->category }}</a>
                                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="icon"><i class="fa fa-flash"></i></a>
                            
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->user->username }}</a></li>
                                                    <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->created_at }}</a></li>
                                                </ul>
                            
                                                <div class="title">
                                                    <h2 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">{{ $item->judul }}</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Post Item End -->
                                @endif
                            </div>
                            
                            <div class="col-xs-6 hidden-xss">
                                <!-- Post Item Start -->
                                @if($kegiatan->count() > 1)
                                    @php
                                        $item = $kegiatan->get(2);
                                    @endphp
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb">
                                                <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}">
                                            </a>
                                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="cat">{{ $item->category }}</a>
                                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="icon"><i class="fa fa-flash"></i></a>
                            
                                            @if($item->has_map)
                                                <div class="post--map">
                                                    <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>
                                                    <div class="map--wrapper">
                                                        <div data-map-latitude="{{ $item->map_latitude }}" data-map-longitude="{{ $item->map_longitude }}" data-map-zoom="{{ $item->map_zoom }}" data-map-marker="[[{{ $item->map_latitude }}, {{ $item->map_longitude }}]]"></div>
                                                    </div>
                                                </div>
                                            @endif
                            
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->user->username }}</a></li>
                                                    <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->created_at }}</a></li>
                                                </ul>
                            
                                                <div class="title">
                                                    <h2 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">{{ $item->judul }}</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Post Item End -->
                                @endif
                            </div>
                            
                            <div class="col-sm-12 hidden-sm hidden-xs">
                                <!-- Post Item Start -->
                                @if($kegiatan->count() > 2)
                                    @php
                                        $item = $kegiatan->get(3);
                                    @endphp
                                    <div class="post--item post--layout-1 post--title-larger">
                                        <div class="post--img">
                                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb">
                                                <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}">
                                            </a>
                                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="cat">{{ $item->category }}</a>
                                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="icon"><i class="fa fa-fire"></i></a>
                            
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->user->username }}</a></li>
                                                    <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->created_at }}</a></li>
                                                </ul>
                            
                                                <div class="title">
                                                    <h2 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">{{ $item->judul }}</a></h2>
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
                                @if(isset($kegiatankategori[0]) && $kegiatankategori[0])
                                    <h2 class="h4">{{ $kegiatankategori[0]->name }}</h2>
                                    <!-- Add other Wisata Cagar Alam-specific elements here -->
                                @endif
                            </div>
                            
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    
                                    @php $counter = 0 @endphp

                                    @foreach ($kegiatan as $item)
                                        @if ($item->category_kegiatan_id == 1 && $counter < 4)
                                            <li class="col-xs-6">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb">
                                                            <img src="{{ asset('uploads/' . $item->gambar) }}" alt="">
                                                        </a>
                                    
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->judul }}</a></li>
                                                                <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->created_at }}</a></li>
                                                            </ul>
                                    
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">
                                                                       {{ Illuminate\Support\Str::limit($item->deskripsi, 25) }}
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            @php $counter++ @endphp
                                        @endif
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
                        <!-- World News End -->

                        <!-- Technology Start -->
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                @if(isset($kegiatankategori[1]) && $kegiatankategori[1])
                                    <h2 class="h4">{{ $kegiatankategori[1]->name }}</h2>
                                    <!-- Add other Wisata Cagar Alam-specific elements here -->
                                @endif
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                   
                                    @php $counter = 0 @endphp
                                    @foreach ($kegiatan as $item)
                                    @if ($item->category_kegiatan_id == 2 && $counter < 4)
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb"><img src="{{ asset($item->gambar) }}" alt=""></a>
                                
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->judul }}</a></li>
                                                            <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->created_at }}</a></li>
                                                        </ul>
                                
                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">{{ Illuminate\Support\Str::limit($item->deskripsi, 25) }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @php $counter++ @endphp
                                         @endif
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
                        <!-- Technology End -->

                        <!-- Finance Start -->
                        <div class="row">
                            <!-- Post Items Title Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    @if(isset($kegiatankategori[2]) && $kegiatankategori[2])
                                        <h2 class="h4">{{ $kegiatankategori[2]->name }}</h2>
                                        <!-- Add other Wisata Cagar Alam-specific elements here -->
                                    @endif
                                </div>
                                
                                <!-- Post Items Title End -->
    
                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        
                                        @php $counter = 0 @endphp
    
                                        @foreach ($kegiatan as $item)
                                            @if ($item->category_kegiatan_id == 3 && $counter < 4)
                                                <li class="col-xs-6">
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb">
                                                                <img src="{{ asset($item->gambar) }}" alt="">
                                                            </a>
                                        
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->judul }}</a></li>
                                                                    <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->created_at }}</a></li>
                                                                </ul>
                                        
                                                                <div class="title">
                                                                    <h3 class="h4">
                                                                        <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">
                                                                           {{ Illuminate\Support\Str::limit($item->deskripsi, 25) }}
                                                                        </a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                                @php $counter++ @endphp
                                            @endif
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
                            <!-- World News End -->
    
                            <!-- Technology Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    @if(isset($kegiatankategori[3]) && $kegiatankategori[3])
                                        <h2 class="h4">{{ $kegiatankategori[3]->name }}</h2>
                                        <!-- Add other Wisata Cagar Alam-specific elements here -->
                                    @endif
                                </div>
                                <!-- Post Items Title End -->
    
                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                       
                                        @php $counter = 0 @endphp
                                        @foreach ($kegiatan as $item)
                                        @if ($item->category_kegiatan_id == 4 && $counter < 4)
                                            <li class="col-xs-6">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb"><img src="{{ asset($item->gambar) }}" alt=""></a>
                                    
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->judul }}</a></li>
                                                                <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->created_at }}</a></li>
                                                            </ul>
                                    
                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">{{ Illuminate\Support\Str::limit($item->deskripsi, 25) }}</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            @php $counter++ @endphp
                                             @endif
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
                            <!-- Post Items Title End -->

                        </div>
                        <!-- Finance End -->

                        <!-- Politics Start -->
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                @if(isset($kegiatankategori[5]) && $kegiatankategori[5])
                                    <h2 class="h4">{{ $kegiatankategori[5]->name }}</h2>
                                    <!-- Add other Wisata Cagar Alam-specific elements here -->
                                @endif
                            </div>

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">

                                    @php $counter = 0 @endphp
                                        @foreach ($kegiatan as $item)
                                        @if ($item->category_kegiatan_id == 6 && $counter < 4)
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb"><img src="{{ asset('') }}portal/img/home-img/politics-02.jpg" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->judul }}</a></li>
                                                            <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->created_at }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">{{ Illuminate\Support\Str::limit($item->deskripsi, 25) }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>   
                                        @php $counter++ @endphp    
                                        @endif
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
                        <!-- Politics End -->

                        <!-- Sports Start -->
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                @if(isset($kegiatankategori[4]) && $kegiatankategori[4])
                                    <h2 class="h4">{{ $kegiatankategori[4]->name }}</h2>
                                    <!-- Add other Wisata Cagar Alam-specific elements here -->
                                @endif
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                   
                                     
                                    @php $counter = 0 @endphp
                                    @foreach ($kegiatan as $item)
                                    @if ($item->category_kegiatan_id == 5 && $counter < 4)
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb"><img src="{{ asset($item->gambar) }}" alt=""></a>
                                
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->judul }}</a></li>
                                                            <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->created_at }}</a></li>
                                                        </ul>
                                
                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">{{ Illuminate\Support\Str::limit($item->deskripsi, 25) }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @php $counter++ @endphp   
                                         @endif
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
                        <!-- Sports End -->
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            {{-- <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Widget Start -->
                    <div class="widget">
                        <!-- Ad Widget Start -->
                        <div class="ad--widget">
                            <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">
                                <img src="{{ asset('') }}portal/img/ads-img/ad-300x250-1.jpg" alt="">
                            </a>
                        </div>
                        <!-- Ad Widget End -->
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
                                        <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" data-ajax-action="load_widget_hot_news">Hot News</a>
                                    </li>
                                    <li class="active">
                                        <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" data-ajax-action="load_widget_trendy_news">Trendy News</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" data-ajax-action="load_widget_most_watched">Most Watched</a>
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
                                                <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb"><img src="{{ asset('') }}portal/img/widgets-img/news-widget-01.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">Ninurta</a></li>
                                                        <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb"><img src="{{ asset('') }}portal/img/widgets-img/news-widget-02.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">Orcus</a></li>
                                                        <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb"><img src="{{ asset('') }}portal/img/widgets-img/news-widget-03.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">Rahab</a></li>
                                                        <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                <a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="thumb"><img src="{{ asset('') }}portal/img/widgets-img/news-widget-04.jpg" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">Tannin</a></li>
                                                        <li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">16 April 2017</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
            </div> --}}
            <!-- Main Sidebar End -->
        </div>

       

    </div>
</div>
<!-- Main Content Section End -->
@endsection

@push('after-script')

@endpush



