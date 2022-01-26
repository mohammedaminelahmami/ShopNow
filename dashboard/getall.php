
<?php 
    require "db/connect.php";

    $sql = "SELECT * FROM shopnow . products";
    $e = $conn->query($sql);

    $results = $e->fetchAll(PDO::FETCH_ASSOC);

?>  

<section class="section1">
    <?php foreach($results as $result) :?>

        <div class="card">
            <img src="imgs/prodd.png" alt="Avatar">
            <div class="containerr">
                <p class="product__qty"><?php echo "Product Name  : " . $result["ProductName"]; ?></p>
                <p class="product__qty"><?php echo "Quantity : " . $result["Quantity"]; ?></p>
            </div>
        </div>
            
    <?php endforeach ?>
</section>
