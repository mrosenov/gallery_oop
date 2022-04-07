<?php
require_once("configs/db_connection.php");

class Database {

    public $connection;

    function __construct(){
        $this->connection();
    }

    public function connection(){
        $this->connection = new mysqli(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);

        if ($this->connection->connect_errno){
            die("Database connection failed!" . $this->connection->connect_error);
        }
    }

    public function Query($sql){
        $result = $this->connection->Query($sql);
        $this->Confirm_Query($result);
        return $result;
    }

    private function Confirm_Query($result){
        if (!$result){
            die("Wrong Query!" . $this->connection->error);
        }
    }

    public function escape_string($string){
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }

    public function the_insert_id(){
        return $this->connection->insert_id;
    }
}

$database = new Database();
$database->connection;


?>