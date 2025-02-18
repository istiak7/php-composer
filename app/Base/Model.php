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
            $dbHost = env('DB_HOST');
            if(empty($dbHost)){
                throw new Exception("Please provide database host");
            }

            $dbPort = env('DB_PORT');
            if(empty($dbPort)){
                throw new Exception("Please provide database port");
            }

            $dbName = env('DB_NAME');
            if(empty($dbName)){
                throw new Exception("Please provide database name");
            }

            $dbUser = env('DB_USER');
            if(empty($dbUser)){
                throw new Exception("Please provide database user");
            }

            $dbPassword = env('DB_PASSWORD');
            if(!empty($dbPassword)){
                throw new Exception("Please provide valid database password");
            }

            return new \PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);
        }catch(\Throwable $th){
            throw $th;
        }
    }
    public function execute(string $sqlQuery, array $bindparams=[]):\PDOStatement|false{

        $pdo = $this->connect();
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
}