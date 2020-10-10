<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya - Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css\style.css">
<link rel="stylesheet" href="css\main-color.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="images\logo_cuxeya.png" alt=""></a>
					<a href="index.html" class="dashboard-logo"><img src="images\logo_cuxeya.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="images\avatar2.png" alt=""></span>Mi cuenta</div>
						<ul>
							<li><a href="/"><i class="sl sl-icon-power"></i> Salir</a></li>
						</ul>
					</div>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Principal">
				<li class="active"><a href="admin"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li><a href="/admin-usuarios"><i class="sl sl-icon-user"></i> Usuarios</a></li>
				<li><a href="/admin-estados"><i class="sl sl-icon-star"></i> Estados</a></li>
				<li><a href="/admin-cat"><i class="sl sl-icon-star"></i> Categorías</a></li>
				<li><a href="/admin-blog"><i class="fa fa-calendar-check-o"></i> Blog <span class="nav-tag messages">2</span></a></li>
				<li><a href="/admin-testimonios"><i class="fa fa-calendar-check-o"></i> Testimonios</a></li>
			</ul>
			
			<ul data-submenu-title="Brazos de Ayuda">
				<li><a><i class="sl sl-icon-layers"></i> Mis Brazos de Ayuda</a>
					<ul>
						<li><a href="/admin-ayuda">Activos <span class="nav-tag green">10</span></a></li>
						<li><a href="/admin-ayuda">Pendientes <span class="nav-tag yellow">1</span></a></li>
						<li><a href="/admin-ayuda">Expirados <span class="nav-tag red">0</span></a></li>
					</ul>	
				</li>
				<li><a href="/admin-beneficarios"><i class="sl sl-icon-plus"></i> Beneficiarios</a></li>
			</ul>	

			<ul data-submenu-title="Cuenta">
				<li><a href="#"><i class="sl sl-icon-user"></i> Mi perfil</a></li>
				<li><a href="/"><i class="sl sl-icon-power"></i> Salir</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Hola, Alejandra!</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Inicio</a></li>
							<li>Dashboard</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!-- Content -->
		<div class="row">

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-1">
					<div class="dashboard-stat-content"><h4>150</h4> <span>Ayudas Activas</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-2">
					<div class="dashboard-stat-content"><h4>726</h4> <span>Total de Ayudas</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
				</div>
			</div>

			
			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-3">
					<div class="dashboard-stat-content"><h4>95</h4> <span>Total de Brazos</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-4">
					<div class="dashboard-stat-content"><h4>1005</h4> <span>Personas beneficiadas</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
				</div>
			</div>
		</div>

			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2020 Cuxeya. Propiedad de Bull & Bear Foundation.</div>
			</div>
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


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


</body>
