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
					<h2>{{$project->name}}</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Admin</a></li>
							<li>Proyectos</li>
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
							<div class="col-md-6">
								<h5>Nombre del proyecto</h5>
								<h4>{{$project->name}}</h4>
								<input type="hidden" id="project-id" value="{{$project->id}}" />
							</div>

							<!-- Tipo -->
							<div class="col-md-6">
								<h5>Tipo de proyecto</h5>
								<h4>{{$project->type}}</h4>
							</div>

						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Categoría -->
							<div class="col-md-6">
								<h5>Categoría</h5>
								<h4>{{$project->category}}</h4>
							</div>

							<!-- Online ó presencial -->
							<div class="col-md-6">
								<h5>Online ó presencial</h5>
								<h4>{{$project->online_or_in_person}}</h4>
							</div>

						</div>
						<!-- Row / End -->

						<!-- Row -->
						<div class="row with-forms">

							<!-- User name -->
							<div class="col-md-6">
								<h5>Usuario</h5>
								<h4>{{$project->user->name}}</h4>
							</div>

							<!-- User email -->
							<div class="col-md-6">
								<h5>Email</h5>
								<h4>{{$project->user->email}}</h4>
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
								@foreach($documents as $document)
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

					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-location"></i> Modalidad</h3>
						</div>

						<div class="submit-section">

							@if($project->online_or_in_person == 'on-line')
								<!-- Row -->
								<div id='row-online-modality' class="row with-forms">

									<!-- Link Zoom -->
									<div class="col-md-6">
										<h5>Link Zoom </h5>
										<a href="{{$project->zoom_url}}" target="_blank">{{$project->zoom_url}}</a>
									</div>

								</div>
								<!-- Row / End -->
							@else
								<!-- Row -->
								<div id='row-inperson-modality' class="row with-forms">

									<!-- País -->
									<div class="col-md-6">
										<h5>País</h5>
										<h4>{{$project->country}}</h4>
									</div>

									<!-- Ciudad -->
									<div class="col-md-6">
										<h5>Ciudad</h5>
										<h4>{{$project->city}}</h4>
									</div>

									<!-- Dirección -->
									<div class="col-md-6">
										<h5>Dirección</h5>
										<h4>{{$project->address}}</h4>
									</div>

									<!-- Estado -->
									<div class="col-md-6">
										<h5>Estado</h5>
										<h4>{{$project->state}}</h4>
									</div>

									<!-- Códido postal -->
									<div class="col-md-6">
										<h5>Código postal</h5>
										<h4>{{$project->zip_code}}</h4>
									</div>

								</div>
								<!-- Row / End -->
							@endif

						</div>
					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-picture"></i> Galería </h3>
						</div>

						<table class="basic-table">

							<tr>
								<th>Imagén</th>
								<th>Nombre</th>
							</tr>

							@foreach($gallery as $image)
							<tr>
								<td data-label="Column 1"><img src="/images/uploads/{{$image->image_name}}" width="300" heigth="150"/></td>
								<td data-label="Column 2">{{$image->image_name}}</td>
							</tr>
							@endforeach
						</table>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-12">
								<h5>Link de Youtube Video</h5>
								<a href="{{$project->youtube_url}}" target="_blank">{{$project->youtube_url}}</a>
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
							<h5>Descripción del proyecto </h5>
							<h4>{!! $project->description !!}</h4>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-4">
								<h5>Teléfono</h5>
								<h4>{{$project->phone}}</h4>
							</div>

							<!-- Página web -->
							<div class="col-md-4">
								<h5>Página web</h5>
								<h4>{{$project->web}}</h4>
							</div>

							<!-- Email -->
							<div class="col-md-4">
								<h5>Email</h5>
								<h4>{{$project->email}}</h4>
							</div>

						</div>
						<!-- Row / End -->


						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-4">
								<h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook</h5>
								<a href="{{$project->account_fb}}" target="_blank">{{$project->account_fb}}</a>
							</div>

							<!-- Website -->
							<div class="col-md-4">
								<h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter</h5>
								<a href="{{$project->account_tw}}" target="_blank">{{$project->account_tw}}</a>
							</div>

							<!-- Email Address -->
							<div class="col-md-4">
								<h5 class="gplus-input"><i class="fa fa-instagram"></i> Instagram </h5>
								<a href="{{$project->account_ins}}" target="_blank">{{$project->account_ins}}</a>
							</div>

						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-book-open"></i> Donaciones </h3>
							
						</div>

						<div class="content">

							<div class="row">
								<div class="col-md-12">
								<table class="basic-table">

									<tr>
										<th>Concepto</th>
										<th>Descripción</th>
										<th>Monto</th>
									</tr>

									@foreach($donations as $donation)
									<tr>
										<td data-label="Column 1">{{$donation->concept}}</td>
										<td data-label="Column 2">{{$donation->description}}</td>
										<td data-label="Column 2">$ {{$donation->amount}}</td>
									</tr>
									@endforeach
								</table>
									<!-- <a href="#" class="button add-pricing-submenu">Add Category</a> -->
								</div>

								<!-- Online ó presencial -->
								<div class="col-md-6">
									<h5>¿Acepta donación personalizada?</h5>
									@if($project->personalized_donation == true)
										<h4>SI</h4>
									@else
										<h4>NO</h4>
									@endif
								</div>

							</div>

						</div>
						<!-- Switcher ON-OFF Content / End -->

					</div>
					<!-- Section / End -->

					@if(Auth::user()->type == "ADMIN")
						@if($project->status == "accepted")
							@if($project->activated == true)
								<a href="#" id="publish-project" class="button preview">Quitar <i class="fa fa-arrow-circle-right"></i></a>
							@else
								<a href="#" id="publish-project" class="button preview">Publicar <i class="fa fa-arrow-circle-right"></i></a>
							@endif
						@elseif($project->status == "pending")
							<a href="#" id="accept-project" class="button preview">Aceptar <i class="fa fa-arrow-circle-right"></i></a>
							<a href="#" id="reject-project" class="button border">Rechazar <i class="fa fa-close"></i></a>
						@elseif($project->status == "rejected")
							<!-- project rejected -->
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
