<?php

require_once '../lib/mysqlConnection.php';

class Actividad {

    public $id;
    public $nombre;
    public $descripcion;
    public $id_usuario;
    public $total_tiempo;
    public $numero_voluntarios;
    public $fecha_inicio;
    public $fecha_termino;

    public function set($data) {
        $this->nombre = $data['nombre'];
        $this->descripcion = $data['descripcion'];
        $this->id_usuario = $_SESSION['usuario']['id'];
        $this->total_tiempo = $data['total_tiempo'];
        $this->numero_voluntarios = $data['numero_voluntarios'];
        $this->fecha_inicio = $data['fecha_inicio'];
        $this->fecha_termino = $data['fecha_termino'];
    }

    public function guardar() {
        $database = new Database();
        $database->query("INSERT INTO actividad ( nombre, descripcion, id_usuario, total_tiempo, numero_voluntarios, fecha_inicio, fecha_termino )
                        VALUES (
                             '$this->nombre'
                            , '$this->descripcion'
                            , '$this->id_usuario'
                            , '$this->total_tiempo'
                            , '$this->numero_voluntarios'
                            , '$this->fecha_inicio'
                            , '$this->fecha_termino'
                         )");
        return $database->getInstancia()->insert_id;
    }

    public function getActividad() {
            $coneccion = new Database();
                $obj = $coneccion->query(" SELECT act.*, CONCAT(IFNULL(vol.nombre,''),' ',IFNULL(vol.`apellido_paterno`,''), ' ',IFNULL(vol.`apellido_materno`,'')) AS nombre_voluntario,
                    IFNULL(org.`nombre`,'') AS nombre_organizacion, GROUP_CONCAT(hab.nombre SEPARATOR ',') AS habilidad
                    FROM actividad AS act
                    LEFT JOIN voluntario AS vol ON act.`id_usuario`=vol.`id_usuario`
                    LEFT JOIN organizacion AS org ON act.`id_usuario`=org.`id_usuario`
                    INNER JOIN actividad_habilidad AS acthab ON act.`id`=acthab.id_actividad
                    INNER JOIN habilidad AS hab ON hab.`id`=acthab.`id_habilidad`
                    GROUP BY act.`id` ");
                    return $obj;
            }

}

 ?>