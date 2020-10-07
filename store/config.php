<?php

    //MySQLi

    $conn= mysqli_connect("localhost","nandish","password","contacttracer");

    //checking the connection

    if(!$conn){
        echo 'Connection error '. mysqli_connect_error()    ;

    }
    else{
    echo 'connected successfully';
    }

?>

<tr>


