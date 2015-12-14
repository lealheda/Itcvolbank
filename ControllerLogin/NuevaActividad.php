<?php

require_once '../modelos/Actividad.php';
require_once '../modelos/Habilidad.php';
require_once '../modelos/ActividadHabilidad.php';

if (session_id() == "")
            session_start();


class NuevaActividad {
    public function guardar($data) {
        $actividad = new Actividad();
        $actividad->set($data);
        $id_actividad = $actividad->guardar();
        $this->guardarHabilidades($data['id_actividad'], $id_actividad);
    }

    private function guardarHabilidades($habilidades, $id_actividad) {
        foreach ($habilidades as $llave => $valor) {
            $actividadHabilidad = new ActividadHabilidad();
            $actividadHabilidad->set(array(
                'id_actividad' => $id_actividad,
                'id_habilidad' => $valor)
            );
            $actividadHabilidad->guardar();
        }
    }
}

$nuevaActividad = new NuevaActividad();
$nuevaActividad->guardar($_REQUEST);
header('Location: ../actividades.php');
die();

 ?>