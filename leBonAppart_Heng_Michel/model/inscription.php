<?php 
require_once "../inc/database.php";
if(isset($_POST["submit"])){
    // recuperer les infos saisies par l utilisateur
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    $postal_code = htmlspecialchars($_POST["postal_code"]);
    $city = htmlspecialchars($_POST["city"]);
    $type = htmlspecialchars($_POST["type"]);
    $price = htmlspecialchars($_POST["price"]);
    
  
    // etablir la connexion avec la bd
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("INSERT INTO  advert (title, description ,postal_code ,city ,type ,price) VALUES (?,?,?,?,?,?)");
    // executer la requete
    try {
        $request->execute(array($title,$description,$postal_code,$city,$type,$price));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}
?>