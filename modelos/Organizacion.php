<?php

require_once 'lib/mysqlConnection.php';

class Organizacion {
    public $id;
    public $nombre;
    public $calle;
    public $numero;
    public $colonia;
    public $codigo_postal;
    public $ciudad;
    public $pais;
    public $telefono;
    public $descripcion;
    public $estado;
    public function nuevo($data) {
        $this->nombre = $data['nombre'];
        $this->calle = $data['calle'];
        $this->numero = $data['numero'];
        $this->colonia = $data['colonia'];
        $this->codigo_postal = $data['codigo_postal'];
        $this->ciudad = $data['ciudad'];
        $this->pais = $data['pais'];
        $this->telefono = $data['telefono'];
        $this->descripcion = $data['descripcion'];
        $this->estado = $data['estado'];
    }

    public function guardar() {
        $coneccion = new Database();
        $coneccion->query("INSERT INTO organizacion (nombre, calle, numero, colonia, codigo_postal, ciudad, pais, telefono, descripcion, estado)
                            VALUES (
                                '$this->nombre'
                                , '$this->calle'
                                , '$this->numero'
                                , '$this->colonia'
                                , '$this->codigo_postal'
                                , '$this->ciudad'
                                , '$this->pais'
                                , '$this->telefono'
                                , '$this->descripcion'
                                , '$this->estado'
                                )");
    }

  public function getOrganizacion() {
            $coneccion = new Database();
                $id = $_SESSION['usuario']['id'];
                $obj = $coneccion->query("SELECT usu.*,IFNULL(nombre, '') AS nombre, IFNULL(calle, '') AS calle, IFNULL(numero, 0) AS numero, IFNULL(colonia, 0) AS colonia,
                    IFNULL(codigo_postal, 0) AS codigo_postal, IFNULL(ciudad, '') AS ciudad, IFNULL(pais,'') AS pais, IFNULL(telefono, '') AS telefono,
                    IFNULL(descripcion, '') AS descripcion, IFNULL(estado, '') AS estado
                    FROM usuario usu
                    LEFT JOIN organizacion org ON org.id_usuario = usu.id
                    WHERE usu.id=$id");

        // $obj = $coneccion->query("SELECT usu.*,IFNULL(nombre, '') AS nombre, IFNULL(calle, '') AS calle, IFNULL(numero, 0) AS numero, IFNULL(colonia, 0) AS colonia,
        //     IFNULL(codigo_postal, 0) AS codigo_postal, IFNULL(ciudad, '') AS ciudad, IFNULL(pais,'') AS pais, IFNULL(telefono, '') AS telefono,
        //     IFNULL(descripcion, '') AS descripcion, IFNULL(estado, '') AS estado
        //     FROM usuario usu
        //     LEFT JOIN organizacion org ON org.id_usuario = usu.id
        //     WHERE usu.id=2");
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