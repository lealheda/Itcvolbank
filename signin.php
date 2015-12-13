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
			<li class="active">Acesso a usuario</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Inicia sesión</h1>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Ingresa en tu cuenta</h3>
							<p class="text-center text-muted">No tiene una cuenta, <a href="signup.php">Registrate aqui</a>. </p>
							<hr>

							<form type="POST" action="/Itcvolbank/ControllerLogin/login.php">
								<div class="top-margin">
									<label>Usuario <span class="text-danger">*</span></label>
									<input name="usuario" type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Contraseña <span class="text-danger">*</span></label>
									<input name="contrasena" type="password" class="form-control">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Olvidaste tu contraseña?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Inicia sesión</button>
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