<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UAm-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Argroup.Az - Əsas səhifə" />
	<meta property="og:title" content="Argroup.Az - Əsas səhifə" />
	<meta property="og:description" content="Argroup.Az - Əsas səhifə" />
{{--	<meta property="og:image" content="https://industry.dexignzone.com/xhtml/social-image.png" />--}}
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />

	<!-- PAGE TITLE HERE -->
	<title>ARgroup.az</title>

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
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset('css/skin/skin-2.css' ) }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/templete.css' ) }}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/revolution.min.css') }}">

    <style>
        .completedx{
            color: ghostwhite;
            position: absolute;
            right: -1px;
            border-bottom-left-radius: 5px;
            top: 0px;
            background: #209f65cf;
            padding: 2px;
            font-size: 12px;
        }
        .continuingx{
            color: ghostwhite;
            position: absolute;
            right: -1px;
            border-bottom-left-radius: 5px;
            top: 0px;
            background: #939f20cf;
            padding: 2px;
            font-size: 12px;
        }

        .clang{
            background: lightsteelblue;
            position: absolute;

        }
    </style>

</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
    @include('inc.header')

    @yield('content')
	<!-- Footer -->
    @include('inc.footer')
    <!-- Footer End -->
    <button class="scroltop style1 radius" type="button"><i class="fas fa-arrow-up"></i></button>
</div>

<!-- Livewire script files -->
@livewireScripts

<script>
    const loading = document.querySelector('#loading-area')

    if(loading) loading.style.display = 'none'
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

@yield('scripts')
</body>
</html>
