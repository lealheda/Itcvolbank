<?php
    
   require_once 'lib/mysqlConnection.php';

		class Formulario{
			
			public function getHabilidad() {
		    $coneccion = new Database();
		        return $query = $coneccion->query("SELECT * FROM habilidad");
		    }

		}
	?>