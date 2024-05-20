<?php
require_once "api/model/model.php";

class TaskModel extends Model{

    function getAll(){
        //abrimos la conexion;
        $db = $this->createConexion();
       
        //Enviar la consulta
        $sentencia = $db->prepare("SELECT * FROM jugador");
        $sentencia->execute();
        $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }
}