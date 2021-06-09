<?php

use App\Bdd\Database;
use Vendor\Autoload;

require "Vendor/Autoload.php";
Autoload::register();

define("ROOT", __DIR__);


use App\Entity\Article;
use App\Manager\ArticleManager;

// $article = new Article();
// var_dump($article);

// $articleManager = new ArticleManager();
// var_dump($articleManager->getArticles());
// echo "<ul>";
// foreach ($articleManager->getArticles() as $value) {
//     echo "<li>".$value->getUpperTitle()."</li>";
// }
// echo "</ul>";
// if (!empty($_POST)) {
//     $article = new Article();
//     $manager = new ArticleManager();
//     $article->hydrate($_POST);
//     $manager->saveArticle($article);
//     var_dump($article);
// } else {
//     require "templates/addArticle.php";
// }

$article = new Article();
    // if (isset($article->test)) {
    //     $article->test;
    // }
$article->test();

// $test = "toto";
// $toto = "Hello World!";
// echo $$test;
// =>$"toto";