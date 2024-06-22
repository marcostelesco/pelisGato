<?php
require_once 'model/pelisModel.php';
require_once 'model/categorieModel.php';
require_once 'api/apiPelisView.php';

class ApiCategoriaController{
    private $model;
    private $view;

    private $data;

    function __construct(){
        $this->model = new categorieModel();
        $this->view = new ApiPelisView();
        $this->data = file_get_contents("php://input");
    }

    function getPelisCategoria($params = null){
        $categoria = $params[':CATEGORIA'];
        $peli = $this->model->getPelisSegunCategoira($categoria);
        if($peli){
            $this->view->response($peli);
        }
        else{
            $this->view->response("Categoria = $categoria not found", 404);
        }
        
    }

}