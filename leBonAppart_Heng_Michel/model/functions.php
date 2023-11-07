<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/leBonAppart_Heng_Michel/inc/database.php";

function  annonceList(){
    //  se connecter a la db (database) ou bd (base de données)
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM advert");
    // executer la requete
    $listAnnonce = null;
    try {
        $request->execute();
        // récuperer le resultat dans un tableau
        $listAnnonce = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch ( PDOException $e) {
        echo $e->getMessage();
    }
    return $listAnnonce;
}

function  annonceList2(){
    //  se connecter a la db (database) ou bd (base de données)
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM advert ORDER BY id DESC LIMIT 15");
    // executer la requete
    $listAnnonce = null;
    try {
        $request->execute();
        // récuperer le resultat dans un tableau
        $listAnnonce = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch ( PDOException $e) {
        echo $e->getMessage();
    }
    return $listAnnonce;
}
function  annonceListSeule($id){
    //  se connecter a la db (database) ou bd (base de données)
    $db = dbConnexion();
    
    // preparer la requete
    $request = $db->prepare("SELECT * FROM advert WHERE id=? ");
    // executer la requete
    $detailAnnonce = null;
    try {
        $request->execute(array($id));
        // récuperer le resultat dans un tableau
        $detailAnnonce = $request->fetch(PDO::FETCH_ASSOC);
    } catch ( PDOException $e) {
        echo $e->getMessage();
    }
    return $detailAnnonce;
}


function  reservation_messageList($reservation_message){
    //  se connecter a la db (database) ou bd (base de données)
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM advert WHERE reservation_message = ? ");
    // executer la requete
    $reservation_messageList = null;
    try {
        $request->execute(array($reservation_message));
        // récuperer le resultat dans un tableau
        $reservation_messageList = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch ( PDOException $e) {
        echo $e->getMessage();
    }
    return $reservation_messageList;
}