<?php

if (session_id() == "")
            session_start();
$_SESSION['logueado'] = false;
header('Location: index.php');
die();

 ?>