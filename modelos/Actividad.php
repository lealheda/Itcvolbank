<?php

require_once 'lib/mysqlConnection.php';

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
        $this->id_usuario = $_SESSION['id'];
        $this->total_tiempo = $data['total_tiempo'];
        $this->numero_voluntarios = $data['numero_voluntarios'];
        $this->fecha_inicio = $data['fecha_inicio'];
        $this->fecha_termino = $data['fecha_termino'];
    }

    public function guardar() {
        $database = new Database();
        $database->query("INSERT INTO actividad ( nombre, descripcion, id_usuario, total_tiempo, numero_voluntarios, fecha_inicio, fecha_termino )
                        VALUES (
                            , '$this->nombre'
                            , '$this->descripcion'
                            , '$this->id_usuario'
                            , '$this->total_tiempo'
                            , '$this->numero_voluntarios'
                            , '$this->fecha_inicio'
                            , '$this->fecha_termino'
                         )");
    }
}

$actividad = new Actividad();
$actividad->nueva($_REQUEST);

 ?>