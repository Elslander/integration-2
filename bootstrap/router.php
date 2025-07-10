<?php
// set routes
$routes = array(
  'home' => array(
    'controller' => 'Pages',
    'action' => 'home'
  ),
  
  'signup' => array(
    'controller' => 'Pages',
    'action' => 'signup'
  ),
  'api-create-contestents' => array(
    'controller' => 'Pages',
    'action' => 'apiCreate'
  )
);

if (empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if (empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];