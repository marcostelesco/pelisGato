<?php


class userModel{

    private $db;
    
    function __construct(){
        $this->db = new PDO('mysql:host=' . DB_HOST . ';'.'dbname='. DB_NAME .';charset='. DB_Charset, DB_USER, DB_PASS);
    }

    function getUser($user){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE user = ?');
        $query->execute([$user]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}