<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); 
    require 'modelos/actividad.php';
?>

<body class="home">
<?php include("header.php") ?>

	<!-- Header -->
	<header id="head">
		<div class="container">
		</div>
	</header>
	<!-- /Header -->
	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">El mejor lugar para ayudar a los demas</h2>
		<p class="text-muted">
			Ayudar a las personas, brindar apoyo, cooperar con las organizaciones, etc., son actos buenos que mejoran la calidad de vida en general..
		</p>
	</div>
		<div class="container">
	       <?php
                    $param = new Actividad();
                    $result = $param->getActividad();
                ?>
			<table id="actividades" class="table table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th># actividad</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Voluntario/Organizacion</th>
                <th>Tiempo total</th>
                <th>Numero voluntarios</th>
                <th>Fecha inicio</th>
                <th>Fecha termino</th>
                <th>Habilidades</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th># actividad</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Nombre usuario</th>
                <th>Tiempo total</th>
                <th>Voluntario/Organizacion</th>
                <th>Fecha inicio</th>
                <th>Fecha termino</th>
                <th>Habilidades</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
        <tbody>
            
                <?php
                    while ($actividad = $result->fetch_object()) {
                    echo "<tr>";
                    echo "<td>$actividad->id</td>";
                    echo "<td>$actividad->nombre</td>";
                    echo "<td>$actividad->descripcion</td>";
                    if($actividad->nombre_voluntario!='  '){
                        echo "<td>$actividad->nombre_voluntario</td>";    
                    }
                    if($actividad->nombre_organizacion!=''){
                        echo "<td>$actividad->nombre_organizacion</td>";    
                    }
                    echo "<td>$actividad->total_tiempo</td>";
                    echo "<td>$actividad->numero_voluntarios</td>";
                    echo "<td>$actividad->fecha_inicio</td>";
                    echo "<td>$actividad->fecha_termino</td>";
                    echo "<td>$actividad->habilidad</td>";
                    echo "<td><a href=".">Ver</a>/<a href=".">Aplicar</a></td>";
                    echo "</tr>";
                    }
                ?>
                
        </tbody>
    </table>
</div>

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


