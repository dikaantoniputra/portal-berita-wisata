 <!-- Header Section Start -->
 <header class="header--section header--style-1">
	<!-- Header Topbar Start -->
	<div class="header--topbar bg--color-2">
		<div class="container">
			<div class="float--left float--xs-none text-xs-center">
				<!-- Header Topbar Info Start -->
				<ul class="header--topbar-info nav">
					<li><i class="fa fm fa-map-marker"></i>New York</li>
					<li><i class="fa fm fa-mixcloud"></i>21<sup>0</sup> C</li>
					<li><i class="fa fm fa-calendar"></i>Today (Sunday 19 April 2017)</li>
				</ul>
				<!-- Header Topbar Info End -->
			</div>

			<div class="float--right float--xs-none text-xs-center">
				<!-- Header Topbar Action Start -->
				<ul class="header--topbar-action nav">
					<li><a href="{{ url('daftar') }}"><i class="fa fm fa-user-o"></i>Login/Register</a></li>
				</ul>
				<!-- Header Topbar Action End -->
				
				<!-- Header Topbar Language Start -->
				<ul class="header--topbar-lang nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fm fa-language"></i>English<i class="fa flm fa-angle-down"></i></a>

						<ul class="dropdown-menu">
							<li><a href="#">English</a></li>
							<li><a href="#">Spanish</a></li>
							<li><a href="#">French</a></li>
						</ul>
					</li>
				</ul>
				<!-- Header Topbar Language End -->

				<!-- Header Topbar Social Start -->
				<ul class="header--topbar-social nav hidden-sm hidden-xxs">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				</ul>
				<!-- Header Topbar Social End -->
			</div>
		</div>
	</div>
	<!-- Header Topbar End -->

	<!-- Header Mainbar Start -->
	<div class="header--mainbar">
		<div class="container">
			<!-- Header Logo Start -->
			<div class="header--logo float--left float--sm-none text-sm-center">
				<h1 class="h1">
					<a href="home-1.html" class="btn-link">
						<img src="{{ asset('') }}portal/img/logo.png" alt="USNews Logo">
						<span class="hidden">USNews Logo</span>
					</a>
				</h1>
			</div>
			<!-- Header Logo End -->

			<!-- Header Ad Start -->
			<div class="header--ad float--right float--sm-none hidden-xs">
				<a href="#">
					<img src="{{ asset('') }}portal/img/ads-img/ad-728x90-01.jpg" alt="Advertisement">
				</a>
			</div>
			<!-- Header Ad End -->
		</div>
	</div>
	<!-- Header Mainbar End -->

	<!-- Header Navbar Start -->
	<div class="header--navbar style--1 navbar bd--color-1 bg--color-1" data-trigger="sticky">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div id="headerNav" class="navbar-collapse collapse float--left">
				<!-- Header Menu Links Start -->
				<ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
					
				
					<li><a href="{{ url('admin') }}">Home</a></li>
					<li class="dropdown megamenu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Catagory<i class="fa flm fa-angle-down"></i></a>

						<ul class="dropdown-menu">
							<li class="dropdown">
								<a href="#">World’s News</a>

								<ul class="dropdown-menu">
									<li><a href="#">US &amp; Canada</a></li>
									<li><a href="#">Europe</a></li>
									<li><a href="#">Africa</a></li>
									<li><a href="#">Asia</a></li>
									<li><a href="#">Middle East</a></li>
									<li><a href="#">Asia Pacific</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Documantation</a>

								<ul class="dropdown-menu">
									<li><a href="#">Featured Documantation</a></li>
									<li><a href="#">People &amp; Power</a></li>
									<li><a href="#">Rebel Education</a></li>
									<li><a href="#">Rewind</a></li>
									<li><a href="#">Fault Lines</a></li>
									<li><a href="#">News 360 Degree World’s</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Sports</a>

								<ul class="dropdown-menu">
									<li><a href="#">Football</a></li>
									<li><a href="#">Cricket</a></li>
									<li><a href="#">Hocky</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Business</a>

								<ul class="dropdown-menu">
									<li><a href="#">US Business</a></li>
									<li><a href="#">Middle East Business</a></li>
									<li><a href="#">Europe Business</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Education</a>

								<ul class="dropdown-menu">
									<li><a href="#">Africa Child Education</a></li>
									<li><a href="#">Bangladeshi Education</a></li>
									<li><a href="#">Middle East Education</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Humanities</a>

								<ul class="dropdown-menu">
									<li><a href="#">Help For Syrian Refugees</a></li>
									<li><a href="#">Help For Afgan Children</a></li>
									<li><a href="#">Help For African Children</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Movies</a>

								<ul class="dropdown-menu">
									<li><a href="#">Hollywood</a></li>
									<li><a href="#">Dollywood</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Weather</a>

								<ul class="dropdown-menu">
									<li><a href="#">North Pole</a></li>
									<li><a href="#">South Pole</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Health</a>

								<ul class="dropdown-menu">
									<li><a href="#">Africa Poor Child Healt</a></li>
									<li><a href="#">Fitness and Health</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Animals</a>

								<ul class="dropdown-menu">
									<li><a href="#">African Animals</a></li>
									<li><a href="#">Australian Animals</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="{{ url('about') }}">About</a></li>
				
				</ul>
				<!-- Header Menu Links End -->
			</div>

			<!-- Header Search Form Start -->
			<form action="#" class="header--search-form float--right" data-form="validate">
				<input type="search" name="search" placeholder="Search..." class="header--search-control form-control" required>

				<button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>
			</form>
			<!-- Header Search Form End -->
		</div>
	</div>
	<!-- Header Navbar End -->
</header>
<!-- Header Section End -->
