<?php 
namespace App\Models;
use App\Base\Model;

class post extends Model
{   
    protected string $tableName = "posts";
    public function insert(string $table, array $data)
    {
        return $this->insertData($table, $data);
    }
    public function fetchPostData(string $table)
    {
        return $this->fetchAll("SELECT * FROM $table");
    }

}