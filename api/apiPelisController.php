<?php
require_once 'model/pelisModel.php';
require_once 'model/categorieModel.php';
require_once 'api/apiPelisView.php';
require_once 'helpers/auth.api.helper.php';

class ApiPelisController{
    private $model;
    private $view;
    private $authHelper;

    private $data;

    function __construct(){
        $this->model = new PelisModel();
        $this->view = new ApiPelisView();
        $this->authHelper = new AuthHelper();
        $this->data = file_get_contents("php://input");
    }

    function getData(){
        return json_decode($this->data);
    }

    function getPelis($params = null){
        $user = $this->authHelper->currentUser();
        if(!$user){
            $this->view->response('Unauthorized', 401);
            return;
        }


        $pelis = $this->model->getPelis();
        $this->view->response($pelis);
        
    }

    function getPeli($params = null){
        $user = $this->authHelper->currentUser();
        if(!$user){
            $this->view->response('Unauthorized', 401);
            return;
        }
        $id = $params[':ID'];
        $peli = $this->model->getPelicula($id);
        if($peli){
            $this->view->response($peli);
        }
        else{
            $this->view->response("Pelicula id = $id not found", 404);
        }
        
    }


    function removePeli($params = null){
        $user = $this->authHelper->currentUser();
        if(!$user){
            $this->view->response('Unauthorized', 401);
            return;
        }
        $id = $params[':ID'];
        $peli = $this->model->getPelicula($id);
        if($peli){
            $this->model->eliminar($id);
            $this->view->response("Film id = $id Remove Successfully");
        }
        else{
            $this->view->response("Film id = $id not found", 404);
        }
    }


    function addPeli($params = null){
        $user = $this->authHelper->currentUser();
        if(!$user){
            $this->view->response('Unauthorized', 401);
            return;
        }
        $data = $this->getData();
        //$name, $description, $date, $img = null, $categorie, $id_categorie
        $id_categorie;
        switch($data->categorie){
            case "Accion":
                $id_categorie = 1;
                break;
            case "Drama":
                $id_categorie = 2;
                break;
            case "Aventura":
                $id_categorie = 3;
                break;
        }

        $id = $this->model->insertPeli($data->name, $data->description, $data->date, $data->img, $data->categorie, $id_categorie);

        $peli = $this->model->getPelicula($id);

        if($peli){
            $this->view->response($peli, 201);
        }
        else{
            $this->view->response("La pelicula no fue creada", 500);
        }
    }

    function getPelisCantidad($params = null){
        $user = $this->authHelper->currentUser();
        if(!$user){
            $this->view->response('Unauthorized', 401);
            return;
        }
        $start = $params[':START'];
        $end = $params[':END'];
        $pelis = $this->model->getPelisCantidad($start, $end);
        if($pelis){
            $this->view->response($pelis);
        }
        else{
            $this->view->response("not found", 404);
        }
    }

    function uptadePeli($params = null){
        $user = $this->authHelper->currentUser();
        if(!$user){
            $this->view->response('Unauthorized', 401);
            return;
        }
        $id = $params[':ID'];
        $peli = $this->model->getPelicula($id);

        if ($peli) {
            $body = $this->getData();
            $categorie = $body->categorie;
            $name = $body->name;
            $description = $body->description;
            $release_date = $body->date;
            $id_categorie = $body->id_categorie;
            $this->model->modificarPelicula($name, $description, $release_date, $categorie, $id_categorie, $id);
            $this->view->response("pelicula id=$id actualizada con éxito", 200);
        }
        else 
            $this->view->response("pelicula id=$task_id not found", 404);


    }


}