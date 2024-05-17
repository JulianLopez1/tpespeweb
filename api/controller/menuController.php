<?php
 require_once 'model/taskModel.php';
 require_once "view/jugadorView.php";

class menuController{

    private $model;
    private $view;
    private $err;
    public function __construct()
    {
        $this->model = new TaskModel();
        $this->view = new jugadorView();
    }
    function showTasks(){
        $tareas = $this->model->getAll();
        $this->view->showTasks($tareas);
    }
}