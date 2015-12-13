<?php

require_once '../modelos/Usuario.php';
require_once '../modelos/TipoDeUsuario.php';

class NuevoUsuario {
    private $usuario;

    public function registrarNuevoUsuario($data) {
        $this->usuario = new Usuario();
        $this->usuario->set($data);
        $this->usuario->guardar();
    }

    public function redireccionarTipoUsuario() {
        if ($this->usuario->tipo_usuario == TipoDeUsuario::VOLUNTARIO) {
            header("Location: ../usuarioedit.php");
            die();
        } else if ($this->usuario->tipo_usuario == TipoDeUsuario::ORGANIZACION) {
            header("Location: ../organizacionedit.php");
            die();
        } else {
            header("Location: ../index.php");
            die();
        }
    }
}

$nuevoUsuario = new NuevoUsuario();
$nuevoUsuario->registrarNuevoUsuario($_REQUEST);
$nuevoUsuario->redireccionarTipoUsuario();


 ?>