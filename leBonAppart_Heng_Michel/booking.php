<?php 
session_start();
include_once "inc/header.php"; 
require_once "model/functions.php";
$listAnnonce = annonceList();
?>
<div class="container d-flex flex-wrap justify-content-around">
    <?php 
    foreach($listAnnonce as $annonce){ 
        ?>
        <div class="card border-success-subtle mb-5" style="width: 28rem;">
          
            <div class="card-body">
                <p class="card-text link-warning"><?= $annonce["title"]; ?></p>
                <p class="card-text fa-2x"><?= $annonce["price"]; ?> €</p>
                <p class="card-text"><?= $annonce["city"]; ?> City</p>
                <form action="model/db_booking" method="post">
                    <textarea name="avis border-success-subtle border-3 mt-3" cols="30" rows="10" placeholder="Votre avis"><?= $annonce["reservation_message"]; ?></textarea>   
                    <button type="submit"  class="btn btn-primary mt-5 mb-5 bg-secondary border-success-subtle border-2" name="book" value="submit">Je réserve</button>
                </form>
            </div>
        </div>    
    <?php
 } 
 ?>
</div>
<?php include_once "inc/footer.php"; ?>