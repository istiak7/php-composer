<?php

namespace App\Base;

use Exception;
use PDO;
/**
 
 * Database class
 * This class is used to connect to the database
 * and return the connection object
 * This class uses PDO to connect to the database
 
 */
class Database
{

    private $dbHost;
    private $dbName;
    private $dbUser;
    private $dbPort;
    private $dbPassword;
    public $conn;
    private static $instance = null;

    public function __construct()
    {
        $this->dbHost = env('DB_HOST');
        $this->dbName = env('DB_NAME');
        $this->dbUser = env('DB_USER');
        $this->dbPort = env('DB_PORT');
        $this->dbPassword = env('DB_PASSWORD');

        $this->connect();
    }

    public function connect()
    {

        try {

            if (empty($this->dbHost)) {
                throw new Exception("Please provide database host");
            }

            if (empty($this->dbPort)) {
                throw new Exception("Please provide database port");
            }

            if (empty($this->dbName)) {
                throw new Exception("Please provide database name");
            }

            if (empty($this->dbUser)) {
                throw new Exception("Please provide database user");
            }

            if (!empty($this->dbPassword)) {
                throw new Exception("Please provide valid database password");
            }
            /**
             * 
             * PDO is a database access layer that provides a fast and consistent
             * interface for accessing and managing databases in PHP applications. 
             * Create a new PDO connection
             * 
             */

            $this->conn = new PDO("mysql:host={$this->dbHost};port={$this->dbPort};dbname={$this->dbName}", $this->dbUser, $this->dbPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Set error mode

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
