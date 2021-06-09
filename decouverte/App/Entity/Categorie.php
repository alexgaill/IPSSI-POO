<?php
namespace App\Entity;

class Categorie {

    /**
     * id de la catégorie
     *
     * @var int
     */
    private $id;

    /**
     * name de la catégorie
     *
     * @var string
     */
    private $name;

    

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
}