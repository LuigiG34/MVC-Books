<?php
ob_start();
?>

<table class="w-100">
    <tr class="d-flex align-items-center justify-content-around">
        <td>
            <img src="<?= URL ?><?= $book[0]['image'] ?>" width="250px">
        </td>
        <td>
            <p>Titre : <?= $book[0]["titre"] ?></p>
            <p>Nombres de pages : <?= $book[0]["nbPages"] ?></p>
        </td>
    </tr>
</table>

<?php
$titre = $book[0]["titre"];
$content = ob_get_clean();
require_once "views/template.php";
?>