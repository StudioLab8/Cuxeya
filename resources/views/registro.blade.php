<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />

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
							<li><a href="/noticias">Noticias</a></li>
						</ul>
					</li>
					<li><a  href="/contacto">Contacto</a></li>
					<li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim">Iniciar Sesión</a></li>
					<li><a class="current" href="/registro" class="button border with-icon">Registraté <i class="sl sl-icon-plus"></i></a></li>
				</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<!--<div class="right-side">
				<div class="header-widget">
					<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Iniciar Sesión</a>
				</div>
			</div>-->
			<!-- Right Side Content / End -->

			

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Iniciar Sesión</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Login</a></li>
						<li><a href="#tab2">¿Olvidaste tu contraseña?</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<div id="response-login"></div>
							<form method="post" class="login" action="{{ url('login') }}">
								@csrf

								<p class="form-row form-row-wide">
									<label for="username">Email:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="username" id="username" value="">
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Contraseña:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password">
									</label>
								</p>

								<div class="form-row">
									<input type="button" class="button border margin-top-5" name="login" id="login-button"  value="Iniciar Sesión">
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">
							<div id="response-recovery-success">
							<div id="response-recovery"></div>
							<form method="post" class="register">
								

							<p class="form-row form-row-wide">
								<label for="email2">Correo electrónico:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email-recovery" value="">
								</label>
							</p>

							<input type="button" class="button border fw margin-top-10" name="register" id="button-recovery" value="Recuperar mi contraseña">
	
							</form>
							</div>
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

				<h1>Registro</h1>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Inicio</a></li>
						<li>Usuarios</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container centered">
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

		<!-- Register -->
		<div class="col-md-5 centered">
			<form method="post" id="form-registry" action="{{ route('users.store') }}">
			@csrf
					
			<p class="form-row form-row-wide">
				<label for="username2">Nombre de Usuario:
					<i class="im im-icon-Male"></i>
					<input type="text" class="input-text" name="nombre_de_usuario" id="username" value="{{old('nombre_de_usuario')}}">
				</label>
			</p>
				
			<p class="form-row form-row-wide">
				<label for="email2">Correo Electrónico:
					<i class="im im-icon-Mail"></i>
					<input type="text" class="input-text" name="email" id="email" value="{{old('email')}}">
				</label>
			</p>

			<p class="form-row form-row-wide">
				<label for="email2">CURP:
					<input type="text" class="input-text" name="curp" id="curp" value="{{old('curp')}}">
				</label>
			</p>

			<p class="form-row form-row-wide">
				<label for="password1">Contraseña:
					<i class="im im-icon-Lock-2"></i>
					<input class="input-text" type="password" name="password" id="password1">
				</label>
			</p>

			<p class="form-row form-row-wide">
				<label for="password2">Confirmar contraseña:
					<i class="im im-icon-Lock-2"></i>
					<input class="input-text" type="password" name="password_confirmation" id="password2">
				</label>
			</p>

			<input type="submit" class="button border fw margin-top-10" name="register-button" id="register-button" value="Registrar">
			
			</form>
		</div>

		<div class="col-md-7 centered">
			<img src="images/ninos_manos.png">
		</div>

		<!-- Content
		================================================== -->
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
<script type="text/javascript" src="scripts/custom/main-login.js"></script>
<script type="text/javascript">
	$(document).ready(function () {  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
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
