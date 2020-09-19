<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "pousada";
    $connection = mysqli_connect($hostname,$user,$password,$database);
    
    if(!$connection){
        echo "<br><br>Connection fail!!!<br><br>";
    }
?>