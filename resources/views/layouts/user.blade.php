<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tropisianimal">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>TROPISIANIMAL</title>
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('assets_user/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_user/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_user/css/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('assets_user/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_user/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    @yield('style')

</head>
<body data-spy="scroll" data-target=".fixed-top">

<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<!-- NAVBAR START -->
@include('layouts.includes_user.navbar')
<!-- NAVBAR END -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        @yield('content')
    </div>
</section>
<!-- content -->

<!-- FOOTER START -->
@include('layouts.includes_user.footer')
<!-- FOOTER END -->

<!-- COPYRIGHT START-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2022</p>
            </div> 
        </div> 
    </div> 
</div> 
<!-- COPYRIGHT END -->
    
    	
    <!-- Scripts -->
    <script src="{{ asset('assets_user/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('assets_user/js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('assets_user/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('assets_user/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('assets_user/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('assets_user/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('assets_user/js/morphext.min.js') }}"></script> <!-- Morphtext rotating text in the header -->
    <script src="{{ asset('assets_user/js/isotope.pkgd.min.js') }}"></script> <!-- Isotope for filter -->
    <script src="{{ asset('assets_user/js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('assets_user/js/scripts.js') }}"></script> <!-- Custom scripts -->
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>
</html>