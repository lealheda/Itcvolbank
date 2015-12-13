<?php

require_once '../modelos/Organizacion.php';

class OrganizacionEdit {
    public function editar($data) {
        $organizacion = new Organizacion();
        $organizacion->nuevo($data);
        $organizacion->guardar();
    }
}

$organizacionEdit = new OrganizacionEdit();
$organizacionEdit->editar($_REQUEST);

 ?>