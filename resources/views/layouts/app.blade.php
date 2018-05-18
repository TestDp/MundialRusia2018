<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Calendario Mundialista GyJ Aceros</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Calendario Mundialista GyJ Aceros" />
	<meta name="keywords" content="" />
	
		<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	

</head>
<body>

	<div class="fh5co-loader"></div>
	
    <div id="page">
        <nav class="fh5co-nav" role="navigation" style="background-image:url(images/header.jpg);">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="{{ url('/') }}"><img class="img-responsive" src="" alt=""></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="{{ url('/') }}">Inicio</a></li>
							<li><a href="{{ url('/') }}">Grupos</a></li>
							<li><a href="{{ url('/') }}">Calendario</a></li>
							<li><a href="{{ url('/') }}">Historia</a></li>
							<li><a href="{{ url('/') }}">Sedes</a></li>
							@if (Route::has('login'))
                                 @auth
							 <li class="btn-cta"><a href="{{ url('/home') }}"><span>Home</span></a></li>
							  @else
							<li class="btn-cta"><a href="{{ route('login') }}"><span>Iniciar Sesión</span></a></li>
							<li class="btn-cta"><a href="{{ route('register') }}"><span>Registrarse</span></a></li>
							@endauth
							 @endif
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

        <main class="py-4" style="background-image:url(images/gris.jpg);">
            @yield('content')
        </main>
		
			<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
				<img class="img-responsive" src="{{ asset('images/gyjfooter.png') }}" alt="">
				</div>
				<div class="col-md-4 col-md-push-1">
					<small style="font-family: 'bold2'; font-size: 20px; color: #fff;" class="block">servicioalcliente@gyj.com.co</small> 
				</div>

				<div class="col-md-4 col-md-push-1">
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.facebook.com/GYJEmpresasdeAcero/" target="_blank"><img class="img-responsive" src="{{ asset('images/FACE.png') }}"></img></a></li>
							<li><a href="https://twitter.com/GYJ_Oficial" target="_blank"><img class="img-responsive" src="{{ asset('images/TWITTER.png') }}"></img></a></li>
							<li><a href="https://www.youtube.com/channel/UCIdDwkE9gqnffzXGqPkiabg" target="_blank"><img class="img-responsive" src="{{ asset('images/YOU.png') }}"></img></a></li>
							<li><a href="https://plus.google.com/u/0/104883500440571217116" target="_blank"><img class="img-responsive" src="{{ asset('images/GOO.png') }}"></img></a></li>
							<li><a href="#"><img class="img-responsive" src="{{ asset('images/LI.png') }}"></img></a></li>
						</ul>
					</p>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
						<small style="font-family: 'bold2'; font-size: 20px; color: #fff;" class="block">Tel: 018000 126812</small> 
						<small style="font-family: 'bold2'; font-size: 20px; color: #fff;" class="block">Bogotá: 261 5890</small>
				</div>
			</div>

		</div>
	</footer>
		
    </div>
	
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ asset('js/jquery.countTo.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>
	
</body>
</html>
