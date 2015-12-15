<?php

require_once 'mysqlConnection.php';

class Voluntario {

    public $id;
    public $nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $calle;
    public $numero;
    public $colonia;
    public $codigo_postal;
    public $id_habilidad;
    public $tiempo;
    public $ciudad;
    public $pais;
    public $telefono;
    public $estado;
    public $id_usuario;

     public function guardar_editado($id) {
        $coneccion = new Database();
        $coneccion->query(
            "UPDATE usuario
            SET
            nombre = '$this->nombre',
            apellido_paterno = '$this->apellido_paterno',
            apellido_materno = '$this->apellido_materno',
            edad = '$this->edad',
            calle = '$this->calle',
            numero = '$this->calle',
            colonia = '$this->colonia',
            codigo_postal = '$this->ciudad',
            id_habilidad = '$this->id_habilidad',
            tiempo = '$this->tiempo',
            ciudad = '$this->ciudad',
            pais = '$this->pais',
            telefono = '$this->telefono',
            estado = '$this->estado'
            WHERE id = '$id' "

            );
    }

    public function esNuevo($id) {
        $coneccion = new Database();
        $result = $coneccion->query("SELECT id FROM voluntario WHERE id_usuario = $id");
        $result_object = $result->fetch_object();
        if(is_object($result_object)) {
            return $result_object->id;
        } else {
            return false;
        }
    }

    public function nuevo($data) {
        $this->nombre = $data['nombre'];
        $this->apellido_paterno = $data['apellido_paterno'];
        $this->apellido_materno = $data['apellido_materno'];
        $this->edad = $data['edad'];
        $this->calle = $data['calle'];
        $this->numero = $data['numero'];
        $this->colonia = $data['colonia'];
        $this->codigo_postal = $data['codigo_postal'];
        $this->id_habilidad = $data['id_habilidad'];
        $this->tiempo = $data['tiempo'];
        $this->ciudad = $data['ciudad'];
        $this->pais = $data['pais'];
        $this->telefono = $data['telefono'];
        $this->estado = $data['estado'];
    }

    public function guardar_nuevo() {
        $coneccion = new Database();
        $this->id_usuario = $_SESSION['usuario']['id'];
        $coneccion->query("INSERT INTO voluntario (nombre, apellido_paterno, apellido_materno, edad, calle, numero, colonia, codigo_postal, id_habilidad, tiempo, ciudad, pais, telefono, estado, id_usuario)
                            VALUES (
                                '$this->nombre'
                                , '$this->apellido_paterno'
                                , '$this->apellido_materno'
                                , '$this->edad'
                                , '$this->calle'
                                , '$this->numero'
                                , '$this->colonia'
                                , '$this->codigo_postal'
                                , '$this->id_habilidad'
                                , '$this->tiempo'
                                , '$this->ciudad'
                                , '$this->pais'
                                , '$this->telefono'
                                , '$this->estado'
                                , '$this->id_usuario'
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

if (session_id() == "")
            session_start();

 ?>