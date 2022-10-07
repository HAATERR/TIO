<?php

require_once 'app/Controllers/Player.controllers.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'Home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);


// tabla de ruteo
switch ($params[0]) {
    case 'Home':
        $controller = new PlayerController();
        $controller->showHome();
        break;
    case 'Players':
        $controller = new PlayerController();
        $controller->showPlayers();
        break;
    case 'Teams':
        $controller = new PlayerController();
        $controller->showTeams();
        break;
    
    case 'addPlayer':
       $controller = new PlayerController();
       $controller->addPlayer();
        break;
    case 'deletePlayer':
        // obtengo el parametro de la acción
        $id = $params[1];
        $controller = new PlayerController();
        $controller->deletePlayer($id);
        break;
    case 'updatePlayer':
        $id = $params[1];
        //updatePlayer($id);
        break;
    case 'Teams':
       $controller = new PlayerController();
        $controller->showTeams();
        break;
    case 'addTeam';
    $controller = new PlayerController();
     $controller->addTeam();
        break; 
    case 'deleteTeam':
        // obtengo el parametro de la acción
        $id = $params[1];
        $controller = new PlayerController();
        $controller->deleteTeam($id);
        break;
    case 'updateTeam':
        $id = $params[1];
        //updateTeam($id);
        break;   
   // case 'register';
    //$controller = new UserController();    
    //$controller->showRegister();
    case 'form_admi';
        $controller = new PlayerController();
        $controller->showForm_Admi();
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo('404 Page not found');
        break;
}
