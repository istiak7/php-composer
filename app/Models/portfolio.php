<?php 

namespace App\Models;
use App\Base\Model;

class Portfolio extends Model
{
    protected string $tableName = "portfolios";
    public function get():array|false
    {
       return $this->fetchAll("SELECT * FROM {$this->tableName}");
    }
    public function findByid(int $id){

    }
}