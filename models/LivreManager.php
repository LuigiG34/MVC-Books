<?php

require 'Livre.php';
require 'Model.php';

class LivreManager extends Model
{
    private static $array = [];

    public static function pushLivre($livre)
    {
        array_push(self::$array, $livre);
    }

    /**
     * Get the value of array
     */ 
    public static function getArray()
    {
        return self::$array;
    }

    public function chargementLivres()
    {
        $stmt = self::getBdd()->query('SELECT * FROM livre');
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $key) {
            $this->ajoutLivre($key);
        }
    }

    public function getLivreById($id)
    {
        $stmt = self::getBdd()->query('SELECT * FROM livre WHERE id ='.$id);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function ajoutLivre($value)
    {
        $a = new Livres();
        $a->setId($value['id'])
        ->setImg($value['image'])
        ->setTitre($value['titre'])
        ->setNombrePages($value['nbPages']);
    }

    public function ajoutLivreBD($titre,$nbPages,$image)
    {
        $stmt = self::getBdd()->prepare('INSERT INTO livre (titre, nbPages, image) VALUES (?, ?, ?)');

        $stmt->execute(array($titre,$nbPages,$image));

        header('Location: ../livres');
    }

    public function supprimerLivreBD($id)
    {
        $stmt = self::getBdd()->prepare("DELETE FROM livre WHERE id =".$id);
        $stmt->execute();

        header('Location: '.URL.'/livres');
    }
}
