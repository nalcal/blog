<?php
//created classes
//creating a new object 
//the objects are the $connection $host $username $password $dadatbase
//im making a database
class Database {
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
   //created a public function with $host, $username, $password, $database
    public function __construct($host, $username, $password, $database){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    
    
}