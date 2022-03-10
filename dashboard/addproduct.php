<?php

    require_once "db/connect.php";

    if(isset($_POST['submit']))
    {
        $productname = htmlspecialchars($_POST['productname']);
        $Price = htmlspecialchars( $_POST['Price']);
        $Quantity = htmlspecialchars($_POST['Quantity']);
        $Category = htmlspecialchars($_POST['Category']);

        $requete_insert = "INSERT INTO shopnow . products(ProductName, Price, Quantity, Category) VALUES(:productname, :Price, :Quantity, :Category)";
        $a = $conn->prepare($requete_insert);

        $a->execute([
            ':productname' => $productname,
            ':Price' => $Price,
            ':Quantity' => $Quantity,
            ':Category' => $Category
        ]);

        header("location: index.php?add=Add+Products");

        // $a = $conn->prepare($requete_insert);
        // $a->execute();
    }

    $requete_select = "SELECT * FROM shopnow . products";
    // $data_before = $conn->prepare($requete_select);
    // $data_before->execute();

    $data_before = $conn->prepare($requete_select);
    
    $data_before->execute();
    // $data_before->bindParam();
    $results = $data_before->fetchALL(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($results);
    // echo "</pre>";
?>

<section class="sect1">

    <form action="addproduct.php" method="POST" class="form__add">

        <input type="text" placeholder="Product Name" name="productname" class="input" required>
        <input type="number" step="0.0001" placeholder="Price" name="Price" class="input" required>
        <input type="number" placeholder="Quantity" name="Quantity" class="input" required>
        <input type="text" placeholder="Categorie" name="Category" class="input" required>

        <input type="submit" value="Add Product" name="submit" class="btn__form1" id="btn__form1" >

    </form>
</section>
<section class="sect2">
    <div class="group1">

        <div class="s__group1">
            <div class="table__a">Product</div>
            <div class="table__a">Price</div>
            <div class="table__a">Quantity</div>
            <div class="table__a">Categories</div>
        </div>

        <?php foreach ($results as $result) : ?>
            <div class="s__group2">
                <div class="table__n"><?php echo $result["ProductName"]; ?></div>
                <div class="table__n"><?php echo $result["Price"]; ?></div>
                <div class="table__n"><?php echo $result["Quantity"]; ?></div>
                <div class="table__n"><?php echo $result["Category"]; ?></div>

                <?php $id = $result["id"]; ?>

                <button type="submit" class="myBtn"><img src="imgs/modify.png" width="30" height="30" title="edit"></button>
                <a href="delete.php?id=<?php echo $id; ?>"><img src="imgs/delete.png" width="30" height="30" title="delete"></a>
            </div>

            <!-- START EDIT  -->
            
            <!-- The Modal -->
            <div class="modal">
                <!-- Modal content -->
                <center>
                <div class="modal-content">
                    <span class="close">&times;</span>

                    <form action="edit.php" method="POST">
                        <input type="text" name="id" value="<?php echo $id?>" hidden>

                        <input type="text" placeholder="Product Name" name="productname_upd" value="<?php echo $result["ProductName"]; ?>" class="input" required>
                        <input type="number" placeholder="Price" name="Price_upd" value="<?php echo $result["Price"]; ?>" class="input" required>
                        <input type="number" placeholder="Quantity" name="Quantity_upd" value="<?php echo $result["Quantity"]; ?>" class="input" required>
                        <input type="text" placeholder="Categorie" name="Category_upd" value="<?php echo $result["Category"]; ?>" class="input" required>

                        <br>
                        <input type="submit" value="Edit Product" name="Edit" class="btn__form1" style="background-color: white; color:black;">
                    </form>

                </div>
                </center>
            </div>
        
            <!--  End EDIT -->
        <?php endforeach ?>
        
    </div>
</section>
