 <!-- Header Section Start -->
 <header class="header--section header--style-1">
	<!-- Header Topbar Start -->
	<div class="header--topbar bg--color-2">
		<div class="container">
			<div class="float--left float--xs-none text-xs-center">
			</div>

			<div class="float--right float--xs-none text-xs-center">
				<!-- Header Topbar Action Start -->
				@if(auth()->check())
				<ul class="header--topbar-action nav">
					<li><a href="{{ url('/') }}"><i class="fa fm fa-user-o"></i>{{ auth()->user()->username }}</a></li>
					
					<li><form action="/logout" method="POST">
						@csrf
					  <button class="dropdown-item notify-item" type="submit">
						  <i class="fe-log-out"></i>
						  <span>Logout</span>
					  </button>
					</form></li>
				</ul>
			@else
				<ul class="header--topbar-action nav">
					<li><a href="{{ url('login') }}"><i class="fa fm fa-user-o"></i>Login</a></li>
				</ul>
			@endif

				<!-- Header Topbar Action End -->
			</div>
		</div>
	</div>
	<!-- Header Topbar End -->


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
					
				
					<li><a href="{{ url('/') }}">Home</a></li>
					<li class="dropdown megamenu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori<i class="fa flm fa-angle-down"></i></a>


						<ul class="dropdown-menu">
							
							{{-- @foreach ($category as $cat)
								<a href="#">{{ $cat->name }}</a>
								@endforeach --}}
							@foreach ($category as $cat)
								<li class="dropdown">
									<a href="{{ route('category', ['id' => $cat->id]) }}">{{ $cat->name }}</a>
									<ul class="dropdown-menu">
										@foreach ($kegiatan->where('category_kegiatan_id', $cat->id)->take(5) as $item)
											<li><a href="{{ route('kegiatanetails', ['slug' => $item->slug]) }}">{{ $item->judul }}</a></li>
										@endforeach
										<!-- Add more items or adjust the loop as needed -->
									</ul>
								</li>
							@endforeach
							

						</ul>
					</li>
					<li><a href="{{ url('/berita-all') }}">Berita</a></li>

				
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
