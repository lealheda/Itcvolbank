	<?php
	require_once 'modelos/TipoDeUsuario.php';
	if (session_id() == "")
            session_start();
        if (!array_key_exists('logueado', $_SESSION)) {
        	$_SESSION['logueado'] = false;
        }
	 ?>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/arbol.png" alt="VolBank"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Acerca de</a></li>
					<li><a href="contact.php">Contacto</a></li>
					<?php
					if ($_SESSION['logueado']) {
					 ?>
						 <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuenta VB<b class="caret"></b></a>
							<ul class="dropdown-menu">
									<?php
								if ($_SESSION['usuario']['tipo_usuario'] == TipoDeUsuario::VOLUNTARIO) {
								 ?>
									<li class="active"><a href="usuarioedit.php">Editar perfil</a></li>
								 <?php
								} else if ($_SESSION['usuario']['tipo_usuario'] == TipoDeUsuario::ORGANIZACION) {
								  ?>
								  	<li class="active"><a href="organizacionedit.php">Editar perfil</a></li>
								  <?php } ?>
								<li class="active"><a href="actividades.php">Ver actividades</a></li>
								<li class="active"><a href="nuevactividad.php">Nueva actividad</a></li>
							</ul>
						</li>
					 <?php } ?>

					<?php
						if ($_SESSION['logueado']) {
					 ?>
							<li><a class="btn" href="logout.php"> Salir </a></li>
					<?php } else { ?>
							<li><a class="btn" href="signin.php"> Inicia sesión / Registro </a></li>
						   <?php } ?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/arbol.png" alt="VolBank"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Acerca de</a></li>
					<li><a href="contact.php">Contacto</a></li>
							<?php
					if ($_SESSION['logueado']) {
					 ?>
						 <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuenta VB<b class="caret"></b></a>
							<ul class="dropdown-menu">
									<?php
								if ($_SESSION['usuario']['tipo_usuario'] == TipoDeUsuario::VOLUNTARIO) {
								 ?>
									<li class="active"><a href="usuarioedit.php">Editar perfil</a></li>
								 <?php
								} else if ($_SESSION['usuario']['tipo_usuario'] == TipoDeUsuario::ORGANIZACION) {
								  ?>
								  	<li class="active"><a href="organizacionedit.php">Editar perfil</a></li>
								  <?php } ?>
								<li class="active"><a href="actividades.php">Ver actividades</a></li>
								<li class="active"><a href="nuevactividad.php">Nueva actividad</a></li>
							</ul>
						</li>
					 <?php } ?>

					<?php
						if ($_SESSION['logueado']) {
					 ?>
							<li><a class="btn" href="logout.php"> Salir </a></li>
					<?php } else { ?>
							<li><a class="btn" href="signin.php"> Inicia sesión / Registro </a></li>
						   <?php } ?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->