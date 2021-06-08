<?php
namespace App\Bdd;

// $pdo = new PDO("mysql:host=localhost:8889,dbname=blog", "root", "root", [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
// ]);

// $query = $pdo->query("SELECT * FROM article");
// foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $value) {
//     # code...
// }

class Database {

    private $dbUser = "root";
    private $dbPass = "root";
    private $host = "localhost:8889";
    private $dbName = "blog";
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbName", $this->dbUser, $this->dbPass, [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ]);
    }

    public function getPdo()
    {
        return $this->pdo;
    }
}