<?php

use App\Animals\Mammifere\Chat;
use App\Animals\Mammifere\GrandChien;
use App\Animals\Poisson\PoissonRouge;
use App\Manager\ArticleManager;
use App\Traits\Test;

define("ROOT", dirname(__DIR__));

require ROOT."/Vendor/Autoload.php";

Vendor\Autoload::register();


// $chat1 = new Chat("Minou", "gris", 3, "siamois");
// $chat2 = $chat1;

// $chat2->setAge(5);
// var_dump($chat1);
// echo "<br>";
// var_dump($chat2);

// if ($chat1 === $chat2) {
//     echo "identique";
//  } else {
//      echo "différent";
//  }


// $chat1 = new Chat("Minou", "gris", 3, "siamois");
// $chat2 = clone $chat1;

// // $chat2->setAge(5);
// var_dump($chat1);
// echo "<br>";
// var_dump($chat2);
// echo "Instances: ". Chat::getInstances();
// echo "<br>";
// echo "<br>";

// if ($chat1 === $chat2) {
//    echo "identique";
// } else {
//     echo "différent";
// }

// $chat1 = new Chat("Minou", "gris", 3, "siamois");
// $chat2 = new Chat("Minou", "gris", 3, "siamois");

// if ($chat1 === $chat2) {
//     echo "identique";
//  } else {
//      echo "différent";
//  }

// $manager = new ArticleManager();
// echo "<ul>";
// foreach ($manager->getList() as $value) {
//     echo "<li>".$value->getUpperTitle()."</li>";
// }
// echo "</ul>";

// $chien = new GrandChien("Rex", "marron", 2, "chihuahua");
// $chien->cours();

$test = new Test();
$test->hello();
echo "<br>";
$chat = new Chat("minou", "gris", 3, "siamois");
$chat->seDeplacer();
echo "<br>";

$poisson = new PoissonRouge("John", 1, "rouge");
$poisson->seDeplacer();
echo "<br>";