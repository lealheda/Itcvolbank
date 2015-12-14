<?php

class Habilidad {
    public $id;
    public $nombre;
    public $descripcion;

    public function set($data) {
        $this->id = $data['id'];
        $this->nombre = $data['nombre'];
        $this->descripcion = $data['descripcion'];
    }


}

 ?>