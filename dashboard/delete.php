<?php

    require "db/connect.php";

    $id = $_GET["id"];

    $requete_delete = "DELETE FROM shopnow . products where id = '$id' ";
    $b = $conn->query($requete_delete);

    header("location: index.php?add=Add+Products");

?>