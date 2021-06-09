<?php
namespace App\Manager;

use Vendor\Database\Database;
use App\Entity\Article;

class ArticleManager {

    private $db;

    public function __construct ()
    {
        $db = new Database();
        $this->setDb($db->getPdo());
    }

    private function setDb (\PDO $db)
    {
        $this->db = $db;
    }

    public function getArticles () 
    {
        $query = $this->db->query("SELECT * FROM article");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\Article");
    }

    public function saveArticle (Article $article)
    {
        $statement = "INSERT INTO article (title, content, categorie_id, user_id) 
                        VALUES (:title, :content, :categorie_id, :user_id)";
        
        $prepare = $this->db->prepare($statement);
        var_dump($article);
        $prepare->bindValue(":title", $article->getTitle());
        $prepare->bindValue(":content", $article->getContent());
        $prepare->bindValue(":categorie_id", $article->getCategorieId());
        $prepare->bindValue(":user_id", $article->getUserId());

        $prepare->execute();
    }
}