<?php
 require_once 'api/model/model.php';
//  require_once "view/jugadorView.php";

class MenuController{

    private $model;
    // private $view;
    // private $err;
    public function __construct()
    {
        $this->model = new Model();
        // $this->view = new jugadorView();
    }
    function showTasks(){
        echo 'sdffdsfsd0';
        // $tareas = $this->model->getAll();
        // $this->view->showTasks($tareas);
    }
}