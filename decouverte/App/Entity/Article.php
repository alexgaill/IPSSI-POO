<?php

namespace App\Entity;

use Exception;
use Vendor\Entity\Entity;

/**
 * @table article
 */
class Article extends Entity {

    private $id;
    private $title;
    private $content;
    private $categorie_id;
    private $user_id;
    private $picture;
    private $upperTitle;
    // private $test;
   

    public function __construct()
    {
        $this->upperTitle = strtoupper($this->getTitle());
    }

    public function __isset($nomAttribut)
    {
        echo "Vous n'avez pas accès à <strong>$nomAttribut</strong>";
    }
    public function __get($nomAttribut)
    {
        echo "La propriété <strong>$nomAttribut</strong> n'existe pas";
    }

    public function __call($nom, $param)
    {
        echo $nom . " => nom de la méthode";
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of categorie_id
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    /**
     * Set the value of categorie_id
     */
    public function setCategorieId($categorie_id): self
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

    /**
     * Get the value of user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     */
    public function setUserId($user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     */
    public function setPicture($picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of upperTitle
     */
    public function getUpperTitle()
    {
        return $this->upperTitle;
    }

    /**
     * Set the value of upperTitle
     */
    public function setUpperTitle($upperTitle): self
    {
        $this->upperTitle = $upperTitle;

        return $this;
    }
}