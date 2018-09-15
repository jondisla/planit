<?php
    $connection = new mysqli("localhost", "root", "root", "planit");
    if(!$connection){
        die("Connection Failed");
    }
?>