<?php
namespace Vendor\Manager;

use Vendor\Database\Database;
use App\Interfaces\GlobalInterface;
use App\Interfaces\ManagerInterface;

abstract class Manager implements ManagerInterface, GlobalInterface{

    protected $db;
    protected $table;


    public function __construct ()
    {
        $db = new Database();
        $this->db = $db->getPdo();
    }

    // public abstract function create($article);

    /**
     * Return list of elements
     *
     * @return array
     */
    public function getList() :array
    {
        $query = $this->db->query("SELECT * FROM $this->table");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }

    /**
     * return one element
     *
     * @param int $id
     * @return object
     */
    public function getOne(int $id)
    {
        $query = $this->db->query("SELECT * FROM $this->table WHERE id= $id");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }

    // public abstract function update();

    // public abstract function delete();
}