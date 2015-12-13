<?php
    
   require_once 'lib/mysqlConnection.php';

		class Formulario{
			
			public function get() {
		    $coneccion = new Database();
		        return $query = $coneccion->query("SELECT * FROM habilidad");
		    }

		}
	?>