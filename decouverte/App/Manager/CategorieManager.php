<?php

use App\Entity\Categorie;
use Vendor\Manager\Manager;

/**
 * @method array getList() | retourne la liste des catégories
 * @method object getOne(int $id) | retourne une catégorie
 */
class CategorieManager extends Manager{
    protected $db;
    protected $table = "categorie";

    public function create ($categorie)
    {
        $statement = "INSERT INTO categorie (name) 
                        VALUES (:name)";
        
        $prepare = $this->db->prepare($statement);
        $prepare->bindValue(":name", $categorie->getName());

        $prepare->execute();
    }

    public function update(){}

    public function delete(){}
}