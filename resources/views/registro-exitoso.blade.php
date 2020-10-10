<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link href="css/fontawesome.css" rel="stylesheet">
<link href="css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css\style2.css">
<link rel="stylesheet" href="css\main-color.css" id="colors">

</head>

<body class="transparent-header">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="/inicio"><img src="images\logo_cuxeya.png" data-sticky-logo="images/logo_cuxeya.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a href="/inicio">Inicio</a></li>
						<li><a href="#">Explorar</a>
							<ul>
								<li><a href="/todas-las-ayudas">Todas las ayudas</a></li>
								<li><a href="/aviso-de-privacidad">Aviso de privacidad</a></li>
								<li><a href="/terminos-y-condiciones">Términos y Condiciones</a></li>
							</ul>
						</li>
						<li><a href="#">Cuxeya</a>
							<ul>
								<li><a href="/como-funciona">¿Cómo funciona?</a></li>
								<li><a href="/iniciativa-cuxeya">Iniciativa Cuxeya.org</a></li>
								<li><a href="/blog">Blog</a></li>
							</ul>
						</li>
						<li><a href="/contacto">Contacto</a></li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<!-- <div class="right-side">
				<div class="header-widget">
					
					<div class="user-menu">
						<div class="user-name"><span><img src="images\avatar.png" alt=""></span>Natalia</div>
						<ul>
							<li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Administración</a></li>
							<li><a href="index.html"><i class="sl sl-icon-power"></i> Salir</a></li>
						</ul>
					</div>


					<a href="#" class="button border with-icon">Agrega tu ayuda<i class="sl sl-icon-plus"></i></a>
				</div>
			</div> -->
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Sign In</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Log In</a></li>
						<li><a href="#tab2">Register</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<form method="post" class="login">

								<p class="form-row form-row-wide">
									<label for="username">Username:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="username" id="username" value="">
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password">
									</label>
									<span class="lost_password">
										<a href="#">Lost Your Password?</a>
									</span>
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Login">
									<div class="checkboxes margin-top-10">
										<input id="remember-me" type="checkbox" name="check">
										<label for="remember-me">Remember Me</label>
									</div>
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register">
								
							<p class="form-row form-row-wide">
								<label for="username2">Username:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="username" id="username2" value="">
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Email Address:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email2" value="">
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password1" id="password1">
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password2">Repeat Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password2" id="password2">
								</label>
							</p>

							<input type="submit" class="button border fw margin-top-10" name="register" value="Register">
	
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Banner
================================================== -->
<div class="main-search-container centered" data-background-image="images/voluntariado-color.jpg">
	<div class="main-search-inner">

		<div class="container">

			<!-- Features Categories -->
			<div class="row">
				<div class="col-md-12">
					<h2>
						¡Muchas Gracias!
						<!-- Typed words can be configured in script settings at the bottom of this HTML file -->
						
					</h2>
					<h4>Ya eres parte de este gran proyecto</h4>
		</div>

	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="booking-confirmation-page">
				<i class="fa fa-check-circle"></i>
				@if(session()->get('success'))
				<h3 class="margin-top-30">{{ session()->get('success') }}</h3>
  				@endif
				<p>Una persona de nuestro equipo te contactará lo antes posible para darle seguimiento a tu solicitud</p>
				<a href="/inicio" class="button margin-top-30">Volver al inicio</a>
			</div>

		</div>
	</div>
</div>
<!-- Container / End -->


<!-- Footer
================================================== -->
<div  class="pie">
<div class="redes">
		<a class="iconos" href="https://facebook.com/cuxeyaorg" target="_blank"><i class="fab fa-facebook-f"></i></a>
		<a class="iconos" href="https://instagram.com/cuxeya" target="_blank"><i class="fab fa-instagram"></i></a>
		<a class="iconos" href="https://twitter.com/cuxeya" target="_blank"><i class="fab fa-twitter"></i></a>
	</div>
		<!-- Copyright -->
	<div class="copyrights">Copyright © 2020 Cuxeya. Paseo de la Reforma 250, Col. Juárez, Cuauhtémoc,<br> 
		CDMX. <br> 
		Propiedad de Bull & Bear Foundation <br>
		Desarrollado por Bull and Bear Foundation y Cuxeya
	</div>
</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script data-cfasync="false" src="..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script><script type="text/javascript" src="scripts\jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="scripts\jquery-migrate-3.1.0.min.js"></script>
<script type="text/javascript" src="scripts\mmenu.min.js"></script>
<script type="text/javascript" src="scripts\chosen.min.js"></script>
<script type="text/javascript" src="scripts\slick.min.js"></script>
<script type="text/javascript" src="scripts\rangeslider.min.js"></script>
<script type="text/javascript" src="scripts\magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts\waypoints.min.js"></script>
<script type="text/javascript" src="scripts\counterup.min.js"></script>
<script type="text/javascript" src="scripts\jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts\tooltips.min.js"></script>
<script type="text/javascript" src="scripts\custom.js"></script>


<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="scripts\leaflet.min.js"></script>

<!-- Leaflet Maps Scripts -->
<script src="scripts\leaflet-markercluster.min.js"></script>
<script src="scripts\leaflet-gesture-handling.min.js"></script>
<script src="scripts\leaflet-listeo.js"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="scripts\leaflet-autocomplete.js"></script>
<script src="scripts\leaflet-control-geocoder.js"></script>


<!-- Typed Script -->
<script type="text/javascript" src="scripts\typed.js"></script>
<script>
var typed = new Typed('.typed-words', {
strings: ["Attractions"," Restaurants"," Hotels"],
	typeSpeed: 80,
	backSpeed: 80,
	backDelay: 4000,
	startDelay: 1000,
	loop: true,
	showCursor: true
});
</script>


<!-- Style Switcher
================================================== -->
<script src="scripts\switcher.js"></script>

<div id="style-switcher">
	<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="main" title="Main"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
	</div>
		
</div>
<!-- Style Switcher / End -->


</body>
