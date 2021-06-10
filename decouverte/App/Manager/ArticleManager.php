<?php
namespace App\Manager;

use Vendor\Manager\Manager;

/**
 * @method array getList() | retourne la liste des articles
 * @method object getOne(int $id) | retourne un article
 */
class ArticleManager extends Manager{

    protected $db;
    protected $table = "article";

    /**
     * Sauvegarder un article dans la BDD
     *
     * @param Article $article
     */
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
    public function update(){}
    public function delete(){}
}