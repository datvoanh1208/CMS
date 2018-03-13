<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title> @yield('title')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="fixed-left">
<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
<!-- Begin page -->
<div id="wrapper">
@include('common/v1.left')
    <!-- Start right Content here -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @include('common/v1.header')
            <div class="page-content-wrapper ">
                <div class="container-fluid">
                    @include('common/v1.breadcrumb')
                    @yield('content')
                </div><!-- container -->
            </div> <!-- Page content Wrapper -->
        </div> <!-- content -->
        @include('common/v1.footer')
    </div>
    <!-- End Right content here -->
</div>
<!-- END wrapper -->
<!-- jQuery  -->
<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/detect.js') }}"></script>
<script src="{{ URL::asset('assets/js/fastclick.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ URL::asset('assets/js/waves.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.scrollTo.min.js') }}"></script>
<!-- App js -->
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
</body>
</html>