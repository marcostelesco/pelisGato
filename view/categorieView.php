<?php
require_once('libs/smarty-4.3.4/libs/Smarty.class.php');

class categorieView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function getPelisSegunCategoira($pelis, $categoria){
        include ("templates/header.php");
        $user = $this->checkLoggedInView();
        $this->smarty->assign('user', $user);
        $this->smarty->assign('pelis', $pelis);
        $this->smarty->assign('titulo', $categoria);
        $this->smarty->display('templates/render.array.pelis.tpl');
        include ("templates/footer.html");
    }

    function ShowCategorias($categorias){
        $user = $this->checkLoggedInView();
        $this->smarty->assign('user', $user);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->assign('titulo', 'Categorias');
        $this->smarty->display('templates/render.array.categorias.tpl');
    }
    
    function RedirectCategorias(){
        header("Location: ".BASE_URL."categorias");
    }

    function agregarCategoriaView(){
        include ("templates/header.php");
        $this->smarty->display('templates/agregarCategoria.tpl');
        include ("templates/footer.html");
    }

    function checkLoggedInView(){
        session_start();
        if(!isset($_SESSION["user"])){
            $user = 0;
        }
        else{
            $user = 1;
        }
        return $user;
    }
}