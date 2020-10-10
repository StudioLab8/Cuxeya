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
<link rel="stylesheet" href="css\style.css">
<link rel="stylesheet" href="css\main-color.css" id="colors">

</head>

<body>

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
						<li><a class="current" href="#">Explorar</a>
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
			<div class="right-side">
				<!-- <div class="header-widget">
					<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>
					<a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
				</div> -->
			</div>
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
									<h5 for="username">Username:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="username" id="username" value="">
									</h5>
								</p>

								<p class="form-row form-row-wide">
									<h5 for="password">Password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password">
									</h5>
									<span class="lost_password">
										<a href="#">Lost Your Password?</a>
									</span>
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Login">
									<div class="checkboxes margin-top-10">
										<input id="remember-me" type="checkbox" name="check">
										<h5 for="remember-me">Remember Me</h5>
									</div>
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register">
								
							<p class="form-row form-row-wide">
								<h5 for="username2">Username:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="username" id="username2" value="">
								</h5>
							</p>
								
							<p class="form-row form-row-wide">
								<h5 for="email2">Email Address:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email2" value="">
								</h5>
							</p>

							<p class="form-row form-row-wide">
								<h5 for="password1">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password1" id="password1">
								</h5>
							</p>

							<p class="form-row form-row-wide">
								<h5 for="password2">Repeat Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password2" id="password2">
								</h5>
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


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Registro - Abriga un bebé</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="/inicio">Inicio</a></li>
						<li>Registro</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="row">
		
	@if ($errors->any())
		<div class="notification error closeable">
			<p><span>
            	@foreach ($errors->all() as $error)
              		{{ $error }}<br />
           	 	@endforeach
			</span></p>
			<a class="close" href="#"></a>
      	</div><br />
    @endif

		<!-- Content
		================================================== -->
		<div class="col-lg-8 col-md-8 padding-right-30">
			<form method="post" id="form-assistances" action="{{ route('assistance-program-new') }}">
			@csrf
			
			<h3 class="margin-top-0 margin-bottom-30">Datos personales <i class="tip" data-tip-content="Tu información personal es y será confidencial"></i></h3>

			<div class="row">

				<div class="col-md-6">
					<h5>Nombre (s)</h5>
					<input type="text" value="" name="nombres">
				</div>

				<div class="col-md-6">
					<h5>Apellido (s)</h5>
					<input type="text" value="" name="apellidos">
				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<h5>E-Mail</h5>
						<input type="text" value="" name="email">
						<i class="im im-icon-Mail"></i>
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<h5>Teléfono</h5>
						<input type="text" value="" name="telefono">
						<i class="im im-icon-Phone-2"></i>
					</div>
				</div>

			</div>

			<h3 class="margin-top-0 margin-bottom-30">Comentario <i class="tip" data-tip-content="Escríbenos un comentario o tus dudas"></i></h3>

			<div class="row">

				<div class="col-md-12">
					<h5>Escribe algún comentario y dudas sobre el programa</h5>
					<input type="hidden" name="program" value="ropa-bebe">
					<textarea class="WYSIWYG" name="comment" cols="40" rows="3" id="comment" spellcheck="true"></textarea>
				</div>

			</div>
			
			@if(isset(Auth::user()->email))	
			<a href="javascript:;" id="button-form-assistances" class="button booking-confirmation-btn margin-top-40 margin-bottom-65">Registrarme</a>
			@else
			<h4>Para poder registrarte y ser parte del proyecto, por favor inicia sesión o crea una cuenta.</h4>
			@endif
		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-0 margin-bottom-60">

			<!-- Booking Summary -->
			<div class="listing-item-container compact order-summary-widget">
				<div class="listing-item">
					<img src="images\arropa-un-bebe-01.jpeg" alt="">

					<div class="listing-item-content">
						<h3>Ropa de</h3>
						<span>bebé</span>
					</div>
				</div>
			</div>

			<!-- Booking Summary / End -->

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
<script type="text/javascript" src="{{ asset('scripts/custom/assistances.js') }}"></script>


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
