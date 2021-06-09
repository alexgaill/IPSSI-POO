<?php
namespace App\Controller;

use App\Entity\Article;
use App\Manager\ArticleManager;

class ArticleController {

    public function __construct()
    {
        $this->manager = new ArticleManager;
    }

    public function home()
    {
        $articles = $this->manager->getList();
        include ROOT."/templates/indexView.php";
    }

    public function addArticle(/* $data */)
    {
        if (!empty($_POST)) {
            $article = new Article();
            $article->hydrate($_POST);
            $this->manager->create($article);
            header("Location:index.php?page=home");
        }
        include ROOT."/templates/addArticle.php";
    }

    public function test ($param)
    {
        var_dump($param);
        extract($param);
        var_dump($id);
    }
}