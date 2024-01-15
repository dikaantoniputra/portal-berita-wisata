<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<title>@yield('title')</title>

    @include('includes.meta')

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
	<link rel="manifest" href="app.webmanifest"/>
</head>

<body>

		  {{-- <!-- Preloader Start -->
		  <div id="preloader">
			<div class="preloader bg--color-1--b" data-preloader="1">
				<div class="preloader--inner"></div>
			</div>
		</div>
		<!-- Preloader End --> --}}
	
		<!-- Wrapper Start -->

        <div id="wrapper">
		
        @include('includes.navbar')
                    @yield('content')    
       

	
		@include('includes.footer')

			
        </div>
       
     <!-- Sticky Social Start -->
	 <div id="stickySocial" class="sticky--right">
        <ul class="nav">
            <li>
                <a href="#">
                    <i class="fa fa-facebook"></i>
                    <span>Follow Us On Facebook</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                    <span>Follow Us On Twitter</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-google-plus"></i>
                    <span>Follow Us On Google Plus</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-rss"></i>
                    <span>Follow Us On RSS</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-vimeo"></i>
                    <span>Follow Us On Vimeo</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-youtube-play"></i>
                    <span>Follow Us On Youtube Play</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-linkedin"></i>
                    <span>Follow Us On LinkedIn</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Sticky Social End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
	
</body>

</html>
