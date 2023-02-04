<?php

$page = "books";
include 'header.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $query = "SELECT * FROM produkt";
    $resultprodukt = mysqli_query($conn, $query);  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
    <title>Document</title>
</head>
<body>
    <div class="books">
        <?php foreach ($resultprodukt as $item) : ?>
            <div class="book">
                <img class="productImg" src="<?= $item['img'] ?>" alt="">
                <div class="info">
                    <div class="upperProductInfo">
                        <h4><?= $item['nazov'] ?></h4>
                        <p class="author"> <?= $item['autor'] ?> </p>
                        <p class="description"> <?= $item['description'] ?> </p>
                    </div>
                    <div class="lowerProductInfo">
                        <p class="price"> <?= $item['cena'] ?>€ </p>
                        <p> 
                            <?php 
                                if($item['inStock'] > 0) {
                                    echo '<p class="inStock">In Stock</p>';
                                }
                                else if($item['inStock'] == 0){
                                    echo '<p class="outOfStock">Out of Stock</p>';
                                }
                            ?> 
                         </p>
                    </div>
                    
                </div>
                
            </div>
        <?php endforeach; ?>
    </div>



</body>
</html>