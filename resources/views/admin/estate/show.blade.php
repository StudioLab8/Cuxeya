<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya - Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/main-color.css') }}" id="colors">

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

		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Estados</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Admin</a></li>
							<li><a href="#">Estados</a></li>
							<li>Actualizar</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Change Password -->
			<div class="col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">¿Realmente quieres eliminar este estado?</h4>
					<div class="dashboard-list-box-static">

					@if ($errors->any())
      				<div class="alert alert-danger">
        			<ul>
            			@foreach ($errors->all() as $error)
              				<li>{{ $error }}</li>
           	 			@endforeach
        			</ul>
      				</div><br />
    				@endif

					<form method="post" id="form-estate" action="{{ route('estates.destroy', $estate->id) }}">
            			@method('DELETE') 
            			@csrf
						<!-- Change Password -->
						<div class="row with-forms">
							<div class="col-md-6">
								<h5>Estado:</h5>
								<h5>{{ $estate->estate }}</h5>
							</div>	
						</div>

						<div class="row with-forms">
							<div class="col-md-6">
								<a href="javascript:;" id="button-form-estate" class="button">Eliminar</a>
								<a href="{{ route('estates.index') }}" class="button border">Cancelar</a>
							</div>
						</div>
					</form>
					
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
<script type="text/javascript" src="{{ asset('scripts/jquery-3.4.1.min.js') }}"></script>
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
<script type="text/javascript" src="{{ asset('scripts/custom/admin-estate.js') }}"></script>

</body>
