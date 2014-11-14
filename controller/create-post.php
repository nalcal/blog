<?php
// it will got to the model and then go to the config folder
//changed it to config
require_once (__DIR__ . "/../model/config.php");
//created a conection
//tells which database to go to
$connection = new mysqli($host, $username, $password, $database);
//we want to title it to recive the information
//we are going to filter that input with FILTER_SANITIZE_STRING 
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
//we want to post it to recive the information
//we are going to filter that input with FILTER_SANITIZE_STRING 
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//running a query to insert things
//insert info to title and post
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
