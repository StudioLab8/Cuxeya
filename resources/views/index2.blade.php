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

						<li><a class="current" href="/inicio">Inicio</a></li>
										<!-- <li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim">Agregar tu ayuda</a></li> -->
										<li><a href="#">Explorar</a>
											<ul>
												<li><a href="/todas-las-ayudas">Todas las ayudas</a></li>
												<li><a href="/fundaciones">Fundaciones</a></li>
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
										@if(!isset(Auth::user()->email))
										<li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim">Iniciar Sesión</a></li>
										<li><a href="/registro" class="button border with-icon">Regístrate <i class="sl sl-icon-plus"></i></a></li>
										@endif
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			@if(isset(Auth::user()->email))	
			<!-- Right Side Content / End -->									
			 <div class="right-side">
				<div class="header-widget">
				
					<div class="user-menu">
						<div class="user-name"><span><img src="images\avatarg.png" alt=""></span>{{ Auth::user()->name }}</div>
						<ul>
							<!-- <li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Administración</a></li> -->
							<li><a href="/logout"><i class="sl sl-icon-power"></i> Salir</a></li>
						</ul>
					</div>


					<a href="/todas-las-ayudas" class="button border with-icon">Ver todas las ayudas<i class="sl sl-icon-plus"></i></a>
				</div>
			</div> 
			<!-- Right Side Content / End -->
			@endif

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


<!-- Banner
================================================== -->
<div class="main-search-container centered" data-background-image="images/manos_voluntarios_1197x800.jpg">
	<div class="main-search-inner">

		<div class="container">

			<!-- Features Categories -->
			<div class="row">
				<div class="col-md-12">
					<h2 class="color1">
						¡Ofrece ayuda a quien lo necesita!
						<!-- Typed words can be configured in script settings at the bottom of this HTML file -->
						
					</h2>
					<h4 class="color1">
					Encuentra la ayuda que necesitas como: donaciones, objetos perdidos, asesoría legal y más brazos de ayuda en tu localidad.
					</h4>
								
				</div>
			</div>
			<!-- Featured Categories - End -->

			<div class="row">
				<div class="col-md-12">
					<h5 class="highlighted-categories-headline">Si no encuentras lo que buscas, por favor escríbelo aquí:</h5>

					<div class="main-search-input">

						<div class="main-search-input-item">
							<input type="text" placeholder="¿Qué estás buscando?" value="">
						</div>

						<div class="main-search-input-item location">
							<div id="autocomplete-container">
								<input id="autocomplete-input" type="text" placeholder="Ubicación">
							</div>
							<a href="#"><i class="fa fa-map-marker"></i></a>
						</div>

						<div class="main-search-input-item">
							<select data-placeholder="Categorías" class="chosen-select">
								<option>Categorías</option>	
								<option>Adopción</option>
								<option>Asesoría</option>
								<option>Alimentos</option>
								<option>Educación</option>
								<option>Salud</option>
								<option>Voluntariado</option>
							</select>
						</div>

						<button class="button" onclick="window.location.href='/todas-las-ayudas'">Buscar</button>

					</div>
					
				</div>
			</div>
			
			<div class="categories-boxes-container contenedor-barra ">
						
				<!-- Box -->
				<a href="/todas-las-ayudas" class="barra borde1">
					<div class=""><i class="<"><img src="images/icono1.jpg" alt=""></i></div>
					<h4 class=" texto-mod">Adopción</h4>
				</a>

				<!-- Box -->
				<a href="/todas-las-ayudas" class="barra borde2">
					<i class=""><img src="images/icono2.jpg" alt=""></i></i>

					<div class=""><h4 class="bordes texto-mod">Asesoría</h4></div>
				</a>

				<!-- Box -->
				<a href="/todas-las-ayudas" class="barra borde3">
					<i class=""><img src="images/icono3.jpg" alt=""></i></i>
					<h4 class="bordes texto-mod">Alimentos</h4>
				</a>

				<!-- Box -->
				<a href="/todas-las-ayudas" class="barra borde4">
					<i class=""><img src="images/icono4.jpg" alt=""></i></i>
					<h4 class="bordes texto-mod">Educación</h4>
				</a>

				<!-- Box -->
				<a href="/todas-las-ayudas" class="barra borde5">
					<i class=""><img src="images/icono5.jpg" alt=""></i></i>
					<h4 class="bordes texto-mod">Objetos</h4>
				</a>

				<!-- Box -->
				<a href="/todas-las-ayudas" class="barra borde6">
					<i class=""><img src="images/icono9.jpg" alt=""></i></i>
					<h4 class="bordes texto-mod">Grupos</h4>
				</a>
				<!-- Box -->
				<a href="/todas-las-ayudas" class="barra borde7">
					<i class=""><img src="images/icono6.jpg" alt=""></i></i>
					<h4 class="bordes texto-mod">Salud</h4>
				</a>

				<!-- Box -->
				<a href="/todas-las-ayudas" class="barra borde8">
					<i class=""><img src="images/icono7.jpg" alt=""></i></i>
					<h4 class="bordes texto-mod">Albergues</h4>
				</a>

				<!-- Box -->
				<a href="/todas-las-ayudas" class="barra borde9">
					<i class=""><img src="images/icono8.jpg" alt=""></i></i>
					<h4 class="bordes texto-mod">Voluntariado</h4>
				</a>
				
			</div>

		</div>
		
	</div>
			
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
				<strong class="headline-with-separator">Cuxeya - "Brazos de ayuda"</strong>
				<span class="margin-top-25 color1">Unimos a las comunidades alrededor del mundo, impulsando la cooperación entre localidades.</span>
				<span class="margin-top-15 color1">Aquí puedes consultar y publicar información de interés general, como:  Asesoría legal, Educación, Adopción o
					búsqueda de mascotas, Entrega de alimentos, Búsqueda de objetos perdidos, Voluntariado, entre muchos más.</span>
			</h3>
		</div>
		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
				<strong class="headline-with-separator">¿En qué estás interesado?</strong>
				<span class="margin-top-25 color1">Explora el tipo de ayuda que puedes encontrar en tu ciudad</span>
				
			</h3>
		</div>

		<div class="col-md-12 ">
			<div class="categories-boxes-container caja ">
				<!-- Box -->
				<a href="/todas-las-ayudas" class="category-small-box2 bordes tarjeta1c fondo1 tarjeta">
					<div class="posicion tarjeta-i tarjeta1"><i class="bordes tarjeta1c"></i></div>
					<h4 class="bordes tarjeta1c">Adopción</h4>
					<span class="category-box-counter bordesc tarjeta1c"><p>0</p></span>
				</a>
				<!-- Box -->
				<a href="/todas-las-ayudas" class="category-small-box2 bordes fondo2 tarjeta2c tarjeta">
					<div class="posicion tarjeta-i tarjeta2"><i class="bordes tarjeta2c"></i></div>
					<h4 class="bordes tarjeta2c">Asesoría</h4>
					<span class="category-box-counter bordesc tarjeta2c"><p>0</p></span>
				</a>
				<!-- Box -->
				<a href="/todas-las-ayudas" class="category-small-box2 bordes fondo3 tarjeta3c tarjeta">
					<div class="posicion tarjeta-i tarjeta3"><i class="bordes tarjeta3c"></i></div>
					<h4 class="bordes tarjeta3c">Alimentos</h4>
					<span class="category-box-counter bordesc tarjeta3c"><p>1</p></span>
				</a>
				<!-- Box -->
				<a href="/todas-las-ayudas" class="category-small-box2 bordes fondo4 tarjeta4c tarjeta">
					<div class="posicion tarjeta-i tarjeta4"><i class="bordes tarjeta4c"></i></div>
					<h4 class="bordes tarjeta4c">Educación</h4>
					<span class="category-box-counter bordesc tarjeta4c"><p>0</p></span>
				</a>
				<!-- Box -->
				<a href="/todas-las-ayudas" class="category-small-box2 bordes fondo5 tarjeta5c tarjeta">
					<div class="posicion tarjeta-i tarjeta5"><i class=" bordes tarjeta5c"></i></div>
					<h4 class="bordes tarjeta5c">Objetos</h4>
					<span class="category-box-counter bordesc tarjeta5c"><p>1</p></span>
				</a>
				<!-- Box -->
				<a href="/todas-las-ayudas" class="category-small-box2 bordes fondo6 tarjeta6c tarjeta">
					<div class="posicion tarjeta-i tarjeta6"><i class="bordes tarjeta6c"></i></div>
					<h4 class="bordes tarjeta6c">Salud</h4>
					<span class="category-box-counter bordesc tarjeta6c"><p>0</p></span>
				</a>
				<!-- Box -->
				<a href="/todas-las-ayudas" class="category-small-box2 bordes fondo7 tarjeta7c tarjeta">
					<div class="posicion tarjeta-i tarjeta7"><i class="bordes tarjeta7c"></i></div>
					<h4 class="bordes tarjeta7c">Albergues</h4>
					<span class="category-box-counter bordesc tarjeta7c"><p>0</p></span>
				</a>
				<!-- Box -->
				<a href="/todas-las-ayudas" class="category-small-box2 bordes fondo8 tarjeta8c tarjeta">
					<div class="posicion tarjeta-i tarjeta8"><i class=" bordes tarjeta8c"></i></div>
					<h4 class="bordes tarjeta8c">Voluntariado</h4>
					<span class="category-box-counter bordesc tarjeta8c"><p>4</p></span>
				</a>

			</div>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->

<!-- Info Section -->
<section class="fullwidth padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
	<div class="container">
	
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="headline centered headline-extra-spacing">
					<strong class="headline-with-separator">Elige el tipo de ayuda.</strong>
					<p class="resaltado-tarjetas">Descubre cómo Cuxeya puede asesorarte a encontrar la ayuda que deseas.</p>
				</h3>
			</div>
		</div>
	
		<div class="row icons-container">
			<!-- Stage -->
			<div class="col-md-4  redondeado">
				<div class="icon-box-2 with-line redondeado-2">
					<img src="images/paso1.png">
					<h3>Selecciona tu ayuda</h3>
					<p>¿Buscas un objeto o asesoría legal?</p>
				</div>
			</div>
	
			<!-- Stage -->
			<div class="col-md-4 ">
				<div class="icon-box-2 with-line redondeado-2">
					<img src="images/paso2.png">
					<h3>Encuentra lo que buscas</h3>
					<p>Comienza tu búsqueda, elige tus filtros, explora fotografías y encuentra el lugar perfecto.</p>
				</div>
			</div>
	
			<!-- Stage -->
			<div class="col-md-4">
				<div class="icon-box-2 redondeado-2">
					<img src="images/paso3.png">
					<h3>Una buena experiencia</h3>
					<p>Encuentra tu ayuda de ua manera rápida y sencilla.
					</p>
				</div>
			</div>
		</div>
	
	</div>
	</section>
	<!-- Info Section / End -->



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					<strong class="headline-with-separator">Consulta las últimas publicaciones de Cuxeya</strong>
					<p class="resaltado-blog">Conoce lo que publican nuestros "Brazos de ayuda".</p>
				</h3>
			</div>

			<div class="col-md-12">
				<div class="simple-slick-carousel dots-nav">

				<!-- Listing Item -->
				<div class="carousel-item ">
					<a href="/salvando-vidas" class="listing-item-container ">
						<div class="listing-item redondeado2">
							<img src="images\fondas-04.png" alt="">
							
							<div class="listing-item-content fondo-terapia">
								
								<h3 class="color1">Salvando Vidas, un platillo de esperanza</h3>
							</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item ">
					<a href="/adopta-un-abuelito" class="listing-item-container ">
						<div class="listing-item redondeado2">
							<img src="images\abuelitos-01.jpg" alt="">
							
							<div class="listing-item-content fondo-terapia">
								
								<h3 class="color1">Adopta a un abuelito</h3>
							</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item ">
					<a href="/tejiendo-redes-libertad" class="listing-item-container ">
						<div class="listing-item redondeado2">
							<img src="images\redes-libertad-02.jpg" alt="">
							
							<div class="listing-item-content fondo-terapia">
								
								<h3 class="color1">Tejiendo redes de libertad</h3>
							</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item ">
					<a href="/underdogs" class="listing-item-container ">
						<div class="listing-item redondeado2">
							<img src="images\underdogs-01.jpg" alt="">
							
							<div class="listing-item-content fondo-terapia">
								
								<h3 class="color1">Underdogs university</h3>
							</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item ">
					<a href="/abriga-bebe" class="listing-item-container ">
						<div class="listing-item redondeado2">
							<img src="images\abriga-un-bebe-01.jpg" alt="">
							
							<div class="listing-item-content fondo-terapia">
								
								<h3 class="color1">Abriga un bebé</h3>
							</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item ">
					<a href="/laptops" class="listing-item-container ">
						<div class="listing-item redondeado2">
							<img src="images\laptops-01.jpg" alt="">
							
							<div class="listing-item-content fondo-terapia">
								
								<h3 class="color1">Dona una laptop con causa</h3>
							</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				</div>
				
			</div>

		</div>
	</div>

</section>
<!-- Fullwidth Section / End -->




<!-- Recent Blog Posts -->
<section class="fullwidth margin-top-0 padding-top-75 padding-bottom-75" data-background-color="#fff">
	<div class="container">

		<div class="row">
			<div class="col-md-12 ">
				<h3 class="headline centered margin-bottom-55">
					<strong class="headline-with-separator">Últimos artículos y noticias</strong>
					<p class="resaltado-blog">Consulta los últimos artículos de interés:</p>
				</h3>
			</div>
		</div>

		<div class="row">
			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="/LinkedIn-abrio-su-pagina-para-cursos-online-gratuitos" class="blog-compact-item-container redondeado">
					<div class="blog-compact-item bordes-blog">
						<img class="redondeado" src="images\blog-01.jpg" alt=""> 
						<div class="blog-compact-item-content fondo">
							<h3>LinkedIn abrió su página para cursos online gratuitos</h3>
							<p>01 Julio 2020</p>
						<!--	<ul class="blog-post-tags">
								<li>20 Febrero 2019 Noticias</li>
							</ul>
							 -->
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- 
			<div class="col-md-4">
				<a href="#" class="blog-compact-item-container redondeado">
					<div class="blog-compact-item bordes-blog">
						<img class="redondeado" src="images\blog2.jpg" alt="">
						<div class="blog-compact-item-content fondo">
							<h3>"Porque de él, por él y para él, son TODAS las cosas"</h3>
							<p>15 Febrero 2017 Noticias</p>
							
							
						</div>
					</div>
				</a>
			</div>

			 
			<div class="col-md-4">
				<a href="#" class="blog-compact-item-container">
					<div class="blog-compact-item bordes-blog">
						<img src="images\blog3.jpg" alt="">
						<div class="blog-compact-item-content fondo">
							<h3>Un Día de Aprendizaje y Alegría para los Niños de NPH México</h3>
							<p>5 Febrero, 2017 Cultura Noticias</p>
							
						</div>
					</div>
				</a>
			</div>
			 -->

			<div class="col-md-12 centered-content">
				<a href="/blog" class="button border margin-top-10">Ver más</a>
			</div>

		</div>

	</div>
</section>
<!-- Recent Blog Posts / End -->


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
