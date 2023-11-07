<?php 
session_start();
include_once "inc/header.php"; 
require_once "model/functions.php";
$id = $_GET["annonce"];
$detailAnnonce = annonceListSeule($id);
?>
<div class="container d-flex flex-wrap justify-content-around">
    <?php    
        ?>
        <div class="card border-success-subtle mb-5" style="width: 28rem;">         
            <div class="card-body">
                <p class="card-text fa-bitcoin-sign fa-bitcoin-sign link-warning"><?= $detailAnnonce["title"]; ?></p>
                <p class="card-text fa-2x"><?= $detailAnnonce["price"]; ?> €</p>
                <p class="card-text"><?= $detailAnnonce["city"]; ?> City</p>
                <form action="acceuil.php" method="POST">
                    <textarea name="" id="" cols="30" rows="10" ></textarea>
                    <button type="submit"  class="btn btn-primary mt-5 mb-5 bg-secondary border-success-subtle border-2" name="book" value="submit">Je réserve</button>
                </form>
            </div>
        </div>
</div>
<?php include_once "inc/footer.php"; ?>