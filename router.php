<?php
require_once ('controller/pelisController.php');
require_once ('controller/categorieController.php');
require_once ('controller/userController.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);


$PelisController = new PelisController();
$CategorieController =  new CategorieController();
$userController = new userController();



switch ($params[0]) {
    case 'home':
        $PelisController->showHome();
        break;
    case 'pelicula' :
        $PelisController->showPelicula($params[1]);
        break;
    case 'categorias':                    
        $CategorieController->ShowCategorias();
        break;   
    case 'categoria' :
        $CategorieController->ShowCategoria($params[1]); 
        break;
    case 'eliminar' :
         $PelisController->eliminar($params[1]);
         break;
    case 'createPeli':
        $PelisController->createPeli();
        break;      

    case 'modificarview' :
        $PelisController->modificarView($params[1]);
        break;
    case 'modificar' : 
        $PelisController->modificar($params[1]);
        break;   
    case 'eliminarcategoria' :
        $PelisController->eliminarTodasSegunCategoria($params[1]);
        $CategorieController->eliminarCategoria($params[1]);   
        break; 
    case 'modificarcategoria' :
        $PelisController->modificarTituloCategoria($params[1]); 
        $CategorieController->modificarTituloCategoria($params[1]);
        break; 
    case 'agregarcategoriaview' :
        $CategorieController->agregarCategoriaView();       
        break; 
    case 'agregarcategoria' :
        $CategorieController->agregarCategoria();
        break;
    case 'login':
        $userController->logIn();
        break;
    case 'verify':
        $userController->verifyUser();
        break; 
    case 'logout':
        $userController->logOut();
        break;      
        
    default: 
        echo('404 NOT FOUND');
        break;
}

