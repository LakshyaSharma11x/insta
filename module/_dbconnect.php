<?php 
//error_reporting(0);//hides error
ob_start();session_start();
    $Servername= 'localhost';
    $Username= 'root';
    $Password= '';
    $dbName = 'insta';
    $conn = mysqli_connect($Servername,$Username,$Password,$dbName);

    if(!$conn){
        echo 'not connected';
    }
?>