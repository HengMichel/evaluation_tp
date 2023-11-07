<?php 
session_start();
include_once "inc/header.php";
require_once "model/functions.php";
 ?>
<div class="container">
    <form action="model/inscription.php" method="post">
       
        <div class="form-group link-light">
            <label for="title"> Titre de l’annonce :</label>
            <input type="text" class="form-control border-success-subtle border-3 mt-3 text-uppercase" id="title" name=" title" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label for="description link-light">Description de l’annonce :</label>
            <input type="text" class="form-control border-success-subtle border-3 mt-3" id="description" name="description" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label for="city link-light"> ville du bien immobilier :</label>
            <input type="text" class="form-control border-success-subtle border-3 mt-3" id="city" name="city" >
        </div>
        <div class="form-group link-light mt-3">
            <label for="postal_code link-light">Code postal :</label>
            <input type="number" class="form-control border-success-subtle border-3 mt-3" id="postal_code" name="postal_code" >
        </div>
        <div class="form-group mt-5 mb-5 d-flex">
            <label class="me-xl-5 link-light">Type d’annonce  :</label>
            <div class="form-check">
                <input class="form-check-input border-success-subtle border-3 mt-3 translate-middle-y " type="radio" name="type"  value="location">
                <label class="form-check-label link-light lh-lg">location </label>
            </div>
            <div class="form-check">
                <input class="form-check-input border-success-subtle border-3 mt-3 translate-middle-y  m-0 float-md-none" type="radio" name="type"  value="vente">
                <label class="form-check-label link-light lh-lg">vente</label>
            </div>
        </div>       
        <div class="form-group link-light mt-3">
            <label>Prix :</label>
            <input type="text" class="form-control border-success-subtle border-3 mt-3" name="price" >
        </div>

        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 border-success-subtle border-3 mt-2 bg-secondary" name="submit" value="submit">Submit</button>
    </form>
</div>
<?php include_once "inc/footer.php"; ?>

