<?php

require_once '../lib/mysqlConnection.php';

class Usuario {
    public $id;
    public $usuario;
    public $contrasena;
    public $tipo_usuario;
    public $correo_electronico;

    public function __construct($usuario, $contrasena, $tipo_usuario, $correo_electronico) {
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->tipo_usuario = $tipo_usuario;
        $this->correo_electronico = $correo_electronico;
    }

    public function guardar() {
        $coneccion = new Database();
        $coneccion->query("INSERT INTO `itcVolBank`.`usuario`(`usuario`,`contrasena`, `tipo_usuario`, `correo_electronico`)
                          VALUES ( '$this->usuario','$this->contrasena', '$this->tipo_usuario', '$this->correo_electronico');");
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