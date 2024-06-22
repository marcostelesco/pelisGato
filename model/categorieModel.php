<?php

class categorieModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';'.'dbname='. DB_NAME .';charset='. DB_Charset, DB_USER, DB_PASS);
        //
    }

    
    function getPelisSegunCategoira($categoria) {
        $query = $this->db->prepare("SELECT * FROM peliculas WHERE categorie = '$categoria'");

        $query->execute();
        $pelis = $query->fetchAll(PDO::FETCH_OBJ);
        return $pelis;
    }
    
    function getCategorias(){

        $query = $this->db->prepare('SELECT DISTINCT categorie FROM categories');

        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }

    function eliminarCategoria($categoria) {
        $query = $this->db->prepare("DELETE FROM `categories` WHERE `categorie` = :categoria");
        $query->bindParam(":categoria", $categoria, PDO::PARAM_STR);
        $query->execute();
    }

    function modificarTituloCategoria($categoria, $tituloNuevo) {
        $query = $this->db->prepare("UPDATE `categories` SET `categorie` = :tituloNuevo WHERE `categorie` = :categoria");
        $query->bindParam(":categoria", $categoria, PDO::PARAM_STR);
        $query->bindParam(":tituloNuevo", $tituloNuevo, PDO::PARAM_STR);
        $query->execute();
    }


    function agregarCategoria($tituloNuevo) {
        $query = $this->db->prepare("INSERT INTO categories (categorie) VALUES (:tituloNuevo)");
        $query->bindParam(':tituloNuevo', $tituloNuevo, PDO::PARAM_STR);
        $query->execute();
    }

    function getIDCategoria($categoria) {
        $query = $this->db->prepare("SELECT * FROM categories WHERE categorie = ?");
        $query->execute([$categoria]);
        $salida = $query->fetch(PDO::FETCH_OBJ);
        return $salida->id_categorie;
    }
}