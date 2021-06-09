<?php

use App\Animals\Mammifere\Chat;
define("ROOT", dirname(__DIR__));

require ROOT."/Vendor/Autoload.php";

Vendor\Autoload::register();


// $chat1 = new Chat("Minou", "gris", 3, "siamois");
// $chat2 = $chat1;

// $chat2->setAge(5);
// var_dump($chat1);
// echo "<br>";
// var_dump($chat2);

$chat1 = new Chat("Minou", "gris", 3, "siamois");
$chat2 = clone $chat1;

$chat2->setAge(5);
var_dump($chat1);
echo "<br>";
var_dump($chat2);
echo "Instances: ". Chat::getInstances();
