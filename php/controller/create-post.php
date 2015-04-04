<?php
    require_once(__DIR__ . "/../model/config.php");
    //connectd to the  create-post.php
    
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);           
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    $date = new DateTime('today');
    $time = new DateTime('America/Los_Angeles');
    //
    
    $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
        
    if($query){
       echo "<p>Successfully inserted post: $title</p>";  
       echo "Posted on: " . $date->format("M/D/Y") . " at " . $time->format("g:i");
    }
    else {
       echo "<p>$connection->error</p>"; 
    }
//create a controller that is going to recieve the input of the title and posts that people post hyn
  
//this echos the post and title but doesnt do anything for right now
   
     