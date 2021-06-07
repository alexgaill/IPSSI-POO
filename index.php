<?php

require "Vendor/Autoload.php";

/**
 * Use permet d'indiquer dans quels espaces de nom se trouvent les class à charger
 * Si on a 2 class Chien dans le projet, on peut ainsi charger la bonne class.
 */
use App\Animals\Mammifere\Chat;
use App\Animals\Mammifere\Chien;
use App\Animals\Mammifere\PoissonRouge;
use App\Animals\Mammifere\Requin;

/**
 * On charge la méthode statique register qui permet de charger toutes les class automatiquement
 */
Vendor\Autoload::register();

$classe = new App\MaClasse();

// $classe->chaine = "coucou";
$classe->setChaine("Coucou");
echo $classe->getChaine();
// var_dump($classe);

echo "<br>";
$chat1 = new Chat("Minou", "gris", 3, "Siamois");
// $chat1->setNom("Minou");
// $chat1->setCouleurPelage("gris");
// $chat1->setAge(3);
// $chat1->setRace("Siamois");
var_dump($chat1);
echo "<br>";
$chat2 = new Chat("Akira", "noir & blanc", 4, "Européen");
var_dump($chat2);
echo "<br>";
$chien1 = new Chien("Pepper", "marron", 5, "Chihuahua");
var_dump($chien1);
echo "<br>";
$chien2 = new Chien("Louna", "fauve charbonnée", 9, "Berger de Shetland");
var_dump($chien2);
echo "<br>";

$createCard = new AnimalContent();
$animals = [$createCard->createCard($chat1), $createCard->createCard($chat2), $createCard->createCard($chien1), $createCard->createCard($chien2)];

/**
 * Appeler une constante d'une class se fait en appelant directement la class sans l'instancier et en utilisant 
 * l'opérateur de portée ::
 */
echo $chat2->cri;
echo "<br>";

include "templates/indexView.php";

/**
 * Créer une class poissonRouge (couleur, typePeau, nom, age, dents (boolean))
 * Créer une class requin (couleur, typePeau, nom, age, dents (boolean))
 * Rassembler les informations en commun sur une class parente (poisson)
 * Faire les méthodes correspondantes
 */