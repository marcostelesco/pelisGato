<?php

require_once('libs/smarty-4.3.4/libs/Smarty.class.php');

class userViews{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showLogin($error = ""){
        include ("templates/header.php");
       
        $this->smarty->assign('titulo', 'Log in');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
        include ("templates/footer.html");
    }

    function showUser($user){
        include ("templates/header.php");
        $this->smarty->assign('user', $user);
        $this->smarty->display('templates/user.tpl');
        include ("templates/footer.html");
    }
    function Redirectlogin(){
        header("Location: ".BASE_URL."login");
    }
}    