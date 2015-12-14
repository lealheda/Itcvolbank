<?php

require_once '../lib/mysqlConnection.php';

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

}

 ?>