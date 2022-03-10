<?php

    $dsn = "mysql:host = localhost; dbname = shopnow";
    $user = "root";
    $pass = "";

    try{

        $conn = new PDO($dsn, $user, $pass);

    }catch(PDOException $e){

        echo "Failed" . $e->getMessage();

    }

?>