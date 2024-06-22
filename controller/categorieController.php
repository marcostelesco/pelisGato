<?php
require_once ('model/categorieModel.php');
require_once ('view/categorieView.php');
require_once ('controller/userController.php');

class CategorieController {
    private $model;
    private $view;

    function __construct(){
        $this->model = new CategorieModel();
        $this->view = new CategorieView();
    }

    function ShowCategoria($categoria){
        $pelis = $this->model->getPelisSegunCategoira($categoria); 
        $this->view->getPelisSegunCategoira($pelis, $categoria);

    }

    function ShowCategorias(){
        $categorias = $this->model->getCategorias();
        $this->view->ShowCategorias($categorias);
    }
    
    function eliminarCategoria($categoria){
        $statusUser = $this->checkLoggedIn();
        if($statusUser == true){
            $this->model->eliminarCategoria($categoria);
            $this->view->RedirectCategorias();
        }
        $this->view->RedirectHome(); 





        
    }

    function modificarTituloCategoria($categoria){ 
        $tituloNuevo = $_POST['titulocategoria'];
    
        $this->model->modificarTituloCategoria($categoria,$tituloNuevo);
        $this->view->RedirectCategorias();
    } 

    function agregarCategoriaView(){ 
        $this->view->agregarCategoriaView();

    }

    function agregarCategoria(){
        $tituloNuevo = $_POST['categorianuevatitulo'];
        
        $this->model->agregarCategoria($tituloNuevo);
        $this->view->RedirectCategorias();
    }

    public function checkLoggedIn(){
        session_start();
        if(!empty($_SESSION["user"])){
            return true;
        }
        else{
            return false;
        }
    }
}
