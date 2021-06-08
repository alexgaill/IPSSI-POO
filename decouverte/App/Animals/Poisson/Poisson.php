<?php
namespace App\Animals\Poisson;

class Poisson
{
    /**
     * Créer une class poissonRouge (couleur, typePeau, nom, age, dents (boolean))
     * Créer une class requin (couleur, typePeau, nom, age, dents (boolean))
     * Rassembler les informations en commun sur une class parente (poisson)
     * Faire les méthodes correspondantes
     */

    /**
     * Couleur du poisson
     *
     * @var string
     */
    private $couleur;

    /**
     * type de peau du poisson
     *
     * @var string
     */
    protected $typePeau;

    /**
     * nom du poisson
     *
     * @var string]
     */
    private $nom;

    /**
     * age du poisson en années
     *
     * @var int
     */
    private $age;

    /**
     * Le poisson possède-t-il des dents?
     *
     * @var boolean
     */
    protected $dents;

    /**
     * Categorie du poisson
     */
    const CATEGORIE = "Poisson";

    public function __construct(string $nom, string $age, string $couleur)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->couleur = $couleur;
    }

    /**
     * Get the value of couleur
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     * @param string $couleur
     */
    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of typePeau
     * @return string
     */
    public function getTypePeau()
    {
        return $this->typePeau;
    }

    /**
     * Set the value of typePeau
     * @param string $typePeau
     */
    public function setTypePeau($typePeau): self
    {
        $this->typePeau = $typePeau;

        return $this;
    }

    /**
     * Get the value of nom
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     * @param string $peau
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

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
     * Get the value of dents
     * @return boolean
     */
    public function getDents()
    {
        return $this->dents;
    }

    /**
     * Set the value of dents
     * @param boolean $dents
     */
    public function setDents($dents): self
    {
        $this->dents = $dents;

        return $this;
    }
}
