<?php
require_once 'api/controller/jugadorController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
$params = explode('/', $action);
switch ($params[0]) {
    case 'home':
        $controller = new jugadorController();
        $controller->showTasks();
        break;
        case 'addJugador':
            $controller = new jugadorController();
            $controller->newJugador();
            break;
        case 'showJugador':
            $controller = new jugadorController();
            $controller->showJugador($params[2]);
            break;
    default:
       echo"404 not foundd";
}



