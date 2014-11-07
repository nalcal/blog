<?php
//we want to title it to recive the information
//we are going to filter that input with FILTER_SANITIZE_STRING 
$title = filer_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
//we want to post it to recive the information
//we are going to filter that input with FILTER_SANITIZE_STRING 
$post = filer_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//we are going to echo about this title
echo "<p> Title: $title </p>";

//we are going to echo about this title
echo "<p> Post: $post </p>";
