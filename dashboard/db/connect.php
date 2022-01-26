<?php

    $dsn = "mysql:host = localhost; dbname = shopnow";
    $user = "shopnow";
    $pass = "shopnow";

    try{

        $conn = new PDO($dsn, $user, $pass);

    }catch(PDOException $e){

        echo "Failed" . $e->getMessage();

    }

?>


