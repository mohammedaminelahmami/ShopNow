<?php 

    require "db/connect.php";

    if(isset($_POST["Edit"])){

        $id = $_POST['id'];
        $productname_upd = $_POST['productname_upd'];
        $Price_upd = $_POST['Price_upd'];
        $Quantity_upd = $_POST['Quantity_upd'];
        $Category_upd = $_POST['Category_upd'];

        $requete_update = "UPDATE shopnow . products SET ProductName = '$productname_upd', Price = '$Price_upd', Quantity = '$Quantity_upd', Category = '$Category_upd' WHERE id = '$id' ";
        $d = $conn->query($requete_update);
    }

    header("location:index.php?add=Add+Products");

?>