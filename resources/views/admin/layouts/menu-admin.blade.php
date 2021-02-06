<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Principal">
				<li><a href="/admin"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li><a><i class="sl sl-icon-globe"></i> Web</a>
					<ul>
						<li><a href="{{ route('users.index') }}"><i class="sl sl-icon-user"></i> Usuarios</a></li>
						<li><a href="{{ route('news.index') }}"><i class="fa fa-calendar-check-o"></i> Noticias </a></li>
						<li><a href="{{ route('testimonials.index') }}"><i class="sl sl-icon-star"></i> Testimonios</a></li>
						<li><a href="{{ route('contact.index') }}"><i class="sl sl-icon-doc"></i> Contacto</a></li>
					</ul>
				</li>
			</ul>
			
			<ul data-submenu-title="Brazos de Ayuda">
				<li><a href="{{ route('projects.create') }}"><i class="sl sl-icon-plus"></i> Agregar Ayuda</a></li>
				<li><a><i class="sl sl-icon-layers"></i> Brazos de Ayuda</a>
					<ul>
						<li><a href="{{ route('projects.list-by-user') }}">Mis ayudas</a></li>
						<li><a href="{{ route('projects.list-accepted') }}">Aceptados <span class="nav-tag green"></span></a></li>
						<li><a href="{{ route('projects.list-pending') }}">Por revisar <span class="nav-tag yellow"></span></a></li>
						<li><a href="{{ route('projects.list-rejected') }}">Rechazados <span class="nav-tag red"></span></a></li>
					</ul>	
				</li>
				<li><a href="#"><i class="sl sl-icon-people"></i> Beneficiarios</a>
					<ul>
					<li><a href="{{ route('beneficiary.list-by-user') }}">Mis beneficiarios</a></li>
						<li><a href="{{ route('beneficiary.list-accepted') }}">Aceptados <span class="nav-tag green"></span></a></li>
						<li><a href="{{ route('beneficiary.list-pending') }}">Por revisar <span class="nav-tag yellow"></span></a></li>
						<li><a href="{{ route('beneficiary.list-rejected') }}">Rechazados <span class="nav-tag red"></span></a></li>
					</ul>
				</li>
			</ul>	

			<ul data-submenu-title="Cuenta">
				<!--<li><a href="#"><i class="sl sl-icon-user"></i> Mi perfil</a></li>-->
				<li><a href="/logout"><i class="sl sl-icon-power"></i> Salir</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->