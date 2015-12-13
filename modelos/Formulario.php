<?php
    
   require_once '../lib/mysqlConnection.php';

		class Formularios{
			
			public function __construct() {
				
			}
			
			public function get() {
		    $coneccion = new Database();
		        $query = $coneccion->query("SELECT * FROM usuario");
		        while ($obj = $query->fetch_object()) {
		            echo '<br>';
		            echo $obj->usuario;
		        }
		    }

		}
	?>