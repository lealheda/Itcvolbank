<!DOCTYPE html>
<html lang="en">

<?php include("head.php");
require 'modelos/Formulario.php';


?>

<body>
<?php include("header.php"); ?>
	<?php

		$param = new Formulario();
		$result = $param->getVoluntario();
	?>
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


				<?php
					$param = new Formulario();
					$result = $param->getVoluntario();
				?>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">editar perfil de cuenta</h3>
							<p class="text-center text-muted">Favor de llenar los datos </p> </p>
							<hr>

							<form type="POST" action="/Itcvolbank/ControllerLogin/UsuarioEdit.php">
								<div class="top-margin">
									<label>Nombre <span class="text-danger">*</span></label>
									<input name="nombre" type="text" class="form-control" value="<?php echo $result->nombre;?>">
								</div>
								<div class="row top-margin">
								<div class="col-sm-6">
									<label>Apellido paterno <span class="text-danger">*</span></label>
									<input name="apellido_paterno" type="text" class="form-control" value="<?php echo $result->apellido_paterno;?>">
								</div>
								<div class="col-sm-6">
									<label>Apellido Materno <span class="text-danger">*</span></label>
									<input name="apellido_materno" type="text" class="form-control" value="<?php echo $result->apellido_materno;?>">
								</div>
								</div>
								<div class="top-margin">
									<label>Edad <span class="text-danger">*</span></label>
									<input name="edad" type="text" class="form-control" value="<?php echo $result->edad;?>">
								</div>
								<div class="row top-margin">
								<div class="col-sm-6">
									<label>Calle <span class="text-danger">*</span></label>
									<input name="calle" type="text" class="form-control" value="<?php echo $result->calle;?>">
								</div>
								<div class="col-sm-6">
									<label>Número <span class="text-danger">*</span></label>
									<input name="numero" type="text" class="form-control" value="<?php echo $result->numero;?>">
								</div>
								</div>
								<div class="row top-margin">
								<div class="col-sm-6">
									<label>Colonia <span class="text-danger">*</span></label>
									<input name="colonia" type="text" class="form-control" value="<?php echo $result->colonia;?>">
								</div>
								<div class="col-sm-6">
									<label>Código postal <span class="text-danger">*</span></label>
									<input name="codigo_postal" type="text" class="form-control" value="<?php echo $result->codigo_postal;?>">
								</div>
								</div>
								<div class="row top-margin">
								<div class="col-sm-6">
									<label>Ciudad <span class="text-danger">*</span></label>
									<input name="ciudad" type="text" class="form-control" value="<?php echo $result->ciudad;?>">
								</div>
								<div class="col-sm-6">
									<label>Estado <span class="text-danger">*</span></label>
									<input name="estado" type="text" class="form-control" value="<?php echo $result->estado;?>">
								</div>
								</div>
								<div class="top-margin">
									<label>Pais <span class="text-danger">*</span></label>
									<input name="pais" type="text" class="form-control" value="<?php echo $result->pais;?>">
								</div>
								<div class="top-margin">
									<label>Telefono <span class="text-danger"></span></label>
									<input name="telefono" type="text" class="form-control" value="<?php echo $result->telefono;?>">
								</div>
								<div class="top-margin">
									<label>Correo electronico <span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="<?php echo $result->correo_electronico;?>">
								</div>
								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Contraseña <span class="text-danger">*</span></label>
										<input type="password" class="form-control" value="<?php echo $result->contrasena;?>">
									</div>
									<div class="col-sm-6">
										<label>Confirmar contraseña <span class="text-danger">*</span></label>
										<input type="password" class="form-control" value="<?php echo $result->contrasena;?>">
									</div>
								</div>
								<div class="top-margin">
									<label>Habilidad <span class="text-danger">*</span></label>
									<select name="id_habilidad" class="form-control">
									<?php

											$param = new Formulario();
											$query = $param->getHabilidad();
											while ($obj = $query->fetch_object()) {
												echo '<option value="'.$obj->id.'">'.$obj->nombre.'</option>';
										        }
									?>
								</select>
								</div>
							    <div class="top-margin">
								<label>Tiempo <span class="text-danger">*</span></label>
								<select name="tiempo" class="form-control">
								    <option value="01:00:00">Una hora</option>
								    <option value="02:00:00">Dos horas</option>
								    <option value="03:00:00">Tres horas</option>
								    <option value="04:00:00">Cuatro horas</option>
								    <option value="05:00:00">Cinco horas</option>
								    <option value="06:00:00">Seis horas</option>
								</select>
								</div>
								<hr>
								<div class="row">
									<div class="col-lg-8">
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Actualizar</button>
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