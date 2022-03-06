
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
                <p class="product__qty"> <span style=""> Product Name : </span> <?php echo $result["ProductName"]; ?></p>
                <p class="product__qty"> <span style=""> Quantity : </span> <?php echo $result["Quantity"]; ?></p>
            </div>
        </div>
            
    <?php endforeach ?>
</section>
