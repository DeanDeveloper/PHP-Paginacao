<?php


    $username = "root";
    $password = "";
    $database = "learning";
    $server = "localhost";



    try {

        $connection = new PDO("mysql:host=$server;dbname=$database; charset=UTF8", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
       
    } catch(PDOException $error) {
        echo $error->getMessage();
        die();
    }

   

?>