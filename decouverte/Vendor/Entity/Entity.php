<?php
namespace Vendor\Entity;

class Entity {

    /**
     * hydrate la class appelée
     *
     * @param array $array
     * @return void
     */
    public function hydrate (array $array)
    {
        // if (isset($article["title"])) {
            // $this->setTitle($article["title"]);
        // }
        // $this->setContent($article["content"]);
        // $this->setCategorieId($article["categorieId"]);
        // $this->setUserId($article["userId"]);
        foreach ($array as $key => $value) {
            $method = "set". ucfirst($key);
            // $method = "setTitle";
            if(method_exists($this, $method)){
                $this->$method($value);
                // $this->setTitle($value);
            }
        }

        // $propriete = "prop";
        // Article::$prop
        // Article::$$propriete
    }
}