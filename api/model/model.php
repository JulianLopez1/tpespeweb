<?php
require_once "config.php";

class Model {

    protected $conexion;
    
    public function __construct()
    {
        $this->conexion = $this->createConexion();
        $this->deploy();
    }

    function createConexion(){
        try {
            $db = new PDO("mysql:host=".MYSQL_HOST.";charset=utf8", MYSQL_USER, MYSQL_PASS);
           
            $this->createOrUseDatabase($db);

        
        } catch(Exception $e){
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }

        return $db;
    }

    /*FUNCION QUE VERIFICA SI EXISTE LA BASE DE DATOS, SI EXISTE HACE USO DE LA MISMA CASO CONTRARIO LA CREA.*/
    private function createOrUseDatabase($db){
        $query = $db->query("SHOW DATABASES LIKE '".MYSQL_DB."'");
        $databaseExists = $query->rowCount() > 0;

        if(!$databaseExists) {
            $db->query("CREATE DATABASE ".MYSQL_DB."");
        }
        
        $db->query("USE ".MYSQL_DB."");
    }

    /*FUNCION QUE PERMITE LA CREACION DE TABLAS O ENTIDADES.*/
    private function deploy() {
        $this->createTables();           
    }



    private function createTables() {
       // En la variable sql se coloca el su codigo de creacion de tablas
       $sql = "CREATE TABLE IF NOT EXISTS `jugador` (
        `id` int(11) NOT NULL,
        `nombre` text NOT NULL,
        `apellido` text NOT NULL,
        `club` text NOT NULL,
        `representante_id` int(11) NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

        
        );
        
        CREATE TABLE IF NOT EXISTS `representante` (
            `id` int(11) NOT NULL,
            `nombre` text NOT NULL,
            `apellido` text NOT NULL,
            `contacto` text NOT NULL
        PRIMARY KEY (`id`)
        );";

$this->conexion->query($sql);
        

    }
}
