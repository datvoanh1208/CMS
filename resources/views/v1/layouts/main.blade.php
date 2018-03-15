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
    <!-- CSS
      ================================================== -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fotorama.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.html">
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

    @include('v1/partials/subBanner')

    @yield('content')



    <!-- CONTAINER END -->

    <!-- News Letter Start -->
    <section>
        <div class="newsletter">
            <div class="container">
                <div class="newsletter-inner center-sm">
                    <div class="row">
                        <div class=" col-xl-10 col-md-12 push-xl-1">
                            <div class="newsletter-bg">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="newsletter-title">
                                            <h2 class="main_title">Subscribe to our newsletter</h2>
                                            <div class="sub-title">Sign up for newsletter and Get upto 50% off</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <form>
                                            <div class="newsletter-box">
                                                <input type="email" placeholder="Email Here...">
                                                <button title="Subscribe" class="btn-color">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Letter End -->

    @include('v1/components/footers/footer')
</div>
<script src="assets/js/jquery-1.12.3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.downCount.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/fotorama.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>

<script>
    /* ------------ Newslater-popup JS Start ------------- */
    $(window).load(function() {
        $.magnificPopup.open({
            items: {src: '#newslater-popup'},type: 'inline'}, 0);
    });
    /* ------------ Newslater-popup JS End ------------- */
</script>

</body>

<!-- Mirrored from aaryaweb.info/html/stylexpo/stx001/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 04:02:30 GMT -->
</html>
