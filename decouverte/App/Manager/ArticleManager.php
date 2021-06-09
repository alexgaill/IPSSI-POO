<?php
namespace App\Manager;

use App\Entity\Article;
use Vendor\Manager\Manager;

class ArticleManager extends Manager{

    protected $db;
    protected $table = "article";

    public function create ($article)
    {
        $statement = "INSERT INTO article (title, content, categorie_id, user_id) 
                        VALUES (:title, :content, :categorie_id, :user_id)";
        
        $prepare = $this->db->prepare($statement);
        $prepare->bindValue(":title", $article->getTitle());
        $prepare->bindValue(":content", $article->getContent());
        $prepare->bindValue(":categorie_id", $article->getCategorieId());
        $prepare->bindValue(":user_id", $article->getUserId());

        $prepare->execute();
    }

    public function getOne()
    {

    }

    public function update()
    {

    }
    public function delete()
    {
        
    }
}