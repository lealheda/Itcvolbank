<!DOCTYPE html>
<html lang="en">

<?php include("head.php");
require_once 'modelos/Formulario.php';

?>

<body>

<?php include("header.php") ?>
	<header id="head" class="secondary"></header>
	<!-- container -->
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="index.php">Nueva actividad</a></li>
			<li class="active">Nueva actividad</li>
		</ol>


		<div class="row">

			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Nueva actividad</h1>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Nueva actividad</h3>
							<p class="text-center text-muted">Favor de llenar los datos </p> </p>
							<hr>

							<form type="POST" action="/Itcvolbank/ControllerLogin/NuevaActividad.php">
								<div class="top-margin">
									<label>Nombre <span class="text-danger">*</span></label>
									<input name="nombre" type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Descripción <span class="text-danger">*</span></label>
									<input name="descripcion" type="textarea" class="form-control">
								</div>
								<div class="row top-margin">
								<div class="col-sm-6">
									<label>Total tiempo <span class="text-danger">*</span></label>
									<input name="total_tiempo" type="text" class="form-control">
								</div>
								<div class="col-sm-6">
									<label>Numero de voluntarios <span class="text-danger">*</span></label>
									<input name="numero_voluntarios" type="text" class="form-control">
								</div>
								</div>
								<div class="row top-margin">
								<div class="col-sm-6">
									<label>Fecha inicio <span class="text-danger">*</span></label>
									<input name="fecha_inicio" type="date" class="form-control">
								</div>
								<div class="col-sm-6">
									<label>Fecha termino <span class="text-danger">*</span></label>
									<input name="fecha_termino" type="date" class="form-control">
								</div>
								</div>
								<div class="top-margin">
									<label>numero de habilidades <span class="text-danger">*</span></label>
									<input name="" id="numero_habilidades" type="number" class="form-control">
								</div>
								<div class="top-margin">
									<label>Tipos de habilidades <span class="text-danger">*</span></label>
								</div>
								<div id="agregar" class="top-margin">

								</div>
								<div class="row top-margin"></div>
								<hr>
								<div class="row">
									<div class="col-lg-8">
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Agregar</button>
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

	<script type="text/javascript">
		$(document).ready(function() {
			$('#numero_habilidades').on('change', function() {
			  if($(this).val() > 5 ) {
			  	alert('No debe de ser mayor que 5')
			  	$(this).val(5);
			  }
			  $('#agregar').html('');
			  for (var i = 0; i < $(this).val(); i++) {
			  	$('#agregar').append($('#select_habilidad').html());
			  };
			});
		});
	</script>

	<script type="text/html"  id="select_habilidad">
		<select name="id_actividad[]" class="form-control">
			<?php
				$formulario = new Formulario();
				$query_result = $formulario->getHabilidad();
				while ($actividad = $query_result->fetch_object()) {
			 	?>
			 		<option value="<?php echo $actividad->id ?>"><?php echo $actividad->nombre ?></option>
			 <?php } ?>
		</select>

	</script>

</body>
</html>