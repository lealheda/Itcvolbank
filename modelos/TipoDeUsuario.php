<?php

Final class TipoDeUsuario {
    const VOLUNTARIO = '1';
    const ORGANIZACION = '2';
    const ORGANIZADOR = '3';

    private function __construct(){
        // throw an exception if someone can get in here (I'm paranoid)
        throw new Exception("Can't get an instance of Errors");
    }
}

 ?>