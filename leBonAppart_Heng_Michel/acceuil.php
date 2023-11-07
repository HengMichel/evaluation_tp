<?php 
session_start();
include_once "inc/header.php"; 
require_once "model/functions.php";
$listAnnonce = annonceList2();
?>
<div class="container d-flex flex-wrap justify-content-around">
    <?php 
    foreach($listAnnonce as $annonce){ 
        ?>
        <div class="card border-success-subtle mb-5" style="width: 28rem;">    
            <div class="card-body">
                <p class="card-text link-warning"><?= $annonce["title"]; ?></p>
                <p class="card-text fa-2x"><?= $annonce["price"]; ?> €</p>
                <p class="card-text"><?= $annonce["city"]; ?> </p>
                <!-- <button type="submit"  class="btn btn-primary mt-5 mb-5 bg-secondary border-success-subtle border-2" name="book" value="submit" href="consulter_une_annonce.">Je réserve</button> -->
                <a class="btn btn-info bg-secondary border-success-subtle border-2 link-light" href="./consulter_une_annonce.php?annonce=<?= $annonce["id"]; ?>">Consulter une annonce</a>
            </div>
        </div>
    <?php
 } 
 ?>
</div>
<?php include_once "inc/footer.php"; ?>