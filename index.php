<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

/* 
  Write the code to add a new Pizza
  You should add a form, validation and the code in the controller to add a new pizza.
*/

require_once "../../vendor/autoload.php";
require_once "./bootstrap/database.php";
require_once "./bootstrap/router.php";

$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();