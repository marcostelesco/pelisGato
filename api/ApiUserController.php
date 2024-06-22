<?php
require_once 'api/apiPelisView.php';
require_once 'model/userModel.php';
require_once 'helpers/auth.api.helper.php';

class ApiUserController{
    private $model;
    private $view;
    private $AuthHelper;

    function __construct(){
        $this->model = new userModel();
        $this->view = new ApiPelisView();
        $this->AuthHelper = new AuthHelper();
    }

    function getToken($params = []){
        $basic =  $this->AuthHelper->getAuthHeader();

        if(empty($basic)){
            $this->view->response('No envio encabezados de autentificacion.' , 401);
            return;
        }
        
        $basic = explode(" ", $basic);

        if($basic[0]!="Basic"){
            $this->view->response('Los encabezados de autentificacion son incorrectos.' , 401);
            return;
        }

        $userpass = base64_decode($basic[1]);
        $userpass = explode(":", $userpass);

        $user = $userpass[0]; 
        $pass = $userpass[1];

        $getUser = $this->model->getUser($user);

        if($getUser && password_verify($pass, $getUser->password)){
            $token = $this->AuthHelper->createToken($getUser);
            $this->view->response($token);
        } else{
            $this->view->response('El usuario o contraseña son incorrectos.', 401);
        }
        
    }
}