<?php
ob_start();
?>

<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php foreach ($array as $livre) : ?>
        <tr>
            <td class="align-middle"><img src="<?= URL ?><?= $livre->getImg() ?>" alt="" width="60px;" height="90px"></td>
            <td class="align-middle"><a href="<?= URL ?>livres/read/<?= $livre->getId() ?>"><?= $livre->getTitre() ?></a></td>
            <td class="align-middle"><?= $livre->getNombrePages() ?></td>
            <td class="align-middle"><a href="<?= URL ?>livres/modify/<?= $livre->getId() ?>" class="btn btn-warning">Modifier</a></td>
            <td class="align-middle">
                <form action="<?= URL ?>livres/delete/<?= $livre->getId() ?>" method="post">
                    <input class="btn btn-danger" type="submit" value="Supprimer" name="delete" id="delete">
                </form>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<a href="<?= LivreController::ajoutLivre() ?>" class="btn btn-success d-block">Ajouter</a>

<?php
$titre = "Livres";
$content = ob_get_clean();
require_once "template.php";
?>