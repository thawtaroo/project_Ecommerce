<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico ')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/color-01.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/bootstrap-datetimepicker.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/select2/css/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/nouislider.min.css') }}">	
	{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        

    @livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+95) 456 789</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-en.png') }}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="assets/images/lang-mn.png" alt="lang-hun"></span>Myanmar</a></li>
										
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="MMK" href="#">MMK (KS)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li>
								@if(Route::has('login'))
									@auth
										@if(Auth::user()->utype ==='ADM')
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
													</li>
													<li class="menu-item">
														<a title="Categories" href="{{ route('admin.categories') }}">Categories</a>
													</li>
													<li class="menu-item">
														<a title="Products" href="{{ route('admin.products') }}">All Products</a>
													</li>
													<li class="menu-item">
														<a title="Manage Home Slider" href="{{ route('admin.homeslider') }}">Manage Home Slider</a>
													</li>
													<li class="menu-item">
														<a title="Manage Home Categories" href="{{ route('admin.homecategories') }}">Manage Home Categories</a>
													</li>
													<li class="menu-item">
														<a title="Sale Setting" href="{{ route('admin.sale') }}">Sale Setting</a>
													</li>
													<li class="menu-item">
														<a title="All Coupon" href="{{ route('admin.coupons') }}">All Coupon</a>
													</li>
													<li class="menu-item">
														<a title="All Orders" href="{{ route('admin.orders') }}">All Orders</a>
													</li>
													<li class="menu-item">
														<a title="Contact Message" href="{{ route('admin.contact') }}">Contact Message</a>
													</li>
													<li class="menu-item">
														<a title="Settings" href="{{ route('admin.settings') }}">Settings</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
													</li>
														<form id='logout-form' method="POST" action="{{ route('logout') }}">
															@csrf															
														</form>													
												</ul>
											</li>
										@else
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
													</li>
													<li class="menu-item" >
														<a title="My Orders" href="{{ route('user.orders') }}">My Orders</a>
													</li>
													<li class="menu-item" >
														<a title="Change Password" href="{{ route('user.changepassword') }}">Change Password</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
													</li>
														<form id='logout-form' method="POST" action="{{ route('logout') }}">
															@csrf															
														</form>														
												</ul>
											</li>
										@endif
									@else
										<li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">Login</a></li>
										<li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">Register</a></li>
									@endif
								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="{{ asset('assets/images/logo-top-1.png') }}" alt="mercado"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							@livewire('wishlist-count-component')
							
							@livewire('cart-count-component')

							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item ">
									<a href="/" class="{{ Request::path() === '/' ? 'btn btn-danger btn-rounded': '' }}">Home</a>
								</li>
								<li class="menu-item ">
									<a href="/about" class="{{ Request::path() === 'about' ? 'btn btn-danger btn-rounded': '' }}">About Us</a>
								</li>
								<li class="menu-item ">
									<a href="/shop" class="{{ Request::path() === 'shop' ? 'btn btn-danger btn-rounded': '' }}">Shop</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="{{ Request::path() === 'cart' ? 'btn btn-danger btn-rounded': '' }}">Cart</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="{{ Request::path() === 'checkout' ? 'btn btn-danger btn-rounded': '' }}">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="/contact-us" class="{{ Request::path() === 'contact-us' ? 'btn btn-danger btn-rounded': '' }}">Contact Us</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	{{ $slot }}

	@livewire('footer-component')
	
	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('assets/js/functions.js')}}"></script>
	<script src="{{ asset('assets/js/moment.min.js')}}"></script>
	<script src="{{ asset('assets/js/nouislider.min.js')}}"></script>
	<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{ asset('assets/select2/js/select2.min.js') }}"></script>		
	<script src="{{ asset('assets/js/tinymce.min.js')}}"></script>
	{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    @livewireScripts
	@stack('scripts')
</body>
</html>