<?php
namespace App\Controller;

use App\Entity\Article;
use App\Manager\ArticleManager;
use Vendor\Controller\DefaultController;

class ArticleController extends DefaultController{

    public function __construct()
    {
        $this->manager = new ArticleManager;
    }

    public function home()
    {
        $articles = $this->manager->getList();
        $this->render("indexView", [
            "articles" => $articles
        ]);
    }

    public function addArticle(/* $data */)
    {
        if (!empty($_POST)) {
            $article = new Article();
            $article->hydrate($_POST);
            $this->manager->create($article);
            $this->redirectToRoute("home");
        }
        $this->render("addArticle");
    }

    public function test ($param)
    {
        extract($param);
        var_dump($id);
    }
}