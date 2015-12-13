<?php
    require_once '../modelos/Usuario.php';
    class Database
    {
        private $mysqli;

        function __construct() {
            $config = parse_ini_file('config.ini');
            $this->mysqli   = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
        }

        public function query($query)
        {
            return $this->mysqli->query($query);
        }

        public function getInstancia() {
            return $this->mysqli;
        }

        public function probarConeccion() {
            /* check connection */
            if ($this->mysqli->connect_errno) {
                printf("Connect failed: %s\n", $this->mysqli->connect_error);
                exit();
            }

            /* check if server is alive */
            if ($this->mysqli->ping()) {
                printf ("Our connection is ok!\n");
            } else {
                printf ("Error: %s\n", $this->mysqli->error);
            }

            /* close connection */
            $this->mysqli->close();
        }
    }

    // $coneccion = new Database();
    // // $coneccion->query("INSERT INTO `itcVolBank`.`habilidad`(`id`,`nombre`,`descripcion`) VALUES ( NULL,'Maestro','Aprendizaje de alguna materia en especifico');");
    // echo $coneccion->query('SELECT * FROM usuario')->fetch_object()->id;

    $usuario = new Usuario();
    $usuario->get();
    //echo $this->mysqli->query('SELECT * FROM usuario')->fetch_object()->usuario;
?>