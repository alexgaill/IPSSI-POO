<?php
namespace App\Animals\Mammifere;

use App\Animals\TraitAnimal;

class Mammifere {
    use TraitAnimal;

    private $nom;
    private $couleurPelage;
    private $age;
    private $race;
    protected $cri;

    /**
     * Les constantes possèdent toujours un nom en majuscule
     */
    const CATEGORIE = "mammifère";

    public function __construct(string $nom, string $couleurPelage, int $age, string $race)
    {
        $this->nom = $nom;
        $this->couleurPelage = $couleurPelage;
        $this->age = $age;
        $this->race = $race;
    }

    /**
     * Retourne la catégorie de l'animal
     *
     * @return string
     */
    public function getCategorie ()
    {
        /**
         * Pour faire appel à une constantede la class, on faire référence à la class directement avec self
         */
        return self::CATEGORIE;
    }

    /**
     * Get the value of nom
     * 
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     * @param string $nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of couleurPelage
     * @return string
     */
    public function getCouleurPelage()
    {
        return $this->couleurPelage;
    }

    /**
     * Set the value of couleurPelage
     * @param string $couleurPelage
     */
    public function setCouleurPelage(string $couleurPelage): self
    {
        $this->couleurPelage = $couleurPelage;

        return $this;
    }

    /**
     * Get the value of age
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     * @param int $age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of race
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set the value of race
     * @param string $race
     */
    public function setRace($race): self
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get the value of cri
     * @return string
     */
    public function getCri()
    {
        return $this->cri;
    }

    /**
     * Set the value of race
     * @param string $cri
     */
    public function setCri($cri): self
    {
        $this->cri = $cri;
        return $this;
    }

    public function cours ()
    {
        echo "Le chien se met à courir";
    }
}