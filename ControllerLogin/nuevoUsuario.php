<?php

require_once '../modelos/Usuario.php';

class NuevoUsuario {
    public function registrarNuevoUsuario($data) {
        var_dump($data);
        $usuario = new Usuario($data['usuario'], $data['contrasena'], $data['tipo_usuario'], $data['correo_electronico']);
        $usuario->guardar();;
    }

    public function redireccionarIndex() {
        header("Location: ../index.php");
        die();
    }
}

var_dump($_REQUEST);
$nuevoUsuario = new NuevoUsuario();
$nuevoUsuario->registrarNuevoUsuario($_REQUEST);
$nuevoUsuario->redireccionarIndex();


 ?>