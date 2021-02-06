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

@include("admin.layouts.header-admin")

<!-- Dashboard -->
<div id="dashboard">

	@include("admin.layouts.menu-admin")

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Usuarios</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Admin</a></li>
							<li>Usuarios</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">

					<h4>Listado de Usuarios</h4>
					
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
											<th>Nombre</th>
											<th>Email</th>
											<th>CURP</th>
											<th>Tipo</th>
										</tr>
									</thead>
									<tbody>
										@foreach($users as $user)
										<tr>
											<td>{{$user->name}}</td>
											<td>{{$user->email}}</td>
											<td>{{$user->curp}}</td>
											<td>{{$user->type}}</td>
											<!-- <td><a href="#" class="button gray"><i class="sl sl-icon-note"></i> Edit</a></td> -->
											<!-- <td><a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a></td> -->
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
				<div class="copyrights">© 2021 Cuxeya. Propiedad de Bull & Bear Foundation.</div>
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
