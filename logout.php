<?php

if (session_id() == "")
            session_start();
$_SESSION['logueado'] = false;
$_SESSION['usuario'] = false;
header('Location: index.php');
die();

 ?>