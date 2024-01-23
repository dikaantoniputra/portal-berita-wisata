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
