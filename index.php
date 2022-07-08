<?php

require './controllers/LivreController.php';

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));
$a = new LivreController();

try {
    if (!isset($_GET['page'])) {
        require "views/index.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case 'accueil':
                require "views/index.php";
                break;
            case 'livres':
                if(!isset($url[1])){
                    $a->afficherLivres();
                    $array = LivreManager::getArray();
                    require "views/livres.php";
                }
                if (isset($url[1])) {
                    switch ($url[1]) {
                        case 'read':
                            $book = $a->afficherLivresById(intval($url[2]));
                            require "views/crud/read.php";
                            break;
                        case 'modify':
                            $book = $a->afficherLivresById(intval($url[2]));
                            require "views/crud/modify.php";
                            break;
                        case 'create':
                            require "views/crud/create.php";
                            break;
                        case 'delete':
                            $a->supprimerLivre(intval($url[2]));
                            $manager = new LivreManager();
                            $manager->supprimerLivreBD($url[2]);
                            break;
                        case 'valider':
                            $img = $a->ajoutLivreValidation();
                            $manager = new LivreManager();
                            $manager->ajoutLivreBD($_POST['titre'],$_POST['pages'], $img);
                            break;
                        case 'modifValider':
                            $newImg = $a->modifierLivreValider(intval($url[2]));
                            $manager = new LivreManager();
                            $manager->modifierLivreBD($_POST['newTitre'],$_POST['newPages'],$newImg,$url[2]);
                            break;
                        default:
                            http_response_code(404);
                            require "views/404.php";
                            break;
                    }
                }
                break;
            default:
                http_response_code(404);
                require "views/404.php";
                break;
        }
    }
} catch (Exception $e) {
    http_response_code(404);
    require "views/404.php";
}
