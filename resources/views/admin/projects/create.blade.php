<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya - Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style_original.css') }}">
<link rel="stylesheet" href="{{ asset('css/main-color.css') }}" id="colors">
<link rel="stylesheet" href="{{ asset('css/richtext.min.css') }}">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

@include("admin.layouts.header-admin")

<!-- Dashboard -->
<div id="dashboard">

	@if(Auth::user()->type == 'ADMIN')	
		@include("admin.layouts.menu-admin")
	@else
		@include("admin.layouts.menu")
	@endif

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Agregar nuevo proyecto</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Inicio</a></li>
							<li><a href="#">Admin</a></li>
							<li>Agregar proyecto</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<div id="response-validate"></div>

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> Información basica</h3>
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Nombre del proyecto <i class="tip" data-tip-content="Nombre del proyecto"></i></h5>
								<input id="project-name" class="search-field" type="text" value="">
							</div>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Tipo -->
							<div class="col-md-6">
							<h5>Tipo de proyecto</h5>
								<select id="project-type" class="chosen-select-no-single">
									<option value="none" label="blank">Selecciona una tipo</option>	
									<option value="foundation">Fundación</option>
									<option value="independent">Negocio/Idenpendiente</option>
								</select>
							</div>

							<!-- Categoría -->
							<div class="col-md-6">
								<h5>Categoría</h5>
								<select id="category" class="chosen-select-no-single">
									<option value="none" label="blank">Selecciona una categoría</option>	
									<option value="adoption">Adopción</option>
									<option value="advisory">Asesoría</option>
									<option value="nutriment">Alimentos</option>
									<option value="education">Educación</option>
									<option value="objects">Objetos</option>
									<option value="health">Salud</option>
									<option value="hostels">Albergues</option>
									<option value="volunteering">Voluntariado</option>
								</select>
							</div>

						</div>
						<!-- Row / End -->

						<!-- Row -->
						<div class="row with-forms">

							<!-- Online ó presencial -->
							<div class="col-md-6">
							<h5>Online ó presencial</h5>
								<select id='modality-project' class="chosen-select-no-single">
									<option value='face-to-face' selected>Presencial</option>
									<option value='on-line'>Online</option>
								</select>
							</div>

						</div>
						<!-- Row / End -->


					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-location"></i> Modalidad</h3>
						</div>

						<div class="submit-section">

							<!-- Row -->
							<div id='row-online-modality' class="row with-forms">

								<!-- Link Zoom -->
								<div class="col-md-6">
									<h5>Link Zoom <i class="tip" data-tip-content="Comparte tu link de Zoom."></i></h5>
									<input id="link-zoom" type="text" placeholder="URL">
								</div>

							</div>
							<!-- Row / End -->

							<!-- Row -->
							<div id='row-inperson-modality' class="row with-forms">

								<!-- País -->
								<div class="col-md-6">
									<h5>País</h5>
									<select id="country" class="chosen-select-no-single">
										<option value="none" label="blank">Selecciona un país</option>	
										<option value="Mexico">México</option>
										<option value="Estados Unidos">Estados Unidos</option>
										<option value="Canada">Canada</option>
										<option value="Alemania">Alemania</option>
										<option value="Latam">Latam</option>
										<option value="Brasil">Brasil</option>
										<option value="Colombia">Colombia</option>
									</select>
								</div>

								<!-- Ciudad -->
								<div class="col-md-6">
									<h5>Ciudad</h5>
									<input id="city" type="text" placeholder="Ciudad">
								</div>

								<!-- Dirección -->
								<div class="col-md-6">
									<h5>Dirección</h5>
									<input id="address" type="text" placeholder="Calle, Numero, Colonia">
								</div>

								<!-- Estado -->
								<div class="col-md-6">
									<h5>Estado</h5>
									<input id="state" type="text">
								</div>

								<!-- Códido postal -->
								<div class="col-md-6">
									<h5>Código postal</h5>
									<input id="zip-code" type="text">
								</div>

							</div>
							<!-- Row / End -->

						</div>
					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-picture"></i> Galería <i class="tip" data-tip-content="Elige al mínimo 2 imagenes, de dimensiones óptimas de 1200 x 800 pixeles, que pese menos de 5MB"></i></h3>
						</div>

						<!-- Dropzone -->
						<div class="submit-section">
							<form action="{{ route('dropzone.store') }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
								@csrf
    							<div class="fallback">
        							<input id="files" multiple="true" name="files[]" type="file">
    							</div>
							</form>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-12">
								<h5>Link de Youtube Video <span>(opcional)</span></h5>
								<input id="youtube-link" type="text">
							</div>

						</div>
						<!-- Row / End -->


					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-docs"></i> Detalles</h3>
						</div>

						<!-- Descripción -->
						<div class="form">
							<h5>Descripción del proyecto <i class="tip" data-tip-content="Escribe de qué trata tu proyecto, todo lo que es necesario para las personas que estás buscando."></i></h5>
							<textarea id="description" class="WYSIWYG" name="summary" cols="40" rows="3" spellcheck="true"></textarea>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-4">
								<h5>Teléfono <span>(opcional)</span></h5>
								<input id="phone" type="text">
							</div>

							<!-- Página web -->
							<div class="col-md-4">
								<h5>Página web <span>(opcional)</span></h5>
								<input id="web-site" type="text">
							</div>

							<!-- Email -->
							<div class="col-md-4">
								<h5>Email <span>(opcional)</span></h5>
								<input id="email" type="text">
							</div>

						</div>
						<!-- Row / End -->


						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-4">
								<h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(opcional)</span></h5>
								<input id="facebook" type="text" placeholder="https://www.facebook.com/">
							</div>

							<!-- Website -->
							<div class="col-md-4">
								<h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(opcional)</span></h5>
								<input id="twitter" type="text" placeholder="https://www.twitter.com/">
							</div>

							<!-- Email Address -->
							<div class="col-md-4">
								<h5 class="gplus-input"><i class="fa fa-instagram"></i> Instagram <span>(opcional)</span></h5>
								<input id="instagram" type="text" placeholder="https://instagram.com/">
							</div>

						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-book-open"></i> Donaciones <i class="tip" data-tip-content="Si deseas recibir donaciones, llena la tabla de abajo, ejemplo:<br>Concepto: Donación de alimentos.<br>Descripción: Donaremos 1MXN por cada peso y será solo para comprar alimentos.<br>Monto: 100MXN"></i></h3>
							<!-- Switcher -->
							<label class="switch"><input id="receive-donations" type="checkbox" checked=""><span class="slider round"></span></label>
						</div>

						<!-- Switcher ON-OFF Content -->
						<div class="switcher-content">

							<div class="row">
								<div class="col-md-12">
									<table id="pricing-list-container">
										<tr class="pricing-list-item pattern">
											<td>
												<div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
												<div class="fm-input pricing-name"><input type="text" placeholder="Titulo"></div>
												<div class="fm-input pricing-ingredients"><input type="text" placeholder="Descripción"></div>
												<div class="fm-input pricing-price"><input type="text" placeholder="Monto" data-unit="MXN"></div>
												<div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
											</td>
										</tr>
									</table>
									<a href="#" class="button add-pricing-list-item">Agregar Opción</a>
									<!-- <a href="#" class="button add-pricing-submenu">Add Category</a> -->
								</div>

								<!-- Online ó presencial -->
								<div class="col-md-6">
								<h5>¿Acepta donación personalizada?</h5>
									<select id="personalized-donation" class="chosen-select-no-single">
										<option value="yes">Si</option>
										<option value="no">No</option>
									</select>
								</div>

							</div>

						</div>
						<!-- Switcher ON-OFF Content / End -->

					</div>
					<!-- Section / End -->


					<a href="#" id="save-project" class="button preview">Guardar <i class="fa fa-arrow-circle-right"></i></a>

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

<div id="loading-always" class="loading-div">
          This div is always loading
</div>

<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{ asset('scripts/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\jquery-migrate-3.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\rangeslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\custom.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script type="text/javascript" src="{{ asset('scripts/jquery.richtext.js') }}"></script>

<!-- Opening hours added via JS (this is only for demo purpose) -->
<script>
$(".opening-day.js-demo-hours .chosen-select").each(function() {
	$(this).append(''+
        '<option></option>'+
        '<option>Closed</option>'+
        '<option>1 AM</option>'+
        '<option>2 AM</option>'+
        '<option>3 AM</option>'+
        '<option>4 AM</option>'+
        '<option>5 AM</option>'+
        '<option>6 AM</option>'+
        '<option>7 AM</option>'+
        '<option>8 AM</option>'+
        '<option>9 AM</option>'+
        '<option>10 AM</option>'+
        '<option>11 AM</option>'+
        '<option>12 AM</option>'+
        '<option>1 PM</option>'+
        '<option>2 PM</option>'+
        '<option>3 PM</option>'+
        '<option>4 PM</option>'+
        '<option>5 PM</option>'+
        '<option>6 PM</option>'+
        '<option>7 PM</option>'+
        '<option>8 PM</option>'+
        '<option>9 PM</option>'+
        '<option>10 PM</option>'+
        '<option>11 PM</option>'+
        '<option>12 PM</option>');
});
</script>

<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="{{ asset('scripts\dropzone.js') }}"></script>
<script type="text/javascript">

        Dropzone.options.dropzone =
        {
            maxFilesize: 10,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 60000,
            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
				console.log(response);
                return false;
			},
			init: function() {
				this.on("addedfile", function(file) {
					console.log("Added file:" + file.name);
					add_file_element(file.name);
				});
				this.on("removedfile", function(file) {
					console.log("removed file:" + file.name); 
					remove_file_element(file.name);
				});
  			}
        	};
    </script>
	<script type="text/javascript" src="{{ asset('scripts/custom/projects.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function () {  
    		$.ajaxSetup({
        		headers: {
            		'X-CSRF-TOKEN': '{{ csrf_token() }}'
        		}
    		});
  		});
</script>

</body>
