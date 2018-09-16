<?php

require_once("../db.php");

    $sql = "CREATE TABLE another(
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name text NOT NULL,
        grade varchar(2) NOT NULL,
        subject varchar(50) NOT NULL,
        content_file text NULL,
        content_text text NULL,
        type varchar(50) NOT NULL)";
    
        if($connection->query($sql)===TRUE){
            echo "table created";
        }if($connection->query($sql)===FALSE){
            echo "table failed";
        }
?>