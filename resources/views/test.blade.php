@extends('layouts.app')

@section('title')
    BUMDES | Home
    
@endsection


@section('content')


<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <!-- Main Content Start -->
      


        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">
                       
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Berita Pariwisata</h2>

                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <!-- Post Item Start -->
                                        @foreach($pengumuman as $berita)
                                        <div class="post--item mb-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="post--img">
                                                        <a href="{{ route('pengumumanetails', ['slug' => $berita->slug]) }}" class="thumb">
                                                            <img src="{{ asset('uploads/' . $berita->gambar) }}" alt="">
                                                        </a>
                                                        <a href="#" class="cat">Berita</a>
                                                        <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                </div>
                                    
                                                <div class="col-md-6">
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">{{ $berita->author_name }}</a></li>
                                                            <li><a href="#">{{ $berita->updated_at->format('M d, Y H:i A') }}</a></li>
                                                        </ul>
                                    
                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('pengumumanetails', ['slug' => $berita->slug]) }}" class="btn-link">{!! Str::limit(strip_tags($berita->judul), 25) !!}</a></h3>
                                                        </div>
                                                    </div>
                                    
                                                    <div class="post--content">
                                                        <p>{!! Str::limit(strip_tags($berita->deskripsi), 100) !!}</p>
                                                    </div>
                                    
                                                    <div class="post--action">
                                                        <a href="{{ route('pengumumanetails', ['slug' => $berita->slug]) }}">Continue Reading...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                    
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
                        
                        <div class="col-md-12">
                            <div class="pagination--wrapper ptop--30 pbottom--30 clearfix">
                                <p class="pagination-hint float--left">Page {{ $pengumuman->currentPage() }} of {{ $pengumuman->lastPage() }}</p>
                        
                                <ul class="pagination float--right">
                                    @if ($pengumuman->onFirstPage())
                                        <li class="disabled"><span><i class="fa fa-long-arrow-left"></i></span></li>
                                    @else
                                        <li><a href="{{ $pengumuman->previousPageUrl() }}"><i class="fa fa-long-arrow-left"></i></a></li>
                                    @endif
                        
                                    @for ($i = 1; $i <= $pengumuman->lastPage(); $i++)
                                        <li class="{{ $i == $pengumuman->currentPage() ? 'active' : '' }}">
                                            @if ($i == $pengumuman->currentPage())
                                                <span>{{ $i }}</span>
                                            @else
                                                <a href="{{ $pengumuman->url($i) }}">{{ $i }}</a>
                                            @endif
                                        </li>
                                    @endfor
                        
                                    @if ($pengumuman->hasMorePages())
                                        <li><a href="{{ $pengumuman->nextPageUrl() }}"><i class="fa fa-long-arrow-right"></i></a></li>
                                    @else
                                        <li class="disabled"><span><i class="fa fa-long-arrow-right"></i></span></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

        </div>
    </div>
</div>
<!-- Main Content Section End -->
@endsection


@push('after-script')


@endpush


