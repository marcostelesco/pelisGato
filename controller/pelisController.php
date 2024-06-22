<?php
require_once ('model/pelisModel.php');
require_once ('view/pelisView.php');
require_once ('controller/userController.php');
require_once('model/categorieModel.php');


class PelisController  {

    private $model;
    private $view;

    function __construct(){
        $this->model = new PelisModel();
        $this->view = new PelisView();
        $this->modelCategorias = new categorieModel();
    }

    
    function showHome(){
        $pelis = $this->model->getPelis();
        $categorias = $this->modelCategorias->getCategorias();
        $this->view->showHome($pelis, $categorias);
    }
    
    function showPelicula($id){
        $peli = $this->model->getPelicula($id);
        $this->view->showPelicula($peli);
    }
    
    function eliminar($id) {
        $statusUser = $this->checkLoggedIn();
        if($statusUser == true){
            $this->model->eliminar($id);
            $this->view->RedirectHome();
        }
        $this->view->RedirectHome(); 
    }

    function createPeli(){
        
        $categoria = $_POST['categorie'];
        $id_categorie = $this->modelCategorias->getIDCategoria($categoria);
    
        if( $_FILES['img']['type'] == "image/jpg" ||
            $_FILES['img']['type'] == "image/jpeg" ||
            $_FILES['img']['type'] == "image/png" ){
            $this->model->insertPeli($_POST['name'], $_POST['description'], $_POST['release_date'], $_FILES['img']['tmp_name'], $categoria, $id_categorie);
            $this->view->RedirectHome();
        }else{
            $this->model->insertPeli($_POST['name'], $_POST['description'], $_POST['release_date'],$_FILES['img']['tmp_name'], $categoria, $id_categorie);
            $this->view->RedirectHome();
        }
    }

    private function uploadImg($image){
        $target = 'img/games/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }
    function modificarView($id){
        $categorias = $this->modelCategorias->getCategorias();
        $peli = $this->model->getPelicula($id);
        $this->view->modificar($peli, $categorias);
    }
    function modificar($id){
            $categoria = $_POST['categorie'];
            $id_categorie = $this->modelCategorias->getIDCategoria($categoria);
            $this->model->modificarPelicula($_POST['name'], $_POST['description'], $_POST['release_date'], $categoria, $id_categorie, $id);
            $this->view->RedirectHome();
    }
    function eliminarTodasSegunCategoria($categoria){
        $this->model->eliminarTodasSegunCategoria($categoria);
    }

    function modificarTituloCategoria($categoria){
        $tituloNuevo = $_POST['titulocategoria'];
        $this->model->modificarTituloCategoria($categoria, $tituloNuevo);
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