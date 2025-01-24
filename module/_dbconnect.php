<?php
    $Servername= 'localhost';
    $Username= 'root';
    $Password= '';
    $dbName = 'insta';
    $conn = mysqli_connect($Servername,$Username,$Password,$dbName);

    if(!$conn){
        echo 'not connected';
    }
?>