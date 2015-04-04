<?php
    require_once(__DIR__ . "/../model/config.php");

   
    /*confirms the existence of the database*/
    $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
            . "id int (11) NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
            . "DateTime datetime NOT NULL ,"
            . "PRIMARY KEY (id))");
    if($query) {
        echo "<p>Successfully create table: posts</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }   