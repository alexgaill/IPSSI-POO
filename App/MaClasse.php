<?php
namespace App;
/**
 * Une classe correspond à un objet en PHP
 */
class MaClasse {

    /**
     * La visibilité détermine si une propriété ou une méthode peut être accessible n'importe où dans le projet ou non
     * public: l'information est accessible partout
     * private: l'information est accessible uniquement dans la class où elle est créée
     *
     * @var string
     */
    private $chaine = "Hello World!";

    /**
     * Méthode getChaine est une méthode qui permet de récupérer l'information pour la lire et l'utiliser
     * On appelle ça un accesseur ou getter
     *
     * @return void
     */
    public function getChaine () {
        return $this->chaine;
    }

    /**
     * Méthode setChaine est une méthode qui permet de donner ou modifier une valeur à une propriété.
     * On appelle cette méthode un mutateur ou setter
     *
     * @param string $chaine
     */
    public function setChaine ($chaine) {
        $this->chaine = $chaine;
    }
}