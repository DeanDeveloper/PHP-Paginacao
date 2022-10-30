<?php

    require_once 'connection.php';


    $stmt = "SELECT * FROM usuarios";
    $stmt = $connection->prepare($stmt);
    $stmt->execute();
    $result = $stmt->fetchAll();

    


?>