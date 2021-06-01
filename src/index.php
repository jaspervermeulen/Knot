<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$routes = array(
  'home' => array(
    'controller' => 'Pages',
    'action' => 'index'
  ),
  'agenda' => array(
    'controller' => 'Pages',
    'action' => 'agenda'
  ),
  'contact' => array(
    'controller' => 'Pages',
    'action' => 'contact'
  ),
  'member' => array(
    'controller' => 'Pages',
    'action' => 'member'
  ),
  'tickets' => array(
    'controller' => 'Pages',
    'action' => 'tickets'
  ),
  'regularticket' => array(
    'controller' => 'Ticket',
    'action' => 'regularticket'
  ),
  'memberticket' => array(
    'controller' => 'Ticket',
    'action' => 'memberticket'
  ),
  'studentticket' => array(
    'controller' => 'Ticket',
    'action' => 'studentticket'
  ),
  'detail' => array(
    'controller' => 'Pages',
    'action' => 'detail'
  ),
  'about' => array(
    'controller' => 'Pages',
    'action' => 'about'
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
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
