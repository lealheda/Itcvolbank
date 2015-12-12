<?php
    $config = parse_ini_file('../config.ini');
    class MysqlConnection {
        //$mysqli = mysqli_connect("104.236.75.102", "monty", "rioslopez", "itcVolBank");

        public function probarConeccion() {
            $mysqli = new mysqli("104.236.75.102", "monty", "rioslopez", "itcVolBank");
            /* check connection */
            if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
            }

            /* check if server is alive */
            if ($mysqli->ping()) {
                printf ("Our connection is ok!\n");
            } else {
                printf ("Error: %s\n", $mysqli->error);
            }

            /* close connection */
            $mysqli->close();
        }
    }
    $coneccion = new MysqlConnection();
    $coneccion->hola();
?>