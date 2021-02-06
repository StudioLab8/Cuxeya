<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css\style2.css">
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
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<!-- <div class="right-side">
				<div class="header-widget">
					<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Iniciar Sesión</a>
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
										<input type="text" class="input-text" name="username" value="">
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
						</div>
					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->

		</div>
	</div>
	<!-- Header / End -->


<!-- Content
================================================== -->
<div class="fs-container">

	<div class="fs-inner-container content">
		<div class="fs-content">

			<!-- Search -->
			<section class="search">

				<div class="row">
					<div class="col-md-12">

							<!-- Row With Forms -->
							<div class="row with-forms">

								<!-- Main Search Input -->
								<div class="col-fs-6">
								<h2>Fundaciones</h2><br>
									<div class="input-with-icon">
										<i class="sl sl-icon-magnifier"></i>
										<input type="text" placeholder="Que estas buscando?" value="">
									</div>
								</div>

								<!-- Main Search Input -->
								<div class="col-fs-6">
									<div class="input-with-icon location">
							
										<div id="autocomplete-container" data-autocomplete-tip="type and hit enter">
											<input id="autocomplete-input" type="text" placeholder="Ubicación">
										</div>
										<a href="#"><i class="fa fa-map-marker"></i></a>
									</div>
								</div>
						

								<!-- Filters -->
								<div class="col-fs-12">

									<!-- Panel Dropdown / End -->
									<div class="panel-dropdown">
										<a href="#">Categorias</a>
										<div class="panel-dropdown-content checkboxes categories">
											
											<!-- Checkboxes -->
											<div class="row">
												<div class="col-md-6">
													<input id="check-1" type="checkbox" name="check" checked="" class="all">
													<label for="check-1">Todas las Categoías</label>

													<input id="check-2" type="checkbox" name="check">
													<label for="check-2">Salud</label>

													<input id="check-3" type="checkbox" name="check">
													<label for="check-3">Adopción de mascotas</label>
												</div>	

												<div class="col-md-6">
													<input id="check-4" type="checkbox" name="check">
													<label for="check-4">Talleres</label>

													<input id="check-5" type="checkbox" name="check">
													<label for="check-5">Contra el Coronavirus</label>	

													<input id="check-6" type="checkbox" name="check">
													<label for="check-6">EVentos</label>
												</div>
											</div>
											
											<!-- Buttons -->
											<div class="panel-buttons">
												<button class="panel-cancel">Cancelar</button>
												<button class="panel-apply">Aplicar</button>
											</div>

										</div>
									</div>
									<!-- Panel Dropdown / End -->

									

									
									
								</div>
								<!-- Filters / End -->
	
							</div>
							<!-- Row With Forms / End -->

					</div>
				</div>

			</section>
			<!-- Search / End -->


		<section class="listings-container margin-top-30">

			<!-- Sorting / Layout Switcher -->
			<div class="row fs-switcher">

				<div class="col-md-6">
					<!-- Showing Results -->
					<p class="showing-results">1 resultado encontrado </p>
				</div>

			</div>


			<!-- Listings -->
			<div class="row fs-listings">
				
			<!-- Listing Item -->
				<div class="col-lg-6 col-md-6">
					<a href="/bull-and-bear" class="listing-item-container compact" data-marker-id="1">
						<div class="listing-item">
							<img src="images\bullandbear.jpg" alt="">

							<div class="listing-badge now-open">Nuevo</div>

							<div class="listing-item-content">
								
								<h3>Bull an Bear Foundation <i class="verified-icon"></i></h3>
								<span>Ciudad de México</span>
							</div>
							
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item 
				<div class="col-lg-6 col-md-6">
					<a href="/adopta-un-abuelito" class="listing-item-container compact" data-marker-id="2">
						<div class="listing-item">
							<img src="images\asilo-01.jpg" alt="">
							<div class="listing-item-content">
								<h3>Adopta a un abuelito</h3>
								<span>Ciudad de México</span>
							</div>
						</div>
					</a>
				</div>
				Listing Item / End -->	


			</div>
			<!-- Listings Container / End -->


			<!-- Pagination Container -->
			<div class="row fs-listings">
				<div class="col-md-12">

					<!-- Pagination -->
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12">
							<!-- Pagination -->
							<!--<div class="pagination-container margin-top-15 margin-bottom-40">
								<nav class="pagination">
									<ul>
										<li><a href="#" class="current-page">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
									</ul>
								</nav>
							</div>
						</div>-->
					</div>
					<div class="clearfix"></div>
					<!-- Pagination / End -->
					
					<!-- Copyrights -->
					<div class="copyrights margin-top-0">© 2020 Cuxeya.org</div>

				</div>
			</div>
			<!-- Pagination Container / End -->
		</section>

		</div>
	</div>
	<div class="fs-inner-container map-fixed">

		<!-- Map -->
		<div id="map-container">
		    <div id="mapa" data-map-scroll="true">
		        <!-- map goes here -->
		    </div>
		</div>

	</div>
</div>


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts\jquery-3.4.1.min.js"></script>
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
<script src="scripts\leaflet-listeo-2.js"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="scripts\leaflet-autocomplete.js"></script>
<script src="scripts\leaflet-control-geocoder.js"></script>


<style>
	#mapa{position: absolute; top: 0; bottom: 0; left: 0; right: 0;}
</style>
<script>
	var map = L.map('mapa').setView([19.601022, -99.047949], 16);
	
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([19.601022, -99.047949]).addTo(map)
  .bindPopup('Bull & Bear Foundation.')
  .openPopup();

</script>

</body>
