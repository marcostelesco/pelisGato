<?php
require_once 'config.php';

class PelisModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';'.'dbname='. DB_NAME .';charset='. DB_Charset, DB_USER, DB_PASS);
        //
    }

    function eliminar($id){
        $query = $this->db->prepare("DELETE FROM peliculas WHERE id = :id");
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
    }
    

    function getPelis() {
        $query = $this->db->prepare( 'SELECT * FROM peliculas');
        $query->execute();
        $pelis = $query->fetchAll(PDO::FETCH_OBJ);
        return $pelis;
    }

    function getPelicula($id){
        $query = $this->db->prepare( 'SELECT * FROM peliculas WHERE id=?');
        $query->execute(array($id));
        $peli = $query->fetch(PDO::FETCH_OBJ);
        return $peli;
    }

    function insertPeli($name, $description, $date, $img = null, $categorie, $id_categorie){
        if(!empty($img)){
            $pathImg = $this->uploadImg($img);
        }

        

        $sentencia = $this->db->prepare('INSERT INTO peliculas(categorie, name, description, release_date, url_img, id_categorie) VALUES( ?, ?, ?, ?, ?, ?)');
        $sentencia->execute(array($categorie, $name, $description, $date, $pathImg, $id_categorie));
        
        return $this->db->lastInsertId();
    }

    private function uploadImg($image){
        $target = 'image/temp/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }

    function modificarPelicula($name, $description, $release_date, $categorie, $id_categorie, $id) {
        $sentencia = $this->db->prepare("UPDATE peliculas SET categorie = ?, name = ?, description = ?, release_date = ?, id_categorie = ? WHERE id=?");
        $sentencia->execute(array($categorie, $name,$description , $release_date, $id_categorie, $id));
    }

    function eliminarTodasSegunCategoria($categoria) {
        $query = $this->db->prepare("DELETE FROM `peliculas` WHERE `categorie` = :categoria");
        $query->bindParam(":categoria", $categoria, PDO::PARAM_STR);
        $query->execute();
    }

    function QueCategoriaEsSegunPelicula($id) {
        $query = $this->db->prepare('SELECT id_categorie FROM peliculas WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    
        if ($query->rowCount() > 0) {
            $resultado = $query->fetch(PDO::FETCH_COLUMN);
            return $resultado;
        } else {
            return "Película no encontrada";
        }
    }
    
    function modificarTituloCategoria($categoria, $tituloNuevo){
        //cambia todos las categorias de  la tabla de peliculas, remplaza $categoria por $ titulonuevo
        $query = $this->db->prepare("UPDATE peliculas SET categorie = :tituloNuevo WHERE categorie = :categoria");
   
        $query->bindParam(':categoria', $categoria, PDO::PARAM_STR);
        $query->bindParam(':tituloNuevo', $tituloNuevo, PDO::PARAM_STR);
        $query->execute();
    }
    
    function getPelisCantidad($start, $end){
        $query = $this->db->prepare("SELECT * FROM peliculas LIMIT $start,$end;");
        $query->execute();
        $pelis = $query->fetchAll(PDO::FETCH_OBJ);
        return $pelis;
    }


}