<?php 

namespace App\Models;
use App\Base\Model;

class Portfolio extends Model
{   
    protected string $tableName = "portfolios";

    public function get(int $status = -1):array|false
    {
        if($status === -1){
            return $this->fetchAll("SELECT * FROM {$this->tableName}");
        }
        else{
            return $this->fetchAll("SELECT * FROM {$this->tableName} WHERE status = ?",[$status]);
        }
    }
    public function findByid(int $id){

    }
}