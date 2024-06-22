<?php

require_once 'model/userModel.php';
require_once 'view/userView.php';
require_once 'view/pelisView.php';


class userController{

    private $model;
    private $view;
    private $viewP;

    function __construct(){
        $this->model = new userModel();
        $this->view = new userViews();
        $this->viewP = new PelisView();
    }

    function logIn(){
        session_start();
        if(isset($_SESSION["user"])){
            $this->view->showUser($_SESSION["user"]);       
        }else{
            $this->view->showLogin();
        }    
    }

    function verifyUser(){
        if(!empty($_POST['user']) && !empty($_POST['password'])){
            $user = $_POST['user'];
            $password = $_POST['password'];
        
            $getUser = $this->model->getUser($user);

            if($getUser && password_verify($password, $getUser->password)){
                session_start();
                $_SESSION["user"] = $user;

                $this->viewP->RedirectHome();
            }else{
                $this->view->showLogin("Acceso denegado");
            }
        }else{
            $this->view->showLogin("Acceso denegado");
        }    
    }

    function logOut(){
        session_start();
        session_destroy();
        $this->view->showLogin("Hasta la proxima");
    }

}