<?php
ob_start();
?>

<section class="w-100 d-flex flex-column align-items-center justify-content-center">
    <form action="<?= URL ?>livres/modifValider/<?= $book[0]["id"]?>" method="post" enctype="multipart/form-data" class="w-75 p-2 m-2 d-flex flex-column">
    <label for="titre">Titre
        <input class="w-100 p-2 m-2" type="text" name="newTitre" id="newTitre" value="<?= $book[0]["titre"] ?>">
    </label>
    <label for="pages">Nombre de pages
        <input class="w-100 p-2 m-2" type="number" name="newPages" id="newPages" value="<?= $book[0]["nbPages"] ?>">
    </label>
    <label for="actualImg">Image :
        <img src="<?= URL ?><?= $book[0]["image"] ?>" alt="" width="80px" name="actualImg" id="actualImg">
    </label>
    <label for="image">Image
        <input class="w-100 p-2 m-2 form-control" type="file" name="newImage" id="newImage">
    </label>
    <input class="btn btn-dark p-2 m-2 w-25" type="submit" value="Valider" id="valider" name="valider">
</form>
</section>

<?php
$titre = "Modification du livre : " . $book[0]["titre"];
$content = ob_get_clean();
require_once "views/template.php";
?>