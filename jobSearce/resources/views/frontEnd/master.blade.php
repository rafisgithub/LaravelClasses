<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/jobhere/jobhere-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:22:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home One || @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- All css files are included here
    ============================================ -->
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.min.css">

    <!-- This core.css file contents all plugins css file
    ============================================ -->
    <!-- Nice select css
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/nice-select.css">
    <!-- This core.css file contents all plugins css file
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/core.css">

    <!-- Theme shortcodes/elements style
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/shortcode/shortcodes.css">

    <!--  Theme main style
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/style.css">

    <!-- Color CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/plugins/color.css">

    <!-- Responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/responsive.css">

    <!-- Modernizr JS -->
    <script src="{{asset('frontEndAsset')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--Main Wrapper Start-->
<div class="as-mainwrapper">
    <!--Header Area Start-->
   @include('frontEnd.include.header')
    @yield('content')
   @include('frontEnd.include.footer')
    <!-- End of Footer area -->
</div>
<!--End of Main Wrapper Area-->

<!--Start of Login Form-->

<!--End of Login Form-->
<!--Start of Login Form-->

<!--End of Login Form-->


<!-- jquery latest version
========================================================= -->
<script src="{{asset('frontEndAsset')}}/js/vendor/jquery-1.12.4.min.js"></script>

<!-- Bootstrap framework js
========================================================= -->
<script src="{{asset('frontEndAsset')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontEndAsset')}}/js/popper.min.js"></script>

<!-- Owl Carousel js
========================================================= -->
<script src="{{asset('frontEndAsset')}}/js/owl.carousel.min.js"></script>

<!-- Jquery nice select js
========================================================= -->
<script src="{{asset('frontEndAsset')}}/js/jquery.nice-select.min.js"></script>

<!-- nivo slider js
========================================================= -->
<script src="lib/nivo-slider/js/jquery.nivo.slider.js"></script>
<script src="lib/nivo-slider/home.js"></script>

<!-- Js plugins included in this file
========================================================= -->
<script src="{{asset('frontEndAsset')}}/js/plugins.js"></script>

<!-- Video Player JS
========================================================= -->
<script src="{{asset('frontEndAsset')}}/js/jquery.mb.YTPlayer.js"></script>

<!-- AJax Mail JS
========================================================= -->
<script src="{{asset('frontEndAsset')}}/js/ajax-mail.js"></script>

<!-- Mail Chimp JS
========================================================= -->
<script src="{{asset('frontEndAsset')}}/js/jquery.ajaxchimp.min.js"></script>

<!-- Waypoint Js
========================================================= -->
<script src="{{asset('frontEndAsset')}}/js/waypoints.min.js"></script>

<!-- Main js file contents all jQuery plugins activation
========================================================= -->
<script src="{{asset('frontEndAsset')}}/js/main.js"></script>

</body>

<!-- Mirrored from htmldemo.net/jobhere/jobhere-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:23:33 GMT -->
</html>
