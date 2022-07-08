<?php

require './models/LivreManager.php';
require './controllers/GlobalController.php';

class LivreController
{
    private $livreManager;

    public function __construct()
    {
        $this->livreManager = new LivreManager();
    }

    public function afficherLivres()
    {
        $this->livreManager->chargementLivres();
    }

    public function afficherLivresById($id)
    {
        $result = $this->livreManager->getLivreById($id);
        return $result;
    }

    public static function ajoutLivre()
    {
        return URL . "livres/create";
    }

    public function ajoutLivreValidation()
    {
        $file = $_FILES["image"];
        $dir = "public/images/";
        $a = GlobalController::ajoutImage($file,$dir);
        return $a;
    }

    public function supprimerLivre($id)
    {
        $result = $this->livreManager->getLivreById($id);
        $imgDel = $result[0]["image"];
        if(file_exists($imgDel)){
            unlink($imgDel);
        }
    }

    public function modifierLivreValider($id)
    {
        $result = $this->livreManager->getLivreById($id);
        
        $dir = "public/images/";
        $file = $_FILES['newImage'];

        if($file['error'] === 0){
            if(file_exists($result[0]["image"])){
                unlink($result[0]["image"]);
            }
            $actualImg = GlobalController::ajoutImage($file,$dir);
            return $actualImg;
        }else{
            $actualImg = $result[0]["image"];
            return $actualImg;
        }
    }
}

?>