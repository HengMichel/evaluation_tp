<?php
function dbConnexion(){
    $connexion = null;
    try {
        // $connexion = new PDO("mysql:host=localhost;dbname=id21228702_db_hotel","id21228702_admin","P@sser123");
        // $connexion = new PDO("mysql:host=localhost;dbname=id21247640_lebonappart","id21247640_michel","LeBonAppart@123");
        $connexion = new PDO("mysql:host=localhost;dbname=wf3_php_intermediaire_michel","root","");
    } catch (PDOException $e) {
        $connexion = $e->getMessage();
    }
    return $connexion;
}
?>