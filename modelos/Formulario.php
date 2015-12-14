<?php

   require_once 'lib/mysqlConnection.php';

		class Formulario{

			public function getHabilidad() {
		    $coneccion = new Database();
		        return $query = $coneccion->query("SELECT * FROM habilidad");
		    }

		    public function getVoluntario() {
		    $coneccion = new Database();
                $id = $_SESSION['usuario']['id'];
		    	$obj = $coneccion->query("SELECT usu.*,IFNULL(nombre, '') AS nombre,IFNULL(apellido_paterno, '') AS apellido_paterno, IFNULL(apellido_materno, '') AS apellido_materno, IFNULL(edad, 0) AS edad,
				IFNULL(calle, '') AS calle, IFNULL(numero, 0) AS numero, IFNULL(colonia, '') AS colonia, IFNULL(codigo_postal, 0) AS codigo_postal, IFNULL(id_habilidad, 1) AS id_habilidad,
				IFNULL(tiempo, '00:00:00') AS tiempo, IFNULL(ciudad, '') AS ciudad, IFNULL(pais,'') AS pais, IFNULL(telefono, '') AS telefono, IFNULL(estado, '') AS estado
				FROM usuario usu
				LEFT JOIN voluntario vol ON vol.id_usuario = usu.id
				WHERE usu.id=$id");

		  //       $obj = $coneccion->query("SELECT usu.*,IFNULL(nombre, '') AS nombre,IFNULL(apellido_paterno, '') AS apellido_paterno, IFNULL(apellido_materno, '') AS apellido_materno, IFNULL(edad, 0) AS edad,
				// IFNULL(calle, '') AS calle, IFNULL(numero, 0) AS numero, IFNULL(colonia, '') AS colonia, IFNULL(codigo_postal, 0) AS codigo_postal, IFNULL(id_habilidad, 1) AS id_habilidad,
				// IFNULL(tiempo, '00:00:00') AS tiempo, IFNULL(ciudad, '') AS ciudad, IFNULL(pais,'') AS pais, IFNULL(telefono, '') AS telefono, IFNULL(estado, '') AS estado
				// FROM usuario usu
				// LEFT JOIN voluntario vol ON vol.id_usuario = usu.id
				// WHERE usu.id=1");
		        $result=$obj->fetch_object();
					if(is_object($result)){
						return $result;
					}
					else{
						$temp = new stdClass();
						$temp->id="";
						$temp->nombre="";
						$temp->apellido_paterno="";
						$temp->apellido_materno="";
						$temp->edad="";
						$temp->calle="";
						$temp->numero="";
						$temp->colonia="";
						$temp->codigo_postal="";
						$temp->id_habilidad=1;
						$temp->tiempo="00:00:00";
						$temp->ciudad="";
						$temp->pais="";
						$temp->telefono="";
						$temp->estado="";
						$temp->correo_electronico="";
						$temp->contrasena="";
						return $temp;
					}
		    }

		    public function getOrganizacion() {
            $coneccion = new Database();
                /*$id = $_SESSION['usuario']['id'];
                $obj = $coneccion->query("SELECT usu.*,IFNULL(nombre, '') AS nombre, IFNULL(calle, '') AS calle, IFNULL(numero, 0) AS numero, IFNULL(colonia, '') AS colonia,
                    IFNULL(codigo_postal, 0) AS codigo_postal, IFNULL(ciudad, '') AS ciudad, IFNULL(pais,'') AS pais, IFNULL(telefono, '') AS telefono,
                    IFNULL(descripcion, '') AS descripcion, IFNULL(estado, '') AS estado
                    FROM usuario usu
                    LEFT JOIN organizacion org ON org.id_usuario = usu.id
                    WHERE usu.id=$id");
                            */
        $obj = $coneccion->query("SELECT usu.*,IFNULL(nombre, '') AS nombre, IFNULL(calle, '') AS calle, IFNULL(numero, 0) AS numero, IFNULL(colonia, '') AS colonia,
            IFNULL(codigo_postal, 0) AS codigo_postal, IFNULL(ciudad, '') AS ciudad, IFNULL(pais,'') AS pais, IFNULL(telefono, '') AS telefono,
            IFNULL(descripcion, '') AS descripcion, IFNULL(estado, '') AS estado
            FROM usuario usu
            LEFT JOIN organizacion org ON org.id_usuario = usu.id
            WHERE usu.id=2");
                    $result=$obj->fetch_object();
                    if(is_object($result)){
                        return $result;
                    }
                    else{
                        $temp = new stdClass();
                        $temp->nombre="";
                        $temp->descripcion="";
                        $temp->calle="";
                        $temp->numero="";
                        $temp->colonia="";
                        $temp->codigo_postal="";
                        $temp->ciudad="";
                        $temp->pais="";
                        $temp->telefono="";
                        $temp->estado="";
                        $temp->correo_electronico="";
                        $temp->contrasena="";
                        return $temp;
                    }
            }

		}
?>