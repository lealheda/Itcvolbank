<?php

require_once 'mysqlConnection.php';

class Usuario {
    public $id;
    public $usuario;
    public $contrasena;
    public $tipo_usuario;
    public $correo_electronico;

    public function set($data) {
        $this->usuario = $data['usuario'];
        $this->contrasena = $data['contrasena'];
        $this->tipo_usuario = $data['tipo_usuario'];
        $this->correo_electronico = $data['correo_electronico'];
    }

    public function guardar() {
        $coneccion = new Database();
        $coneccion->query("INSERT INTO `itcVolBank`.`usuario`(`usuario`,`contrasena`, `tipo_usuario`, `correo_electronico`)
                          VALUES ( '$this->usuario','$this->contrasena', '$this->tipo_usuario', '$this->correo_electronico');");
    }

    public function getByUsuario($usuario, $contrasena) {
        $coneccion = new Database();
        $query = $coneccion->query("SELECT * FROM usuario WHERE usuario = '$usuario' AND contrasena = '$contrasena'");
        return $query;
    }

}

 ?>