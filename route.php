<?php
require_once 'api/controller/menuController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
$params = explode('/', $action);
switch ($params[0]) {
    case 'home':
        $controller = new MenuController();
        $controller->showTasks();
        break;

    default:
       echo"404 not foundd";
}



