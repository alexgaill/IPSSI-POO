<?php

use App\Bdd\Database;
use Vendor\Autoload;

require "Vendor/Autoload.php";
Autoload::register();

define("ROOT", __DIR__);


use App\Entity\Article;

// $article = new Article();
// var_dump($article);

$db = new Database();
// var_dump($db->getArticles());
echo "<ul>";
foreach ($db->getArticles() as $value) {
    echo "<li>".$value->getUpperTitle()."</li>";
}

echo "</ul>";