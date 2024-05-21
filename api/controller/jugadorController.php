<?php
 require_once 'api/model/model.php';
 require_once "api/view/jugadorView.php";
require_once "api/model/jugadorModel.php";
class jugadorController{

    private $model;
    private $view;
    private $err;
    public function __construct()
    {
        $this->model = new jugadorModel();
        $this->view = new jugadorView();
    }
    function showTasks(){
         $tareas = $this->model->getAll();
         $this->view->showTasks($tareas);
    }
    function newJugador(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['nombre']) && !empty($_POST['apellido'])&&
            !empty($_POST['club']) && isset($_POST['representante_id']
            )){
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $club = $_POST['club'];
                $representante = $_POST['representante_id'];
                $this->model->insert($nombre, $apellido, $club, $representante);
                header("Location:" .BASE_URL. "home");             

            }else{
                echo'algo fallo';
            }
        }
    }
    function buscarJugador($id){
        $jugador =  $this->model->get($id);
        if($jugador){
            $this->$view->showJugador($jugador);
        }
    }
}