<?php
require_once 'libs/Router.php';
require_once 'api/apiPelisController.php';
require_once 'api/ApiCategoriaController.php';
require_once 'api/ApiUserController.php';


$router = new Router();

$router->addRoute('peliculas', 'GET', 'ApiPelisController', 'getPelis');
$router->addRoute('peliculas/categoria/:CATEGORIA', 'GET', 'ApiCategoriaController', 'getPelisCategoria');             
$router->addRoute('peliculas/:START/:END', 'GET', 'ApiPelisController', 'getPelisCantidad');
$router->addRoute('peliculas/:ID', 'GET', 'ApiPelisController', 'getPeli');
$router->addRoute('peliculas/:ID', 'DELETE', 'ApiPelisController', 'removePeli');
$router->addRoute('peliculas', 'POST', 'ApiPelisController', 'addPeli');
$router->addRoute('peliculas/:ID', 'PUT', 'ApiPelisController', 'uptadePeli');

$router->addRoute('user/token', 'GET', 'ApiUserController', 'getToken');

$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);


