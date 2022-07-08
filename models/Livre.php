<?php

class Livres
{
    private $id;
    private $img;
    private $titre;
    private $nombrePages;

    public function __construct()
    {
        LivreManager::pushLivre($this);
    }

    /**
     * Get the value of nombrePages
     */
    public function getNombrePages()
    {
        return $this->nombrePages;
    }

    /**
     * Set the value of nombrePages
     *
     * @return  self
     */
    public function setNombrePages($nombrePages)
    {
        $this->nombrePages = $nombrePages;

        return $this;
    }

    /**
     * Get the value of titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
