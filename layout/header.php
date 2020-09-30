<!-- header -->

<div class="container">
	<a class="navbar-brand" href="index.php">
		<img src="./dist/img/logo.svg" alt="Logo">
	</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>



	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<ul class="navbar-nav ml-auto ">

			<?php if (isset($login)) : ?>

				<li class="nav-item">
					<a class="nav-link mr-2 maleta d-flex align-items-center" href="dash-user-profile.php"><span class="mr-2 material-icons">
							account_circle
						</span>Usuario</a>
				</li>

				<li class="nav-item position-relative">
					<a class="nav-link alert-notification dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="material-icons">
					notification_important
					</span></a>
					<div class="dropdown-menu alert-menu">
						<a class="dropdown-item d-flex align-items-center mb-2" href="dash-user-home.php">
							<img class="notification__img" src="http://placeimg.com/80/80" alt="notificación usuario">
							<div>
								<h4><strong>Persona Nombre</strong></h4>
								<h5>Desea Agregarte como contacto</h5>
								<h6>Hace 2 Horas</h6>
							</div>	
						</a>

						<a class="dropdown-item d-flex align-items-center mb-2" href="dash-user-inbox-message.php">
							<img class="notification__img" src="http://placeimg.com/80/80" alt="notificación usuario">
							<div>
								<h4><strong>Persona Nombre</strong></h4>
								<h5>Usuario te ha enviado un mensaje</h5>
								<h6>Hace 2 Horas</h6>
							</div>	
						</a>
					</div>
				</li>

			<?php else : ?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Personas</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="login-new-user.php">Nuevo Usuario</a>
						<a class="dropdown-item" href="login-user.php">Ingresa a tu cuenta</a>
					</div>
				</li>


				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Empresas</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="login-new-enterprise.php">Nuevo Usuario</a>
						<a class="dropdown-item" href="login-enterprise.php">Ingresa a tu cuenta</a>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link mr-2 maleta" href="premium.php">GetJobs Premium</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-2" href="results.php">Ofertas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-2" href="lists.php">Listados</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-2" href="groups.php">Grupo</a>
				</li>

			<?php endif ?>


		</ul>
	</div>


</div>
</nav>

</header>