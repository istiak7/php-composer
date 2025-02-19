<?php 

namespace App\Base;
use App\Base\Database;

class Model{

    private $connection;
    public function __construct(){

        $database = Database::getInstance();
        $this->connection = $database->getConnection();

    }

    public function execute(string $sqlQuery, array $bindparams=[]):\PDOStatement|false{

        $pdo = $this->connection;
        $stmt = $pdo->prepare($sqlQuery);
        $stmt->execute($bindparams); 
        return $stmt ;

    }

    public function fetchAll(string $sqlQuery, array $bindparams=[]){

        $stmt = $this->execute($sqlQuery, $bindparams);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function fetchObj(string $sqlQuery, array $bindparams=[]){

        $stmt = $this->execute($sqlQuery, $bindparams);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
        
    }

    public function insertData(string $table, array $data){

        $keys = implode(',', array_keys($data));
        $values = implode(',', array_fill(0, count($data), '?'));
        $sql = "INSERT INTO $table ($keys) VALUES ($values)";
        $this->execute($sql, array_values($data));
        return $this->connection->lastInsertId(PDO::FETCH_ASSOCz);

    }

}