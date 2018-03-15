<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from aaryaweb.info/html/stylexpo/stx001/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 03:58:29 GMT -->
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>Stylexpo</title>
    <!-- SEO Meta
      ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS
      ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/fotorama.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/responsive.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('assets/images/apple-touch-icon.html') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('assets/images/apple-touch-icon-72x72.html') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('assets/images/apple-touch-icon-114x114.html') }}">
</head>
<body class="homepage">
<div class="se-pre-con"></div>
<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
    <div class="nl-popup-main">
        <div class="nl-popup-inner">
            <div class="newsletter-inner">
                <span>Sign up & get 10% off</span>
                <h2 class="main_title">Subscribe Emails</h2>
                <form>
                    <input type="email" placeholder="Email Here...">
                    <button class="btn-black" title="Subscribe">Subscribe</button>
                </form>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
        </div>
    </div>
</div>
<div class="main">
@include('v1/components/headers/header')
@include('v1/partials/banner')
    <!-- CONTAIN START -->

    @yield('content')
    <!-- CONTAINER END -->
    @include('v1/components/footers/footer')
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.downCount.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/fotorama.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>
@yield('jsCustom')
<script>
    /* ------------ Newslater-popup JS Start ------------- */
    // $(window).load(function() {
    //     $.magnificPopup.open({
    //         items: {src: '#newslater-popup'},type: 'inline'}, 0);
    // });
    /* ------------ Newslater-popup JS End ------------- */
</script>
</body>
</html>
