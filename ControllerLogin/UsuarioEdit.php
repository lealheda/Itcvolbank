<?php

require_once '../modelos/Usuario.php';

class UsuarioEdit {

    public function nuevo($data) {
        $usuario = new Usuario();
        $usuario->nuevo($data);
        $usuario->guardar_nuevo();
    }

    public function editar($data) {
        $usuario = new Usuario();
        $usuario->nuevo($data);
        $usuario_id = $usuario->esNuevo($_SESSION['usuario']['id']);
        $usuario->guardar_editado($usuario_id);
    }

    public function editarONuevo($data) {
        $usuario = new Usuario();
        if ( $usuario->esNuevo($_SESSION['usuario']['id']) ) {
            $this->editar($data);
        } else {
            $this->nuevo($data);
        }
    }
}
if (session_id() == "") {
    session_start();
}
$usuarioEdit = new UsuarioEdit();
$usuarioEdit->editarONuevo($_REQUEST);
header('Location: ../index.php');

 ?>