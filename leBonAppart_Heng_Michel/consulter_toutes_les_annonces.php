<?php 
include_once "./inc/header.php";
require_once "model/functions.php" ;
$listAnnonce = annonceList();
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th class="id_Annonce bg-secondary link-light" >Id Annonce</th>
                <th class="Annonce_title bg-secondary link-light">Annonce title</th>
                <th class="description bg-secondary link-light">Description</th>
                <th class="postal_code bg-secondary link-light">Postal code</th>
                <th class="city bg-secondary link-light">City</th>
                <th class="Annonce_state bg-secondary link-light">Type</th>
                <th class="price bg-secondary link-light">Price</th>
                <th class="etat bg-secondary link-light">Etat</th>               
            </tr>
        </thead>
        <tbody>
            <?php foreach($listAnnonce as $annonce){ ?>
                <tr>
                    <td class="idAnnonce border-success-subtle border-3 mt-2"><?= $annonce["id"]; ?></td>
                    <td class="Annoncetitle border-success-subtle border-3 mt-2 text-uppercase"><?= $annonce["title"]; ?></td>
                    <td class="descriptions border-success-subtle border-3 mt-2"><?= $annonce["description"]; ?></td>
                    <td class="postal_code border-success-subtle border-3 mt-2  link-warning"><?= $annonce["postal_code"]; ?></td>
                    <td class="city border-success-subtle border-3 mt-2  link-warning"><?= $annonce["city"]; ?></td>
                    <td class="type border-success-subtle border-3 mt-2"><?= $annonce["type"]; ?></td>
                    <td class="pricee border-success-subtle border-3 mt-2"><?= $annonce["price"]; ?></td>
                    <td><a class="btn btn-info bg-secondary border-success-subtle border-2 link-light" href="./consulter_une_annonce.php?annonce=<?= $annonce["id"]; ?>">Consulter une annonce</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>    

<?php include_once "inc/footer.php"; ?>
