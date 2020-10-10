<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya - Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css\style_original.css">
<link rel="stylesheet" href="css\main-color.css" id="colors">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

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
					<a href="/inicio"><img src="images\logo_cuxeya.png" alt=""></a>
					<a href="/inicio" class="dashboard-logo"><img src="images\logo_cuxeya.png" alt=""></a>
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
						<div class="user-name"><span><img src="images\avatar.png" alt=""></span>Mi cuenta</div>
						<ul>
							<li><a href="/inicio"><i class="sl sl-icon-power"></i> Salir</a></li>
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
				<li><a href="/admin"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<!--<li><a href="/admin-usuarios"><i class="sl sl-icon-user"></i> Usuarios</a></li>
				<li><a href="/admin-estados"><i class="sl sl-icon-star"></i> Estados</a></li>
				<li><a href="/admin-cat"><i class="sl sl-icon-star"></i> Categorías</a></li>
				<li><a href="/admin-blog"><i class="fa fa-calendar-check-o"></i> Blog <span class="nav-tag messages">2</span></a></li>
				<li><a href="/admin-testimonios"><i class="fa fa-calendar-check-o"></i> Testimonios</a></li> -->
			</ul>
			
			<ul data-submenu-title="Brazos de Ayuda">
				<!-- <li><a><i class="sl sl-icon-layers"></i> Mis Brazos de Ayuda</a>
					<ul>
						<li><a href="#">Activos <span class="nav-tag green">0</span></a></li>
						<li><a href="#">Pendientes <span class="nav-tag yellow">0</span></a></li>
						<li><a href="#">Expirados <span class="nav-tag red">0</span></a></li>
					</ul>
				</li> -->
				<li class="active"><a href="#"><i class="sl sl-icon-plus"></i> Beneficiario/Ayudador</a>
					<ul>
						<li><a href="{{ route('savinglives.index') }}">Salvando vidas un platillo de esperanza</a></li>
						<li><a href="{{ route('adoptgrandpa.index') }}">Adoptando abuelitos</a></li>
						<li><a href="{{ route('assistance-program', ['program' => 'freedom-nets']) }}">Tejiendo redes de libertad</a></li>
						<li><a href="{{ route('assistance-program', ['program' => 'underdogs']) }}">Underdog university</a></li>
						<li><a href="{{ route('assistance-program', ['program' => 'ropa-bebe']) }}">Abriga un bebé</a></li>
						<li><a href="{{ route('assistance-program', ['program' => 'laptops']) }}">Laptops con causa</a></li>
					</ul>
				</li>
			</ul>	

			<ul data-submenu-title="Cuenta">
				<!--<li><a href="#"><i class="sl sl-icon-user"></i> Mi perfil</a></li>-->
				<li><a href="/inicio"><i class="sl sl-icon-power"></i> Salir</a></li>
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
					<h2>Adopta a un abuelito</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Inicio</a></li>
							<li><a href="#">Listado</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">

					<!-- Booking Requests Filters  -->
					<!--<div class="booking-requests-filter">
						<a href="{{ route('estates.create') }}" class="button">Nuevo Estado</a>
					</div>-->

					<h4>Listado de beneficiarios ó ayudadores</h4>
					
					<ul>

						<li>
							<div class="list-box-listingx">

							<div class="col-sm-12">
  								@if(session()->get('success'))
    							<div class="notification success closeable">
									<p><span>{{ session()->get('success') }}</span></p>  
									<a class="close" href="#"></a>
 	  							</div>
  								@endif
							</div>
							<table id="table_id" class="display" style="width:100%">
									<thead>
										<tr>
										<th>Id</th>
											<th>Nombre</th>
											<th>Apellido</th>
											<th>Email</th>
											<th>Curp</th>
											<th></th>
											<!--<th></th>-->
										</tr>
									</thead>
									<tbody>
										@foreach($adoptgrandpas as $adoptgrandpa)
										<tr>
										<td>{{$adoptgrandpa->id}}</td>
											<td>{{$adoptgrandpa->first_name}}</td>
											<td>{{$adoptgrandpa->last_name}}</td>
											<td>{{$adoptgrandpa->email}}</td>
											<td>{{$adoptgrandpa->curp}}</td>
											<td><a href="{{ route('adoptgrandpa.show',$adoptgrandpa->id)}}" class="button gray"><i class="sl sl-icon-note"></i> Ver</a></td>
											<!--<td><a href="{{ route('adoptgrandpa.show',$adoptgrandpa->id)}}" class="button gray"><i class="sl sl-icon-close"></i> Delete</a></td>-->
										</tr>
										@endforeach
									</tbody>
								</table>		
							</div>
						</li>

					</ul>
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="scripts/custom/admin-estate.js"></script>

</body>
