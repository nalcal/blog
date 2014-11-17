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
    //allows use to global variables for this function
    //created a public function with $host, $username, $password, $database
    //to pass any parameters on object construction then you need one.
    //The constructor is called on an object after it has been created, and is a good place to put initialisation code, etc.
    public function __construct($host, $username, $password, $database){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    //created a open connection
    public function openConnection(){
 
    }
    //created a close connection
    public function closeConnection(){
        
    }
    //created a query 
    //connected to a string
    public function query($string){
        
    }
    
    
}