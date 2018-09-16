<?php

require_once("../db.php");

    $sql = "CREATE TABLE blogs(
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title text NOT NULL,
        blog NOT NULL,
        author varchar(50) NOT NULL,
        AddedOnDate timestamp ON UPDATE CURRENT_TIMESTAMP)";

        if($connection->query($sql)===TRUE){
            echo "table created";
        }if($connection->query($sql)===FALSE){
            echo "table failed";
        }
?>