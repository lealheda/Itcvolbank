<?php

require_once '../modelos/Organizacion.php';

class OrganizacionEdit {

    public function nuevo($data) {
        $organizacion = new Organizacion();
        $organizacion->nuevo($data);
        $organizacion->guardar_nuevo();
    }

    public function editar($data) {
        $organizacion = new Organizacion();
        $organizacion->nuevo($data);
        $organizacion_id = $organizacion->esNuevo($_SESSION['usuario']['id']);
        $organizacion->guardar_editado($organizacion_id);
    }

    public function editarONuevo($data) {
        $organizacion = new Organizacion();
        if ( $organizacion->esNuevo($_SESSION['usuario']['id']) ) {
            $this->editar($data);
        } else {
            $this->nuevo($data);
        }
    }
}
if (session_id() == "") {
    session_start();
}
$organizacionEdit = new OrganizacionEdit();
$organizacionEdit->editarONuevo($_REQUEST);
header('Location: ../index.php');

 ?>