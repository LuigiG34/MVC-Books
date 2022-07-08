<?php
ob_start();
?>

<section class="w-100 d-flex flex-column align-items-center justify-content-center">
    <form action="<?= URL ?>livres/valider" method="post" enctype="multipart/form-data" class="w-75 p-2 m-2 d-flex flex-column">
    <label for="titre">Titre
        <input class="w-100 p-2 m-2" type="text" name="titre" id="titre">
    </label>
    <label for="pages">Nombre de pages
        <input class="w-100 p-2 m-2" type="number" name="pages" id="pages">
    </label>
    <label for="image">Image
        <input class="w-100 p-2 m-2 form-control" type="file" name="image" id="image">
    </label>
    <input class="btn btn-dark p-2 m-2 w-25" type="submit" value="Valider" id="valider" name="valider">
</form>
</section>

<?php
$titre = "Ajout d'un livre";
$content = ob_get_clean();
require_once "views/template.php";
?>