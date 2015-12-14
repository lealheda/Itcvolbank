<?php

require_once '../lib/mysqlConnection.php';

class ActividadHabilidad {
    public $id;
    public $id_actividad;
    public $id_habilidad;

    public function set($data) {
        $this->id_actividad = $data['id_actividad'];
        $this->id_habilidad = $data['id_habilidad'];
    }

    public function guardar() {
        $database = new Database();
        $database->query("INSERT INTO actividad_habilidad ( id_actividad, id_habilidad )
                        VALUES ( '$this->id_actividad', '$this->id_habilidad' )");
        return $database->getInstancia()->insert_id;
    }

}

 ?>