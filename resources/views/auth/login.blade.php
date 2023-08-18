<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	<meta name="theme-color" content="#2196f3">
	<meta name="author" content="DexignZone" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
	<meta name="description" content=""/>
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="error.html"/>
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('template/')}}/assets/images/favicon.png" />
	<title>Report Apps</title>
    <link rel="stylesheet" href="{{asset('template/')}}/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('template/')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('template/')}}/assets/vendor/wow/css/libs/animate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>
<body class="gradiant-bg">
<div class="page-wraper">
	<div class="loader-screen" id="splashscreen">
		<div class="main-screen">
			<div class="circle-2"></div>
			<div class="circle-3"></div>
			<div class="circle-4"></div>
			<div class="circle-5"></div>
			<div class="circle-6"></div>
			<div class="brand-logo">
				<div class="logo">
					<img src="{{asset('template/')}}/assets/images/vector.svg" alt="spoon-1" class="wow bounceInDown">
				</div>
				<div id="loading-area" class="loading-page-4">
				<div class="loading-inner">
					<div class="load-text">
						<span data-text="R" class="text-load">R</span>
                        <span data-text="E" class="text-load">E</span>
                        <span data-text="P" class="text-load">P</span>
                        <span data-text="O" class="text-load">O</span>
                        <span data-text="R" class="text-load">R</span>
                        <span data-text="T" class="text-load">T</span>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="content-body">
		<div class="container vh-100">
			<div class="welcome-area">
				<div class="bg-image bg-image-overlay" style="background-image: url(template/assets/images/login/pic1.jpg);"></div>
				<div class="join-area">
					<a href="register.html" class="btn btn-primary btn-block mb-3">BUAT AKUN</a>
					<a href="login.html" class="btn btn-light btn-block mb-3">MASUK</a>
					<a href="forgot-password.html" class="text-light text-center d-block">Lupa Password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="{{asset('template/')}}/assets/js/jquery.js"></script>
<script src="{{asset('template/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('template/')}}/assets/vendor/wow/dist/wow.min.js"></script>
<script src="{{asset('template/')}}/assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="{{asset('template/')}}/assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="{{asset('template/')}}/assets/js/settings.js"></script>
<script src="{{asset('template/')}}/assets/js/custom.js"></script>
<script>
    new WOW().init();
    var wow = new WOW(
    {
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       50,          // distance to the element when triggering the animation (default is 0)
      mobile:       false       // trigger animations on mobile devices (true is default)
    });
    wow.init();
</script>
</body>

</html>
