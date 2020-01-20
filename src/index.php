<?php
session_start();
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
    'controller' => 'Products',
    'action' => 'index'
  ),
  'book' => array(
    'controller' => 'Products',
    'action' => 'book'
  ),
  'shop' => array(
    'controller' => 'Products',
    'action' => 'shop'
  ),
  'abonnement' => array(
    'controller' => 'Products',
    'action' => 'abonnement'
  ),
  'product' => array(
    'controller' => 'Products',
    'action' => 'product'
  ),
  'mandje' => array(
    'controller' => 'Products',
    'action' => 'mandje'
  ),
  'form' => array(
    'controller' => 'Products',
    'action' => 'form'
  ),
  'form' => array(
    'controller' => 'Products',
    'action' => 'form'
  ),
  'long' => array(
    'controller' => 'Products',
    'action' => 'long'
  )

);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
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
