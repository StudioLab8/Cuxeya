<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya - Underdogs</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />

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
						<!-- <li><a href="/inicio">Inicio</a></li> -->
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
						@if(!isset(Auth::user()->email))
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

				</div>
			</div> 
			<!-- Right Side Content / End -->
			@else
			<!-- Right Side Content / End -->
			 <div class="right-side">
			 	<div class="header-widget">
					<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Iniciar Sesión</a>
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


<!-- Slider
================================================== -->
<div class="listing-slider mfp-gallery-container margin-bottom-0">
	<a href="images\underdogs-01.jpg" data-background-image="images/underdogs-01.jpg" class="item mfp-gallery" title="Underdogs"></a>
	<a href="images\underdogs-02.jpg" data-background-image="images/underdogs-02.jpg" class="item mfp-gallery" title="Underdogs"></a>
	<a href="images\underdogs-01.jpg" data-background-image="images/underdogs-01.jpg" class="item mfp-gallery" title="Underdogs"></a>
	<a href="images\underdogs-02.jpg" data-background-image="images/underdogs-02.jpg" class="item mfp-gallery" title="Underdogs"></a>

</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">
		<div class="col-lg-8 col-md-8 padding-right-30">

			<!-- Titlebar -->
			<div id="titlebar" class="listing-titlebar">
				<div class="listing-titlebar-title">
					<h2>Underdogs Academy <span class="listing-tag">Voluntariado</span></h2>
					<span>
						<a href="#listing-location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							Ciudad de México
						</a>
					</span>
					<div class="star-rating" data-rating="5">
						<div class="rating-counter"><a href="#listing-reviews">(0 ayudas)</a></div>
					</div>
				</div>
			</div>

			<!-- Listing Nav -->
			<div id="listing-nav" class="listing-nav-container">
				<ul class="listing-nav">
					<li><a href="#listing-overview" class="active">Información General</a></li>
					<li><a href="#listing-pricing-list">Donaciones</a></li>
				</ul>
			</div>
			
			<!-- Overview -->
			<div id="listing-overview" class="listing-section">

				<!-- Description -->

				<p>
					<b>¿Quiénes somos?</b><br>
					Underdogs Academy es una<br>
					plataforma gratuita de cursos<br>
					digitales en español para<br>
					estudiantes que han sido<br>
					rechazados de universidades<br>
					latinoamericanas.<br><br>

					<b>¿Cómo funciona?</b><br>
					Registro de estudiante.<br>
					Elige uno de los tres cursos.<br>
					Entrega sus proyectos semanales.<br>
					Hace servicios profesionales desde casa con una empresa.<br>
					Al terminar el curso anual
					elegido, entran a nuestra bolsa de
					trabajo y siguen recibiendo
					lecciones mensuales de por vida.<br><br>

					<b>Perfiles de voluntarios</b><br>
					Docentes
				</p>
				
				<!-- Listing Contacts -->
				<div class="listing-links-container">

					<ul class="listing-links contact-links">
						<li><a href="tel: 52 6729 8386" class="listing-links"><i class="fa fa-phone"></i>729 322 9152</a></li>
						
						<li><a href="#" target="_blank" class="listing-links"><i class="fa fa-link"></i> underdogsacademy.thinkific.com</a></li>
					</ul>
					<div class="clearfix"></div>

					<ul class="listing-links">
						<li><a href="https://www.facebook.com/underdogsacademy.mx" target="_blank" class="listing-links-fb"><i class="fa fa-facebook-square"></i> Facebook</a></li>
					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>


				
			</div>


			<!-- Food Menu -->
			<div id="listing-pricing-list" class="listing-section">
				<h3 class="listing-desc-headline margin-top-70 margin-bottom-30">Donaciones</h3>

				<div class="show-more">
					<div class="pricing-list-container">
						
						@if(isset(Auth::user()->email))	
						<!-- Food List -->
						<h4>Si deseas hacer una donación online, puedes hacerlo aqui.</h4>
						<ul>
							<li>
								<h5>Donación Personalizada</h5>
								<div><input type="text" id="donation-custom" size="50" style="width:50%;" /></div>
								<span><a href="javascript: customPay();" class="button margin-top-5">Donar</a></span>
							</li>
						</ul>
						@else
						<h4>Para poder hacer donaciones, por favor inicia sesión y si no tienes una cuenta regístrate.</h4>
						@endif
						<div class="clearfix"></div>
						
					</div>
				</div>
				<a href="#" class="show-more-button" data-more-title="Ver más" data-less-title="Ver menos"><i class="fa fa-angle-down"></i></a>
			</div>
			<!-- Food Menu / End -->	

		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-75 sticky">

			<!-- Book Now -->
			<div id="booking-widget-anchor" class="boxed-widget booking-widget margin-top-35">
				<h3><i class="fa fa-calendar-check-o "></i> ¡Quiero ser parte!</h3>
				@if(isset(Auth::user()->email))	
				<div class="row with-forms  margin-top-0">

					<div class="col-lg-12">
						<h4>Da click en aqui para registrarte y ser parte del proyecto</h4>
					</div>

				</div>
				
				<!-- Book Now -->
				<a href="/registro-underdogs" class="button book-now fullwidth margin-top-5">¡Ayudar!</a>
				@else
				<div class="row with-forms  margin-top-0">

					<div class="col-lg-12">
						<h4>Para poder registrarte y ser parte del proyecto, por favor inicia sesión o regístrate.</h4>
					</div>

				</div>
				@endif
			</div>
			<!-- Book Now / End -->


			
		
			<!-- Opening Hours -->
			<div class="boxed-widget opening-hours margin-top-35">
				<div class="listing-badge now-open">Nuevos horarios</div>
				<h3><i class="sl sl-icon-clock"></i> Horario de atención</h3>
				<ul>
					<li>Lunes a Viernes <span>9 AM - 5 PM</span></li>
				</ul>
			</div>
			<!-- Opening Hours / End -->


			<!-- Contact -->
			<div class="boxed-widget margin-top-35">
				<div class="hosted-by-title">
					<h4><span>Brazo de Ayuda</span> <a href="#">BULL & BEAR AC. - Natalia</a></h4>
					<a href="#" class="hosted-by-avatar"><img src="images\avatar.png" alt=""></a>
				</div>
				<ul class="listing-details-sidebar">
					<li><i class="sl sl-icon-phone"></i> (+52) 6729 8386</li>
					<!-- <li><i class="sl sl-icon-globe"></i> <a href="#">http://example.com</a></li> -->
					<li>nmartinez@bullbeargroup.com</li>
				</ul>

				<ul class="listing-details-sidebar social-profiles">
					<li><a href="https://facebook.com/cuxeyaorg" target="_blank" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>
					<li><a href="https://instagram.com/cuxeya" target="_blank" class="twitter-profile"><i class="fa fa-twitter"></i> Twitter</a></li>
					<!-- <li><a href="#" class="gplus-profile"><i class="fa fa-google-plus"></i> Google Plus</a></li> -->
				</ul>

				

				<a href="mailto:nmartinez@bullbeargroup.com" class="send-message-to-owner button"><i class="sl sl-icon-envelope-open"></i> Enviar mensaje</a>
			</div>
			<!-- Contact / End-->

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

<!-- Booking Sticky Footer -->
<div class="booking-sticky-footer">
	<div class="container">
		<div class="bsf-left">
			@if(isset(Auth::user()->email))	
			<h4>Da click en ayudar para registrarte y ser parte del proyecto</h4>
			@else
			<h4>Para poder registrarte y ser parte del proyecto, por favor inicia sesión o regístrate.</h4>
			@endif
			<!-- <div class="star-rating" data-rating="5">
				<div class="rating-counter"></div>
			</div> -->
		</div>
		<div class="bsf-right">
			<a href="#booking-widget-anchor" class="button">¡Ayudar!</a>
		</div>
	</div>
</div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script type="text/javascript" src="scripts/custom/main-login.js"></script>
  
<script type="text/javascript">
  $(document).ready(function () {  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
  });

  function customPay() {
	let val = $("#donation-custom").val();
	if($.isNumeric(val)) {
		pay(val);
	} else {
		alert("Escribe una cantidad númerica.");
	}
  }
  
  function pay(amount) {
    var handler = StripeCheckout.configure({
      key: 'pk_live_51GvTEqFQXeJ08JsK8IBOy9cUJzpoPwsgKtxQpHBqy4FZrIDkjG49fAjPwuTA9jaXt9Avb7WYREs2BBNhan9Osuk700Zux2PQsb', // your publisher key id
	  locale: 'auto',
	  currency: 'mxn',
  	  description: 'Donación, underdogs',
      token: function (token) {
        // You can access the token ID with `token.id`.
        // Get the token ID to your server-side code for use.
        console.log('Token Created!!');
        console.log(token)
        $('#token_response').html(JSON.stringify(token));
  
        $.ajax({
          url: '{{ url("stripe") }}',
          method: 'post',
          data: { tokenId: token.id, amount: amount },
          success: (response) => {
  
            console.log(response)
  
          },
          error: (error) => {
            console.log(error);
            alert('Oops! Ocurrio un error, por favor intentalo más tarde ')
          }
        })
      }
    });
   
    handler.open({
      name: 'Underdogs',
      description: 'Academy',
      amount: amount * 100
    });
  }
</script>

<!-- Maps -->
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&language=en"></script>
<script type="text/javascript" src="scripts\infobox.min.js"></script>
<script type="text/javascript" src="scripts\markerclusterer.js"></script>
<script type="text/javascript" src="scripts\maps.js"></script>	

<!-- Booking Widget - Quantity Buttons -->
<script src="scripts\quantityButtons.js"></script>

<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="scripts\moment.min.js"></script>
<script src="scripts\daterangepicker.js"></script>
<script>
// Calendar Init
$(function() {
	$('#date-picker').daterangepicker({
		"opens": "left",
		singleDatePicker: true,

		// Disabling Date Ranges
		isInvalidDate: function(date) {
		// Disabling Date Range
		var disabled_start = moment('09/02/2018', 'MM/DD/YYYY');
		var disabled_end = moment('09/06/2018', 'MM/DD/YYYY');
		return date.isAfter(disabled_start) && date.isBefore(disabled_end);

		// Disabling Single Day
		// if (date.format('MM/DD/YYYY') == '08/08/2018') {
		//     return true; 
		// }
		}
	});
});

// Calendar animation
$('#date-picker').on('showCalendar.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-animated');
});
$('#date-picker').on('show.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-visible');
	$('.daterangepicker').removeClass('calendar-hidden');
});
$('#date-picker').on('hide.daterangepicker', function(ev, picker) {
	$('.daterangepicker').removeClass('calendar-visible');
	$('.daterangepicker').addClass('calendar-hidden');
});
</script>


<!-- Replacing dropdown placeholder with selected time slot -->
<script>
$(".time-slot").each(function() {
	var timeSlot = $(this);
	$(this).find('input').on('change',function() {
		var timeSlotVal = timeSlot.find('strong').text();

		$('.panel-dropdown.time-slots-dropdown a').html(timeSlotVal);
		$('.panel-dropdown').removeClass('active');
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
