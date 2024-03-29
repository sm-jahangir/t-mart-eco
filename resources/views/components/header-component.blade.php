<div>

	<!-- Start Header Style -->
	<header id="header" class="htc-header header--3 bg__white">
		<!-- Start Mainmenu Area -->
		<div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
						<div class="logo">
							<a href="/">
								<img src="{{ asset('assets/frontend') }}/images/logo/online-store-logo-1.png" alt="logo">
							</a>
						</div>
					</div>
					<!-- Start MAinmenu Ares -->
					<div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
						<nav class="mainmenu__nav hidden-xs hidden-sm">
							<ul class="main__menu">
								<li class="drop"><a href="{{ url('/') }}">Home</a></li>
								<li class="drop"><a href="blog.html">Blog</a>
									<ul class="dropdown">
										<li><a href="blog.html">blog 3 column</a></li>
										<li><a href="blog-details.html">Blog details</a></li>
									</ul>
								</li>
								<li class="drop"><a href="{{ route('products.index') }}">Shop</a></li>
								<li><a href="{{ url('contact') }}">contact</a></li>
								<!-- End Single Mega MEnu -->
							</ul>
							</li>
							</ul>
						</nav>
						<div class="mobile-menu clearfix visible-xs visible-sm">
							<nav id="mobile_dropdown">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="#">portfolio</a>
										<ul>
											<li><a href="portfolio-card-box-2.html">portfolio</a></li>
											<li><a href="single-portfolio.html">Single portfolio</a></li>
										</ul>
									</li>
									<li><a href="blog.html">blog</a>
										<ul>
											<li><a href="{{ url('/blog') }}">blog 3 column</a></li>
											<li><a href="{{ url('single-blog') }}">Blog details</a></li>
										</ul>
									</li>
									<li><a href="#">pages</a>
										<ul>
											<li><a href="about.html">about</a></li>
											<li><a href="customer-review.html">customer review</a></li>
											<li><a href="{{ url('shop') }}">shop</a></li>
											<li><a href="shop-sidebar.html">shop sidebar</a></li>
											<li><a href="product-details.html">product details</a></li>
											<li><a href="cart.html">cart</a></li>
											<li><a href="wishlist.html">wishlist</a></li>
											<li><a href="checkout.html">checkout</a></li>
											<li><a href="team.html">team</a></li>
											<li><a href="login-register.html">login & register</a></li>
										</ul>
									</li>
									<li><a href="contact.html">contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- End MAinmenu Ares -->
					<div class="col-md-2 col-sm-4 col-xs-3">
						<ul class="menu-extra">
							<li class="search search__open hidden-xs"><span class="ti-search"></span></li>
							@if (Auth::user())
								<li><a href="/user/dashboard"><span>Dashboard</span></a></li>
							@else
								<li><a href="/login"><span class="ti-user"></span></a></li>
							@endif
							<li class="cart__menu"><span class="ti-shopping-cart"></span></li>
							<li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
						</ul>
					</div>
				</div>
				<div class="mobile-menu-area"></div>
			</div>
		</div>
		<!-- End Mainmenu Area -->
	</header>
	<!-- End Header Style -->

	<div class="body__overlay"></div>
	<!-- Start Offset Wrapper -->
	<div class="offset__wrapper">
		<!-- Start Search Popap -->
		<div class="search__area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="search__inner">
							<form action="#" method="get">
								<input placeholder="Search here... " type="text">
								<button type="submit"></button>
							</form>
							<div class="search__close__btn">
								<span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Search Popap -->
		<!-- Start Offset MEnu -->
		<div class="offsetmenu">
			<div class="offsetmenu__inner">
				<div class="offsetmenu__close__btn">
					<a href="#"><i class="zmdi zmdi-close"></i></a>
				</div>
				<div class="off__contact">
					<div class="logo">
						<a href="index.html">
							<img src="{{ asset('assets/frontend') }}/images/logo/online-store-logo-1.png" alt="logo">
						</a>
					</div>
					<p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut
						labore.</p>
				</div>
				<ul class="sidebar__thumd">
					<li><a href="#"><img src="{{ asset('assets/frontend') }}/images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
					<li><a href="#"><img src="{{ asset('assets/frontend') }}/images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
					<li><a href="#"><img src="{{ asset('assets/frontend') }}/images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
					<li><a href="#"><img src="{{ asset('assets/frontend') }}/images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
					<li><a href="#"><img src="{{ asset('assets/frontend') }}/images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
					<li><a href="#"><img src="{{ asset('assets/frontend') }}/images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
					<li><a href="#"><img src="{{ asset('assets/frontend') }}/images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
					<li><a href="#"><img src="{{ asset('assets/frontend') }}/images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
				</ul>
				<div class="offset__widget">
					<div class="offset__single">
						<h4 class="offset__title">Language</h4>
						<ul>
							<li><a href="#"> Engish </a></li>
							<li><a href="#"> French </a></li>
							<li><a href="#"> German </a></li>
						</ul>
					</div>
					<div class="offset__single">
						<h4 class="offset__title">Currencies</h4>
						<ul>
							<li><a href="#"> USD : Dollar </a></li>
							<li><a href="#"> EUR : Euro </a></li>
							<li><a href="#"> POU : Pound </a></li>
						</ul>
					</div>
				</div>
				<div class="offset__sosial__share">
					<h4 class="offset__title">Follow Us On Social</h4>
					<ul class="off__soaial__link">
						<li><a class="bg--twitter" href="#" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
						</li>

						<li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

						<li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
						</li>

						<li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

						<li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Offset MEnu -->
		<!-- Start Cart Panel -->
		<div class="shopping__cart">
			<div class="shopping__cart__inner">
				<div class="offsetmenu__close__btn">
					<a href="#"><i class="zmdi zmdi-close"></i></a>
				</div>
				<div class="shp__cart__wrap">

					@foreach (Cart::content() as $row)
						<div class="shp__single__product">
							<div class="shp__pro__thumb">
								<a href="#">
									<img src="{{ $row->options->has('image') ? asset('storage/products/') . '/' . $row->options->image : "asset('assets/frontend/images/product/4.png')" }}" alt="product images">
								</a>
							</div>
							<div class="shp__pro__details">
								<h2><a href="product-details.html">{{ $row->name }}</a></h2>
								<span class="quantity">QTY: {{ $row->qty }}</span>
								<span class="shp__price">${{ $row->price }}.00</span>
							</div>
							<div class="remove__btn">
								<form action="{{ route('cart.remove', $row->rowId) }}" method="POST">
									@method('DELETE')
									@csrf
									<button type="submit" title="Remove this item" class="btn btn-primary btn-sm"><i class="zmdi zmdi-close"></i></button>
								</form>

							</div>

						</div>
					@endforeach
				</div>
				<ul class="shoping__total">
					<li class="subtotal">Subtotal:</li>
					<li class="total__price">$<?php echo Cart::subtotal(); ?></li>
				</ul>
				<ul class="shopping__btn">
					<li><a href="{{ url('/cart') }}">View Cart</a></li>
					<li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
				</ul>
			</div>
		</div>
		<!-- End Cart Panel -->
	</div>
	<!-- End Offset Wrapper -->
</div>
