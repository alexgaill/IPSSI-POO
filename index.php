<?php

require "App/MaClasse.php";
require "App/Animals/Chat.php";
require "App/Animals/Chien.php";
require "App/Content/AnimalContent.php";

$classe = new MaClasse();

// $classe->chaine = "coucou";
$classe->setChaine("Coucou");
echo $classe->getChaine();
// var_dump($classe);


/**
 * 1/ créer une class chat qui aura les propriétés: nom, couleurPelage, âge, race, cri
 * 2/ créer une class chien qui aura les propriétés: nom, couleurPelage, âge, race, cri
 * 3/ Chacune de ces class aura les getters et setters correspondant aux propriétés citées.
 * 4/ Sur l'index, vous affichez les informations (var_dump) de 2 chats et 2 chiens.
 */
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
echo "<br>";
echo "<br>";
echo Chat::getCri();
Chat::setCri("ouaf");
echo "<br>";
echo $chat1->getCri();
echo "<br>";
echo $chat2->getCri();
echo "<br>";
$chat3 = new Chat("Minou", "gris", 3, "Siamois");
echo    $chat3->getCri();
echo "<br>";
echo "<br>";
echo "<br>";

include "templates/indexView.php";