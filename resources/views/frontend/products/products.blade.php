@extends('layouts.app')
@section('content')
	<div>
		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('assets/frontend') }}/images/bg/2.jpg) no-repeat scroll center center / cover ;">
			<div class="ht__bradcaump__wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="bradcaump__inner text-center">
								<h2 class="bradcaump-title">Shop Page</h2>
								<nav class="bradcaump-inner">
									<a class="breadcrumb-item" href="index.html">Home</a>
									<span class="brd-separetor">/</span>
									<span class="breadcrumb-item active">Shop Page</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Bradcaump area -->
		<!-- Start Our Product Area -->
		<section class="htc__product__area shop__page ptb--130 bg__white">
			<div class="container">
				<div class="htc__product__container">
					<!-- Start Product MEnu -->
					<div class="row">
						<div class="col-md-12">
							<div class="filter__menu__container">
								<div class="product__menu">
									<button data-filter="*" class="is-checked">All</button>
									<button data-filter=".cat--1">Furnitures</button>
									<button data-filter=".cat--2">Bags</button>
									<button data-filter=".cat--3">Decoration</button>
									<button data-filter=".cat--4">Accessories</button>
								</div>
								<div class="filter__box">
									<a class="filter__menu" href="#">filter</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Filter Menu -->
					<div class="filter__wrap">
						<div class="filter__cart">
							<div class="filter__cart__inner">
								<div class="filter__menu__close__btn">
									<a href="#"><i class="zmdi zmdi-close"></i></a>
								</div>
								<div class="filter__content">
									<!-- Start Single Content -->
									<div class="fiter__content__inner">
										<div class="single__filter">
											<h2>Sort By</h2>
											<ul class="filter__list">
												<li><a href="#default">Default</a></li>
												<li><a href="#accessories">Accessories</a></li>
												<li><a href="#bags">Bags</a></li>
												<li><a href="#chair">Chair</a></li>
												<li><a href="#decoration">Decoration</a></li>
												<li><a href="#fashion">Fashion</a></li>
											</ul>
										</div>
										<div class="single__filter">
											<h2>Size</h2>
											<ul class="filter__list">
												<li><a href="#xxl">XXL</a></li>
												<li><a href="#xl">XL</a></li>
												<li><a href="#x">X</a></li>
												<li><a href="#l">L</a></li>
												<li><a href="#m">M</a></li>
												<li><a href="#s">S</a></li>
											</ul>
										</div>
										<div class="single__filter">
											<h2>Tags</h2>
											<ul class="filter__list">
												<li><a href="#">All</a></li>
												<li><a href="#">Accessories</a></li>
												<li><a href="#">Bags</a></li>
												<li><a href="#">Chair</a></li>
												<li><a href="#">Decoration</a></li>
												<li><a href="#">Fashion</a></li>
											</ul>
										</div>
										<div class="single__filter">
											<h2>Price</h2>
											<ul class="filter__list">
												<li><a href="#">$0.00 - $50.00</a></li>
												<li><a href="#">$50.00 - $100.00</a></li>
												<li><a href="#">$100.00 - $150.00</a></li>
												<li><a href="#">$150.00 - $200.00</a></li>
												<li><a href="#">$300.00 - $500.00</a></li>
												<li><a href="#">$500.00 - $700.00</a></li>
											</ul>
										</div>
										<div class="single__filter">
											<h2>Color</h2>
											<ul class="filter__list sidebar__list">
												<li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black</a>
												</li>
												<li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue</a>
												</li>
												<li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown</a>
												</li>
												<li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red</a></li>
												<li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange</a></li>
											</ul>
										</div>
									</div>
									<!-- End Single Content -->
								</div>
							</div>
						</div>
					</div>
					<!-- End Filter Menu -->
					<!-- End Product MEnu -->
					<div class="row">
						<div class="product__list another-product-style">
							<!-- Start Single Product -->
							@foreach ($products as $product)
								<div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
									<div class="product foo">
										<div class="product__inner">
											<div class="pro__thumb">
												<a href="#">
													<img width="150px" height="200px" src="{{ asset('storage/products') . '/' . $product->featured_image }}" alt="product images">
												</a>
											</div>
											<div class="product__hover__info">
												<ul class="product__action">
													<li><a data-toggle="modal" data-target="#productModal-{{ $product->id }}" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
													<li>

														<form action="{{ route('cart.store', $product->id) }}" method="get">
															@csrf
															<input type="hidden" name="product_qty" value="1">
															<button style="border: none;background-color: transparent;" type="submit"><span class="ti-shopping-cart" style="font-size: 19px;"></span></button>
														</form>
													</li>

													<li><a title="Wishlist" href="{{ route('wishlist.store', $product->id) }}"><span class="ti-heart"></span></a></li>
												</ul>
											</div>
										</div>
										<div class="product__details">
											<h2><a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a></h2>
											<ul class="product__price">
												<li class="old__price">${{ $product->price }}.00</li>
												<li class="new__price">${{ $product->sale_price }}.00</li>
											</ul>
										</div>
									</div>
								</div>
								<div id="quickview-wrapper">
									<!-- Modal -->
									<div class="modal fade" id="productModal-{{ $product->id }}" tabindex="-1" role="dialog">
										<div class="modal-dialog modal__container" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<div class="modal-product">
														<!-- Start product images -->
														<div class="product-images">
															<div class="main-image images">
																<img style="width: 600px" height="600px" alt="big images" src="{{ asset('storage/products/') . '/' . $product->featured_image }}">
															</div>
														</div>
														<!-- end product images -->
														<form action="{{ route('cart.store', $product->id) }}" method="get" class="product-info">
															@csrf
															<h1>{{ $product->title }}</h1>

															<div class="price-box-3">
																<div class="s-price-box">
																	<span class="new-price">${{ $product->sale_price }}.00</span>
																	<span class="old-price">${{ $product->price }}.00</span>
																</div>
															</div>
															<div class="quick-desc">
																{{ $product->excerpt }}
															</div>
															<div class="select__color">
																<h2 style="margin-right: 5px">Select color </h2>
																<select class="form-control" style="width: 18%" name="color" id="">
																	@foreach ($product->colors as $color)
																		<option value="{{ $color->name }}">{{ $color->name }}</option>
																	@endforeach
																</select>
															</div>
															<div class="select__size">
																<h2 style="margin-right: 5px">Select size </h2>
																<select class="form-control" style="width: 18%" name="size" id="">
																	@foreach ($product->sizes as $size)
																		<option value="{{ $size->name }}">{{ $size->name }}</option>
																	@endforeach
																</select>
															</div>
															<div class="product-action-wrap">
																<div class="prodict-statas"><span>Quantity :</span></div>
																<div class="product-quantity">
																	<div class="product-quantity">
																		<div class="cart-plus-minus">
																			<input class="cart-plus-minus-box" type="text" name="product_qty" value="1">
																		</div>
																	</div>
																</div>
															</div>
															<div class="social-sharing">
																<div class="widget widget_socialsharing_widget">
																	<h3 class="widget-title-modal">Share this product</h3>
																	<ul class="social-icons">
																		<li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
																		<li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a>
																		</li>
																		<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
																		<li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
																		<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
																	</ul>
																</div>
															</div>
															<div class="addtocart-btn">
																<button type="submit">Add to cart</button>
															</div>
														</form><!-- .product-info -->
													</div><!-- .modal-product -->
												</div><!-- .modal-body -->
											</div><!-- .modal-content -->
										</div><!-- .modal-dialog -->
									</div>
									<!-- END Modal -->
								</div>
							@endforeach

							<!-- End Single Product -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Product Area -->
	</div>
@endsection
