<?php //starting tag
    //_DIR_ conatinates to create folder go to model then do to database?
    require_once(__DIR__ . "/../model/database.php");
    
    //open connection using connection variable
    //use mysqli to build a new object
    $connection = new mysqli($host, $username, $password);
    
    //check to see if it is successful or not
    //to see if it has a connection error
    if($connection->connect_error){
        //tells use why we killed it off
        die("Error: " . $connection->connect_error);    
    }
    //creating a database 
    //tell us if it is true or not true
    $exists = $connection->select_db($database);
    //check to see if not exists then create the database
    //check if the program doesn't exist with the explimation point 
    if(!$exists) {
        $query = $connection->query("CREATE DATABASE $database");
       //query that gets implide to connection
        //output a message
        //tells if it is true or false
        if($query) {
            echo "Successfully created database:" . $database;          
        }
    }
    else {
        //echo out database alreday exists
        echo "Database already exists";
    }
    //created a query create a table is called post 
    //it needs to have an id(int), title(string of charaters), post text
    //all of them have to be not null
    $query = $connection->query("CREATE TABLE posts ("
            . "id int (11) NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id))");
    //close connection
    $connection->close();
