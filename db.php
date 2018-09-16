<?php

$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "b186ee9f845e68";
$password = "4b9feda0";
$dbname = "heroku_5127e81f159d979";

    $connection = new mysqli($servername, $username, $password, $dbname);
    
    if(!$connection){
        die("Connection Failed");
    }
    ?>