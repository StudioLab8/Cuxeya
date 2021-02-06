<!DOCTYPE html>
<head>

	<!-- Basic Page Needs================================================== -->
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
							<a href="/inicio"><img src="/images/logo_cuxeya.png" data-sticky-logo="/images/logo_cuxeya.png" alt=""></a>
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
							<li><a class="current" href="#">Cuxeya</a>
								<ul>
									<li><a href="/como-funciona">¿Cómo funciona?</a></li>
									<li><a href="/iniciativa-cuxeya">Iniciativa Cuxeya.org</a></li>
									<li><a href="/noticias">Noticias</a></li>
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
					<!--<div class="right-side">
						<div class="header-widget">
							<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Iniciar Sesión</a>
						</div>
					</div>-->
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

		</header>
		<div class="clearfix"></div>
			<!-- Header Container / End -->


			<!-- Titlebar
			================================================== -->
			<div id="titlebar" class="gradient">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<h2>Últimas Noticias</h2><span></span>

							<!-- Breadcrumbs -->
							<nav id="breadcrumbs">
								<ul>
									<li><a href="#">Inicio</a></li>
									<li>Noticias</li>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>


			<!-- Content
			================================================== -->
			<div class="container">

				<!-- Blog Posts -->
				<div class="blog-page">
				<div class="row">
					<div class="col-lg-9 col-md-8 padding-right-30">
						
						@foreach($news as $news_item)
						<!-- Blog Post -->
						<div class="blog-post">
							
							<!-- Img -->
							<a href="/noticia/{{$news_item->url}}" class="post-img">
								<img src="/images/uploads/news/{{$news_item->gallery->first()->image_name}}" alt="">
							</a>
							
							<!-- Content -->
							<div class="post-content">
								<h3><a href="/noticia/{{$news_item->url}}">{{$news_item->title}} </a></h3>

								<ul class="post-meta">
									<li>{{ $news_item->created_at }}</li>
								</ul>

								<!--<p>content...</p>-->

								<a href="/LinkedIn-abrio-su-pagina-para-cursos-online-gratuitos" class="read-more">Leer más <i class="fa fa-angle-right"></i></a>
							</div>

						</div>
						<!-- Blog Post / End -->
						@endforeach

					</div>

				<!-- Blog Posts / End -->


				<!-- Widgets -->
				<div class="col-lg-3 col-md-4">
					<div class="sidebar right">


						<!-- Widget -->
						<div class="widget margin-top-40">
							<h3>¿Pregunta?</h3>
							<div class="info-box margin-bottom-10">
								<p>¿Tienes alguna pregunta? te respondemos</p>
								<a href="/contacto" class="button fullwidth margin-top-20"><i class="fa fa-envelope-o"></i> Contáctanos</a>
							</div>
						</div>
						<!-- Widget / End -->


						<!-- Widget -->
						<div class="widget margin-top-40">
							<h3 class="margin-bottom-25">Social</h3>
							<ul class="social-icons rounded">
								<li><a class="facebook" href="https://facebook.com/cuxeyaorg"><i class="icon-facebook"></i></a></li>
								<li><a class="twitter" href="https://twitter.com/cuxeya"><i class="icon-twitter"></i></a></li>
							</ul>

						</div>
						<!-- Widget / End-->

						<div class="clearfix"></div>
						<div class="margin-bottom-40"></div>
					</div>
				</div>
				</div>
				<!-- Sidebar / End -->


			</div>
		</div>




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
	<script type="text/javascript" src="/scripts\jquery-migrate-3.1.0.min.js"></script>
	<script type="text/javascript" src="/scripts\mmenu.min.js"></script>
	<script type="text/javascript" src="/scripts\chosen.min.js"></script>
	<script type="text/javascript" src="/scripts\slick.min.js"></script>
	<script type="text/javascript" src="/scripts\rangeslider.min.js"></script>
	<script type="text/javascript" src="/scripts\magnific-popup.min.js"></script>
	<script type="text/javascript" src="/scripts\waypoints.min.js"></script>
	<script type="text/javascript" src="/scripts\counterup.min.js"></script>
	<script type="text/javascript" src="/scripts\jquery-ui.min.js"></script>
	<script type="text/javascript" src="/scripts\tooltips.min.js"></script>
	<script type="text/javascript" src="/scripts\custom.js"></script>


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
