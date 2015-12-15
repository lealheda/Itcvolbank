<?php

require_once '../modelos/Usuario.php';

class Login {
    private $usuario;

    public function check($data) {
        $exist = false;
        $this->usuario = new Usuario();
        $query_result = $this->usuario->getByUsuario($data['usuario'], $data['contrasena']);
        $query_object = $query_result->fetch_object();
        if (is_object($query_object)) {
            if ($query_object->id > 0) {
                $exist = true;
                $this->loguear($query_object);
            } else {
                $exist = false;
            }
        } else {
            $exist = false;
        }
        return $exist;
    }

    private function loguear($usuario) {
        if (session_id() == "")
            session_start();
        $_SESSION['logueado'] = true;
        $_SESSION['usuario'] = array(
            'usuario' => $usuario->usuario,
            'tipo_usuario' => $usuario->tipo_usuario,
            'id' => $usuario->id
        );
    }
}

$login = new Login();
if ($login->check($_REQUEST)) {
    header('Location: ../index.php');
    die();
} else {
    header('Location: ../index.php?login=false');
    die();
}

 ?>