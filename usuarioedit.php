<!DOCTYPE html>
<html lang="en">
<?php include("head.php") ?>

<body>
<?php include("header.php") ?>

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="index.php">Usuario</a></li>
			<li class="active">Editar usuario</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Editar perfil</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">editar perfil de cuenta</h3>
							<p class="text-center text-muted">Favor de llenar los datos </p> </p>
							<hr>

							<form>
								<div class="top-margin">
									<label>Nombre</label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Apellidos</label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Correo electronico <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Contraseña <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Confirmar contraseña <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="top-margin">
									<label>Habilidad <span class="text-danger">*</span></label>
									<select class="form-control">
								    <option value="Pintor">Pintor</option>
								    <option value="Maestro">Maestro</option>
								    <option value="Medico">Medico</option>
								    <option value="Entrenador">Entrenador</option>
								    <option value=""></option>
								</select>
								</div>
							    <div class="top-margin">
								<label>Tiempo<span class="text-danger">*</span></label>
								<select class="form-control">
								    <option value="1">Una hora</option>
								    <option value="2">Dos horas</option>
								    <option value="3">Tres horas</option>
								    <option value="4">Cuatro horas</option>
								    <option value="4">Cinco horas</option>
								</select>
								</div>
								<hr>
								<div class="row">
									<div class="col-lg-8">
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Editar</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<?php 
		include("footer.php") 
	?>
	
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>