<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:title" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:description" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:image" content="https://industry.dexignzone.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	<meta name="turbolinks-visit-control" content="reload">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- PAGE TITLE HERE -->
	<title>Industry - Factory & Industrial HTML Template</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- Google Font -->
	<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
	</style>

    @livewireStyles

    <!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugins.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css' ) }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('css/skin/skin-3.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/templete.css' ) }}">

	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/revolution.min.css') }}">

</head>
<body id="bg">
<div class="page-wraper roboto-condensed">
<div id="loading-area"></div>
    <!-- header -->
    <header class="site-header mo-left box-header header">
		<div class="top-bar text-black">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="dlab-topbar-left">
						<ul>
							<li><a href="about-1.html">About Us</a></li>
							<li><a href="privacy-policy.html">Refund Policy</a></li>
							<li><a href="help-desk.html">Help Desk</a></li>
						</ul>
					</div>
					<div class="dlab-topbar-right topbar-social">
						<ul>
							<li><a href="#" class="site-button-link facebook hover"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" class="site-button-link google-plus hover"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#" class="site-button-link twitter hover"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" class="site-button-link instagram hover"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" class="site-button-link linkedin hover"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#" class="site-button-link youtube hover"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div style="display: flex !important; align-items: center !important" class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion logo-dark">
						<a href="{{ url('') }}"><img src="images/logo.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
						<a href="{{ route('contact') }}" class="site-button radius-no">GET A QUOTE</a>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search ">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="ti-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header d-md-block d-lg-none">
							<a href="index.html"><img src="images/logo-3.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">
							<li class="active has-mega-menu"> <a href="{{ route('main') }}">Home<i class="fa fa-chevron-down"></i></a>
							</li>
							<li>
								<a href="javascript:;">Features<i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu tab-content">
									<li>
										<a href="javascript:;">Header Light <i class="fas fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="header-style-1.html">Header 1</a></li>
											<li><a href="header-style-2.html">Header 2</a></li>
											<li><a href="header-style-3.html">Header 3</a></li>
											<li><a href="header-style-4.html">Header 4</a></li>
											<li><a href="header-style-5.html">Header 5</a></li>
											<li><a href="header-style-6.html">Header 6</a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:;">Header Dark <i class="fas fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="header-style-dark-1.html">Header 1</a></li>
											<li><a href="header-style-dark-2.html">Header 2</a></li>
											<li><a href="header-style-dark-3.html">Header 3</a></li>
											<li><a href="header-style-dark-4.html">Header 4</a></li>
											<li><a href="header-style-dark-5.html">Header 5</a></li>
											<li><a href="header-style-dark-6.html">Header 6</a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:;">Footer <i class="fas fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="footer-1.html">Footer 1 </a></li>
											<li><a href="footer-2.html">Footer 2</a></li>
											<li><a href="footer-3.html">Footer 3</a></li>
											<li><a href="footer-4.html">Footer 4</a></li>
											<li><a href="footer-5.html">Footer 5</a></li>
											<li><a href="footer-6.html">Footer 6</a></li>
											<li><a href="footer-7.html">Footer 7</a></li>
											<li><a href="footer-8.html">Footer 8</a></li>
											<li><a href="footer-9.html">Footer 9</a></li>
											<li><a href="footer-10.html">Footer 10</a></li>
											<li><a href="footer-11.html">Footer 11</a></li>
											<li><a href="footer-12.html">Footer 12</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="has-mega-menu"> <a href="javascript:;">Pages<i class="fas fa-chevron-down"></i></a>
								<ul class="mega-menu">
									<li>
										<a href="javascript:;">Pages</a>
										<ul>
											<li><a href="about-1.html">About us 1</a></li>
											<li><a href="about-2.html">About us 2</a></li>
											<li><a href="services-1.html">Services 1</a></li>
											<li><a href="services-2.html">Services 2</a></li>
											<li><a href="services-details.html">Services Details</a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:;">Pages</a>
										<ul>
											<li><a href="team-1.html">Team 1</a></li>
											<li><a href="team-2.html">Team 2</a></li>
											<li><a href="faq-1.html">Faqs 1</a></li>
											<li><a href="faq-2.html">Faqs 2</a></li>
											<li><a href="portfolio-grid-2.html">portfolio Grid 2</a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:;">Pages</a>
										<ul>
											<li><a href="portfolio-grid-3.html">Portfolio Grid 3</a></li>
											<li><a href="portfolio-grid-4.html">Portfolio Grid 4</a></li>
											<li><a href="portfolio-details.html">Portfolio Details</a></li>
											<li><a href="error-403.html">Error 403</a></li>
											<li><a href="error-404.html">Error 404</a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:;">Pages</a>
										<ul>
											<li><a href="error-405.html">Error 405</a></li>
											<li><a href="coming-soon-1.html">Coming Soon 1</a></li>
											<li><a href="coming-soon-2.html">Coming Soon 2</a></li>
											<li><a href="help-desk.html">Help Desk</a></li>
											<li><a href="privacy-policy.html">Privacy Policy</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Shop<i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="shop.html">Shop</a></li>
									<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
									<li><a href="shop-product-details.html">Product Details</a></li>
									<li><a href="shop-cart.html">Cart</a></li>
									<li><a href="shop-wishlist.html">Wishlist</a></li>
									<li><a href="shop-checkout.html">Checkout</a></li>
									<li><a href="shop-login.html">Login</a></li>
									<li><a href="shop-register.html">Register</a></li>
								</ul>
							</li>
							<li class="has-mega-menu"> <a href="javascript:;">Blog<i class="fas fa-chevron-down"></i></a>
								<ul class="mega-menu">
									<li> <a href="javascript:;">Blog</a>
										<ul>
											<li><a href="blog-half-img.html">Half image</a></li>
											<li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li>
											<li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li>
											<li><a href="blog-large-img.html">Large image</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog</a>
										<ul>
											<li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li>
											<li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li>
											<li><a href="blog-grid-2.html">Grid 2</a></li>
											<li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog</a>
										<ul>
											<li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li>
											<li><a href="blog-grid-3.html">Grid 3</a></li>
											<li><a href="blog-grid-3-sidebar.html">Grid 3 sidebar</a></li>
											<li><a href="blog-grid-3-sidebar-left.html">Grid 3 sidebar left</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog</a>
										<ul>
											<li><a href="blog-grid-4.html">Grid 4</a></li>
											<li><a href="blog-single.html">Single</a></li>
											<li><a href="blog-single-sidebar.html">Single sidebar</a></li>
											<li><a href="blog-single-left-sidebar.html">Single sidebar right</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="has-mega-menu"> <a href="javascript:;">Element<i class="fas fa-chevron-down"></i></a>
								<ul class="mega-menu">
									<li><a href="javascript:;">Element</a>
										<ul>
											<li><a href="shortcode-buttons.html"><i class="ti-mouse"></i> Buttons</a></li>
											<li><a href="shortcode-icon-box-styles.html"><i class="ti-layout-grid2"></i> Icon box styles</a></li>
											<li><a href="shortcode-pricing-table.html"><i class="ti-layout-grid2-thumb"></i> Pricing table</a></li>
											<li><a href="shortcode-toggles.html"><i class="ti-layout-accordion-separated"></i> Toggles</a></li>
											<li><a href="shortcode-team.html"><i class="ti-user"></i> Team</a></li>
											<li><a href="shortcode-animation-effects.html"><i class="ti-layers-alt"></i> Animation Effects</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Element</a>
										<ul>
											<li><a href="shortcode-carousel-sliders.html"><i class="ti-layout-slider"></i> Carousel sliders</a></li>
											<li><a href="shortcode-image-box-content.html"><i class="ti-image"></i> Image box content</a></li>
											<li><a href="shortcode-tabs.html"><i class="ti-layout-tab-window"></i> Tabs</a></li>
											<li><a href="shortcode-counters.html"><i class="ti-timer"></i> Counters</a></li>
											<li><a href="shortcode-shop-widgets.html"><i class="ti-shopping-cart"></i> Shop Widgets</a></li>
											<li><a href="shortcode-filters.html"><i class="ti-check-box"></i> Gallery Filters</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Element</a>
										<ul>
											<li><a href="shortcode-accordians.html"><i class="ti-layout-accordion-list"></i> Accordians</a></li>
											<li><a href="shortcode-dividers.html"><i class="ti-layout-list-post"></i> Dividers</a></li>
											<li><a href="shortcode-images-effects.html"><i class="ti-layout-media-overlay"></i> Images effects</a></li>
											<li><a href="shortcode-testimonials.html"><i class="ti-comments"></i> Testimonials</a></li>
											<li><a href="shortcode-pagination.html"><i class="ti-more"></i> Pagination</a></li>
											<li><a href="shortcode-alert-box.html"><i class="ti-alert"></i> Alert box</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Element</a>
										<ul>
											<li><a href="shortcode-icon-box.html"><i class="ti-layout-media-left-alt"></i> Icon Box</a></li>
											<li><a href="shortcode-list-group.html"><i class="ti-list"></i> List group</a></li>
											<li><a href="shortcode-title-separators.html"><i class="ti-layout-line-solid"></i> Title Separators</a></li>
											<li><a href="shortcode-all-widgets.html"><i class="ti-widgetized"></i> Widgets</a></li>
											<li><a href="shortcode-carousel-sliders.html"><i class="ti-layout-slider"></i> Carousel sliders</a></li>
											<li><a href="shortcode-image-box-content.html"><i class="ti-image"></i> Image box content</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Contact Us<i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="contact-1.html">Contact us 1</a></li>
									<li><a href="contact-2.html">Contact us 2</a></li>
									<li><a href="contact-3.html">Contact us 3</a></li>
									<li><a href="contact-4.html">Contact us 4</a></li>
								</ul>
							</li>
						</ul>
						<div class="dlab-social-icon">
							<ul>
								<li><a class="site-button facebook circle-sm outline fab fa-facebook-f" href="javascript:void(0);"></a></li>
								<li><a class="site-button twitter circle-sm outline fab fa-twitter" href="javascript:void(0);"></a></li>
								<li><a class="site-button linkedin circle-sm outline fab fa-linkedin-in" href="javascript:void(0);"></a></li>
								<li><a class="site-button instagram circle-sm outline fab fa-instagram" href="javascript:void(0);"></a></li>
							</ul>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    @yield('content')
    <!-- Content END -->
	<!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top" style="background-image:url(images/background/bg2.png); background-size: contain;">
            <div class="container">
                <div class="row">
					<div class="col-md-3 col-5 col-xl-2 col-lg-2 col-sm-6 footer-col-4">
                        <div class="widget widget_services border-0">
                            <h5 class="footer-title text-white">Company</h5>
                            <ul>
                                <li><a href="about-1.html">About Us</a></li>
                                <li><a href="blog-grid-2.html">Blog</a></li>
                                <li><a href="services-1.html">Services</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="portfolio-details.html">Projects </a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-3 col-7 col-xl-2 col-lg-3 col-sm-6 footer-col-4">
                        <div class="widget widget_services border-0">
                            <h5 class="footer-title text-white">Useful Link</h5>
                            <ul>
								<li><a href="help-desk.html">Help Desk </a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="contact-1.html">Contact</a></li>
                                <li><a href="portfolio-details.html">Portfolio</a></li>
                                <li><a href="team-1.html">Team</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-6 col-xl-4 col-lg-3 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h5 class="footer-title text-white ">Contact us</h5>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>address</strong> demo address #8901 Marmora Road Chi Minh City, Vietnam </li>
                                <li><i class="ti-mobile"></i><strong>phone</strong>0800-123456 (24/7 Support Line)</li>
								<li><i class="ti-email"></i><strong>email</strong>info@example.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4 col-lg-4 col-sm-6 footer-col-4 ">
                        <div class="widget">
                            <h5 class="footer-title text-white">Subscribe To Our Newsletter</h5>
							<p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the..</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required"  class="form-control" placeholder="Your Email Id" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button btnhover20 radius-xl">Subscribe</button>
										</span>
									</div>
								</form>
							</div>
							<ul class="list-inline m-a0">
								<li><a href="javascript:void(0);" class="site-button facebook circle "><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button google-plus circle "><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button linkedin circle "><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button instagram circle "><i class="fab fa-instagram"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button twitter circle "><i class="fab fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left "> <span>Copyright © 2022 <a href="https://dexignzone.com/" target="_blank">DexignZone</a></span> </div>
                    <div class="col-md-6 col-sm-6 text-right ">
						<div class="widget-link ">
							<ul>
								<li><a href="about-2.html"> About</a></li>
								<li><a href="help-desk.html"> Help Desk</a></li>
								<li><a href="privacy-policy.html"> Privacy Policy</a></li>
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <button class="scroltop style2 radius" type="button"><i class="fas fa-arrow-up"></i></button>
</div>


<script type="module">
    // import * as Turbo from 'https://cdn.skypack.dev/@hotwired/turbo'
    //
    // const loading = document.querySelector('#loading-area')
    //
	// console.log(Turbo);

    if(loading) {
        loading.style.display = 'none'
    }
</script>

<!-- JAVASCRIPT FILES ========================================= -->

<script src="{{ asset('js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('plugins/wow/wow.js') }}"></script><!-- WOW JS -->

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js' ) }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js' ) }}"></script><!-- FORM JS -->
<script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js' ) }}"></script><!-- FORM JS -->
<script src="{{ asset('plugins/magnific-popup/magnific-popup.js' ) }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('plugins/counter/waypoints-min.js' ) }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('plugins/counter/counterup.min.js' ) }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('plugins/imagesloaded/imagesloaded.js' ) }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('plugins/masonry/masonry-3.1.4.js' ) }}"></script><!-- MASONRY -->
<script src="{{ asset('plugins/masonry/masonry.filter.js' ) }}"></script><!-- MASONRY -->
<script src="{{ asset('plugins/owl-carousel/owl.carousel.js' ) }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('plugins/lightgallery/js/lightgallery-all.min.js' ) }}"></script><!-- Lightgallery -->
<script src="{{ asset('plugins/scroll/scrollbar.min.js' ) }}"></script><!-- scroll -->
<script src="{{ asset('js/custom.js' ) }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('js/dz.carousel.min.js' ) }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('plugins/countdown/jquery.countdown.js' ) }}"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="{{ asset('js/dz.ajax.js' ) }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('plugins/rangeslider/rangeslider.js' ) }}" ></script><!-- Rangeslider -->

<script src="{{ asset('js/jquery.lazy.min.js' ) }}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js' ) }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js' ) }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js' ) }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js' ) }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js' ) }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js' ) }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js' ) }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js' ) }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js' ) }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js' ) }}"></script>
<script src="{{ asset('js/rev.slider.js ') }}"></script>
<script>
    jQuery(document).ready(function() {
        'use strict';
        dz_rev_slider_14();
        $('.lazy').Lazy();
    });	/*ready*/
</script>
<!-- Livewire script files -->
@livewireScripts
<script
    defer
    src="{{ asset('js/livewire-turbolinks.js') }}"
    data-turbolinks-eval="false"
    data-turbo-eval="false"></script>
@stack('scripts')
</body>
</html>
