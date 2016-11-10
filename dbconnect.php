<?php

    $servername ="localhost";
    $username ="lenny88";
    $password = "";
    $dbname ="c9";
    
    //creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }

?>