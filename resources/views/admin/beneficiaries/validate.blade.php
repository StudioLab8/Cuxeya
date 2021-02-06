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
					<h2>{{$beneficiary->user->name}}</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Admin</a></li>
							<li>Beneficiarios</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> Información basica</h3>
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-6">
								<h5>Email</h5>
								<h4>{{$beneficiary->user->email}}</h4>
								<input type="hidden" id="beneficiary-id" value="{{$beneficiary->id}}" />
							</div>

							<!-- Tipo -->
							<div class="col-md-6">
								<h5>Ayuda solicitada</h5>
								<h4>{{$beneficiary->project->name}}</h4>
							</div>

						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Categoría -->
							<div class="col-md-6">
								<h5>Tipo</h5>
								<h4>
								@if($beneficiary->type == "person")
									Persona
								@else
									Fundación
								@endif
								</h4>
							</div>

							<!-- Online ó presencial -->
							<div class="col-md-6">
								<h5>Teléfono</h5>
								<h4>{{$beneficiary->phone}}</h4>
							</div>

						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-location"></i> Documentación</h3>
						</div>

						<div class="submit-section">

							<!-- Row -->
							<div id='row-online-modality' class="row with-forms">
							
							<table class="basic-table">
								<tr>
									<th>Tipo</th>
									<th>Documento</th>
								</tr>
								@foreach($beneficiary->documents as $document)
								<tr>
									<td>{{$document->type}}</td>
									<td><a href="/images/uploads/docs/{{$document->file_name}}" target="_blank">{{$document->file_name}}</a></td>
								</tr>
								@endforeach
							</table>

							</div>
							<!-- Row / End -->
						</div>
					</div>
					<!-- Section / End -->

					@if($beneficiary->status == "accepted")
						<!-- project rejected -->
					@elseif($beneficiary->status == "pending")
						@if(Auth::user()->type == "ADMIN")
							<a href="#" id="accept-beneficiary" class="button preview">Aceptar <i class="fa fa-arrow-circle-right"></i></a>
							<a href="#" id="reject-beneficiary" class="button border">Rechazar <i class="fa fa-close"></i></a>
						@Endif
					@elseif($beneficiary->status == "rejected")
						<!-- project rejected -->
					@endif

						@if($beneficiary->status == "contacted")
							<h5>Si ya diste tu ayuda, por favor dale click en atender.</h5>
							<a href="#" id="attending-project" class="button preview">Atender <i class="fa fa-arrow-circle-right"></i></a>
						@elseif($beneficiary->status == "attending")
							<!-- project attending -->
						@else
							@if(Auth::user()->type == "BRAZO")
							<!-- Section -->
							<div class="add-listing-section margin-top-45">

								<!-- Headline -->
								<div class="add-listing-headline">
									<h3><i class="sl sl-icon-docs"></i> Contacta a tu beneficiario</h3>
								</div>

								<div id="response-validate"></div>

								<!-- Descripción -->
								<div class="form">
									<h5>Escribe el lugar y horario en el que planeas entregar la ayuda.</h5>
									<h5>En caso de que sea tu ayuda vía Online, le enviaremos el link de  tu Zoom.</h5>
									<h5>Al darle conectar le enviaremos un email con tu mensaje.</h5>
									<textarea id="description" class="WYSIWYG" name="summary" cols="40" rows="3" spellcheck="true"></textarea>
								</div>

							</div>
							<!-- Section / End -->

							<a href="#" id="contac-beneficiary" class="button preview">Contactar <i class="fa fa-arrow-circle-right"></i></a>
							@endif
					@endif
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

<script type="text/javascript" src="{{ asset('scripts/custom/beneficiaries.js') }}"></script>
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
