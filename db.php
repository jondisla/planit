<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "planit";

    $connection = new mysqli($servername, $username, $password, $dbname);
    
    if(!$connection){
        die("Connection Failed");
    }
    ?>