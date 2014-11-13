<?php
// it will got to the model and then go to the database folder
require_once (__DIR__ . "/../model/database.php");
//created a conection
$connection = new mysqli($host, $username, $password, $database);
//we want to title it to recive the information
//we are going to filter that input with FILTER_SANITIZE_STRING 
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
//we want to post it to recive the information
//we are going to filter that input with FILTER_SANITIZE_STRING 
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//running a query to insert things

$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

//creating an if statement

if($query){
    echo "<p>Successfully inserted post: $title</p>"; 
}
//creating a else statement
else{
    echo "<p>$connection->error</p>";
    
}

//closeing tag for connection
$connection->close();
