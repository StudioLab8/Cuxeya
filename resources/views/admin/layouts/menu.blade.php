<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Principal">
				<li><a href="/admin"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
			</ul>
			
			<ul data-submenu-title="Brazos de Ayuda">
				<li><a href="{{ route('projects.create') }}"><i class="sl sl-icon-plus"></i> Agregar Ayuda</a></li>
				<li><a href="{{ route('projects.list-by-user') }}"><i class="sl sl-icon-layers"></i> Mis ayudas</a></li>
				<li><a href="#"><i class="sl sl-icon-people"></i> Beneficiarios</a>
					<ul>
					<li><a href="{{ route('beneficiary.list-by-user') }}">Ver todos</a></li>
						<li><a href="{{ route('beneficiary.list-attended') }}">Atendidos</a></li>
						<li><a href="{{ route('beneficiary.list-attending') }}">Por atender</a></li>
						<li><a href="{{ route('beneficiary.list-contacting') }}">Por contactar</a></li>
					</ul>
				</li>
			</ul>	

			<ul data-submenu-title="Cuenta">
				<!-- <li><a href="#"><i class="sl sl-icon-user"></i> Mi perfil</a></li>-->
				<li><a href="/logout"><i class="sl sl-icon-power"></i> Salir</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->