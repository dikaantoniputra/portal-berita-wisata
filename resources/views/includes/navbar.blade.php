 <!-- Header Section Start -->
 <header class="header--section header--style-1">
	<!-- Header Topbar Start -->
	<div class="header--topbar bg--color-2">
		<div class="container">
			<div class="float--left float--xs-none text-xs-center">
			</div>

			<div class="float--right float--xs-none text-xs-center">
				<!-- Header Topbar Action Start -->
				<ul class="header--topbar-action nav">
					<li><a href="{{ url('daftar') }}"><i class="fa fm fa-user-o"></i>Login</a></li>
				</ul>
				<!-- Header Topbar Action End -->
			</div>
		</div>
	</div>
	<!-- Header Topbar End -->

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
					<li class="dropdown menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori<i class="fa flm fa-angle-down"></i></a>

						<ul class="dropdown-menu">
							<li class="dropdown">
								<a href="#">Wisata Sejarah</a>

								<ul class="dropdown-menu">
									<li><a href="#">Kelenteng Sanggar Agung Kenjeran</a></li>
									<li><a href="#">Patung Suro dan Boyo</a></li>
									<li><a href="#">House of Sampoerna</a></li>
									<li><a href="#">Museum Pendidikan Surabaya</a></li>
									<li><a href="#">Museum De Javasche Bank</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Wisata Cagar Alam</a>

								<ul class="dropdown-menu">
									<li><a href="#">Ekowisata Mangrove Wonorejo Rungkut</a></li>
									<li><a href="#">Kebun Bibit Wonorejo </a></li>
									<li><a href="#">Mangrove Gunung Anyar </a></li>
									<li><a href="#">Hutan Bambu dan Taman Sakura Keputih</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Wisata Keluarga</a>

								<ul class="dropdown-menu">
									<li><a href="#">Surabaya North Quay</a></li>
									<li><a href="#">KenPark (Kenjeran Park)</a></li>
									<li><a href="#">Ciputra Waterpark Surabaya</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Wisata Kuliner</a>

								<ul class="dropdown-menu">
									<li><a href="#">Lontong Kupang Artomoro</a></li>
									<li><a href="#">Sate Klopo Ondomohen</a></li>
									<li><a href="#">Ice Cream Zangrandi</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#">Wisata Religi</a>

								<ul class="dropdown-menu">
									<li><a href="#">Makam Sunan Ampel</a></li>
									<li><a href="#">Masjid Al Akbar Surabaya</a></li>
									<li><a href="#">Masjid Muhammad Cheng Hoo Surabaya</a></li>
								</ul>
							</li>
						</ul>
					</li>
				
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
