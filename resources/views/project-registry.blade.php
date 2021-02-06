<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link href="/css/fontawesome.css" rel="stylesheet">
<link href="/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/main-color.css" id="colors">

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

				<h2>Solicitar la ayuda</h2>
				<h3>{{$project->name}}<input id="project-id" type="hidden" value="{{$project->id}}" /></h3>

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
	
	<div id="response-validate">	
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
	</div>

		<!-- Content
		================================================== -->
		<div class="col-lg-8 col-md-8 padding-right-30">
			<form method="post" id="form">
			@csrf
									
			<h3 class="margin-top-0 margin-bottom-30">Datos personales <i class="tip" data-tip-content="Tu informacíon personal es y será confidencial"></i></h3>

			<div class="row">

				<div class="col-md-6">
					<h5>Nombre Completo</h5>
					<h5>{{Auth::user()->name}}</h5>
				</div>

				<div class="col-md-6">
					<h5>Email</h5>
					<h5>{{Auth::user()->email}}</h5>
				</div>

				<div class="col-md-6">
				<div class="input-with-icon medium-icons">
						<h5>Teléfono (opcional)</h5>
						<input type="text" value="" id="phone">
						<i class="im im-icon-Phone-2"></i>
					</div>
				</div>

			</div>

			<h3 class="margin-top-0 margin-bottom-30">Documentación <i class="tip" data-tip-content="Necesitamos esta información para dar un mejor servicio, toda tu infomación es confidencial"></i></h3>

			<div class="row">

				<div class="col-md-6">
					<h5>¿Representas alguna fundación?</h5>
					<select id="is-fundation" class="chosen-select-no-single">
						<option value="no" selected>No</option>
						<option value="yes">Si</option>
					</select>
				</div>

			</div>

			<div id='row-type-independent' class="row">
				<table class="basic-table">
					<tr>
						<th>Documento</th>
						<th></th>
						<th></th>
					</tr>
					<tr id="row_ine_doc2">
						<td>Identificación oficial del representante legal (por ambos lados).</td>
						<td><input type="file" accept="application/pdf" id="ine_doc2" /></td>
						<td id="column_ine_doc2"><input type="hidden" id="data_ine_doc2" value="none"/></td>
					</tr>
				</table>
			</div>

			<div id='row-type-fundation' class="row with-forms">
							<table class="basic-table">
								<tr>
									<th>Documento</th>
									<th></th>
									<th></th>
								</tr>
								
								<tr id="row_ac_doc">
									<td>Acta constitutiva.</td>
									<td><input type="file" accept="application/pdf" id="ac_doc"  /></td>
									<td id="column_ac_doc"><input type="hidden" id="data_ac_doc" value="none"/></td>
								</tr>
								<tr id="row_csf_doc">
									<td>Constancia de situación fiscal.</td>
									<td><input type="file" accept="application/pdf" id="csf_doc" /></td>
									<td id="column_csf_doc"><input type="hidden" id="data_csf_doc" value="none"/></td>
								</tr>
								<tr id="row_cd_doc">
									<td>Comprobante de domicilio.</td>
									<td><input type="file" accept="application/pdf" id="cd_doc" /></td>
									<td id="column_cd_doc"><input type="hidden" id="data_cd_doc" value="none"/></td>
								</tr>
								<tr id="row_ine_doc">
									<td>Identificación oficial del representante legal (por ambos lados).</td>
									<td><input type="file" accept="application/pdf" id="ine_doc" /></td>
									<td id="column_ine_doc"><input type="hidden" id="data_ine_doc" value="none"/></td>
								</tr>
							</table>
						</div>
				
					<p></p>
					<p>Al darle click al botón de <b>Solicitar</b> aceptas el <a href="/aviso-de-privacidad" target="_blank">aviso de privacidad</a>, los <a href="/terminos-y-condiciones" target="_blank">términos y condiciones del servicio.</a></p>
			
			@if(isset(Auth::user()->email))	
			<a href="#" id="button-form" class="button booking-confirmation-btn margin-top-40 margin-bottom-65">Solicitar</a>
			@else
			<h4>Para poder aplicar y ser parte del proyecto, por favor inicia sesión o crea una cuenta.</h4>
			@endif
		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-0 margin-bottom-60">

			<!-- Booking Summary -->
			<div class="listing-item-container compact order-summary-widget">
				<div class="listing-item">
					<img src="/images/uploads/{{$project->gallery()->first()->image_name}}" alt="">

					<div class="listing-item-content">
						<h3>{{$project->name}}</h3>
						<span>Costo de recuperación: $50</span>
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
<script data-cfasync="false" src="..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>
<script type="text/javascript" src="/scripts\jquery-3.4.1.min.js"></script>
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script type="text/javascript" src="{{ asset('scripts/custom/project-register.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function () {  
    	$.ajaxSetup({
        	headers: {
            	'X-CSRF-TOKEN': '{{ csrf_token() }}'
        	}
    	});
	});

  	function pay(amount, beneficiary_data) {
    	var handler = StripeCheckout.configure({
      		key: 'pk_live_51GvTEqFQXeJ08JsK8IBOy9cUJzpoPwsgKtxQpHBqy4FZrIDkjG49fAjPwuTA9jaXt9Avb7WYREs2BBNhan9Osuk700Zux2PQsb', // your publisher key id
	  		locale: 'auto',
	  		currency: 'mxn',
  	  		description: 'Costo de recuperación',
      		token: function (token) {
        		// You can access the token ID with `token.id`.
        		// Get the token ID to your server-side code for use.
        		console.log('Token Created!!');
        		console.log(token)
        		//$('#token_response').html(JSON.stringify(token));
  
        		$.ajax({
          			url: '{{ url("stripe") }}',
          			method: 'POST',
					  data: { tokenId: token.id,
							  amount: amount,
							  description: '{{ $project->name }}' 
							},
					beforeSend: function(xhr) {
          				$.LoadingOverlay("show");
        			},
          			success: (response) => {
						console.log(response);
						save_beneficiary(beneficiary_data);
          			},
          			error: (error) => {
						$.LoadingOverlay("hide");
						console.log(error);  
						if(error.responseJSON.message == "Your card has insufficient funds.") {
            			$("#response-validate").html(function() {
							return '<div class="notification error closeable">' +
									'<p><span>No tienes fondos suficientes, por favor intenta de nuevo con otra cuenta.</span></p>' + 
								'</div>';
							});
						} else {
							alert('Oops! Ocurrio un error, por favor intentalo más tarde ');
						}
          			}
        		});
      		}
    	});
   
    	handler.open({
			name: '{{ Auth::user()->name }}',
      		description: '{{ $project->name }}',
	  		amount: amount * 100,
	  		email: '{{ Auth::user()->email }}'
    	});
  	}
</script>
</script>

</body>
