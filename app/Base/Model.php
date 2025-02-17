<?php 
namespace App\Base;

use Exception;

class Model{
    public function __construct()
    {
        $this->connect();
    }
    public function connect(){
        try{
            $dbHost = isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST']:'';
            if(empty($dbHost)){
                throw new Exception("Please provide database host");
            }

            $dbPort = isset($_ENV['DB_PORT']) ? $_ENV['DB_PORT']:'';
            if(empty($dbPort)){
                throw new Exception("Please provide database port");
            }

            $dbName = isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME']:'';
            if(empty($dbName)){
                throw new Exception("Please provide database name");
            }

            $dbUser = isset($_ENV['DB_USER']) ? $_ENV['DB_USER']:'';
            if(empty($dbUser)){
                throw new Exception("Please provide database user");
            }

            $dbPassword = isset($_ENV['DB_PASSWORD']) ? $_ENV['DB_PASSWORD']:'';
            if(!empty($dbPassword)){
                throw new Exception("Please provide valid database password");
            }

            return new \PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);
        }catch(\Throwable $th){
            throw $th;
        }
    }
    public function execute(string $sqlQuery):\PDOStatement|false{
        $stmt = $this->connect()->query($sqlQuery);
        $stmt->execute();
        return $stmt ;
    }

    public function fetchAll(string $sqlQuery){
        $stmt = $this->execute($sqlQuery);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function fetchObj(string $sqlQuery){
        $stmt = $this->execute($sqlQuery);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}