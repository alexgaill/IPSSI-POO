<?php

class Rappel {
    /**
     * propriété de la class rappel
     * Une propriété public est accessible partout
     *
     * @var string
     */
    public $propriete;

    /**
     * Une propriété private est accessible uniquement dans la class où elle est déclarée
     *
     * @var [type]
     */
    private $propPrivate;

    /**
     * Une propriété protected est accessible dans la class où elle est déclarée et dans ses class enfants
     */
    protected $propProtected;

    /**
     * les propriétés static et les constantes appartiennent à la class et non à l'objet
     *
     * @var [type]
     */
    public static $proprieteStatic;

    const CONSTANTE = 2;

    public function __construct($prop)
    {
        $this->propProtected = $prop;
    }

    /**
     * method de la class rappel
     *
     * @param string $param
     * @return string
     */
    public function methode (string $param)
    {
        return $param;
    }

    public static function metodeStatic ()
    {

    }
}

/**
 * On instancie la class pour créer un objet Rappel dans la variable $rappel
 */
$rappel = new Rappel("test");
/**
 * Appel de propriété uniquement si la propriété est publique
 */
$rappel->propriete;
$rappel->methode("test");

/**
 * On peut appeler directement les propriétés et méthodes static et les constantes
 */
Rappel::$proprieteStatic;
Rappel::CONSTANTE;
Rappel::class;
Rappel::metodeStatic();
// $this->getDoctrine()->getRepositiory(User::class);

/**
 * On est dans l'héritage, Rappel2 hérite de toutes les informations de Rappel qui ne sont pas private
 */
class Rappel2 extends Rappel {

    public static $propStatic;

    /**
     * Le constructeur est une méthode qui s'appelle à la création de l'objet (instanciation)
     */
    public function __construct($prop)
    {
        self::$propStatic; // Fait référence à la propriété static de Rappel2 (d'elle-même)
        parent::CONSTANTE; // Fait référence à la constante du parent
        parent::__construct($prop);
    }
}
$rappel2 = new Rappel2("test");
var_dump($rappel2);