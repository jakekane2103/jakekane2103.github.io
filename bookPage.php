<?php
    $page = "books";
    include 'header.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';
    
    $id = $_GET['id'];

    $query = "SELECT * FROM produkt where id = $id;";
    $resultprodukt = mysqli_query($conn, $query);  
    $product = mysqli_fetch_assoc($resultprodukt);
    $nazov = $product['nazov'];
    $img = $product['img'];
    $autor = $product['autor'];
    $cena = $product['cena'];
    $rating = $product['rating'];
    $description = $product['description'];
    $inStock = $product['inStock'];
   
    $paragraphs = explode("/p", $description);
?>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookPage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop/Books/The Lord of the Rings</title>
</head>

<body>

    <section>
        
        <div class="bookPage">

            <div class="bookBox0">
                <img src="<?php echo $img ?>" alt="">
                <div class="text">
                    <h2> <?php echo $nazov ?>  </h2>
                    <div class="ratingBook">
                        <p class="stars">★</p>
                        <a><?php echo $rating ?> / 10 (2 518 596 ratings on </a>
                        <a href="https://www.goodreads.com/book/show/3263607-the-fellowship-of-the-ring">goodreads</a>
                        <a>)</a>
                    </div>

                    <p>Hardback | English</p>
                    <div class="author">
                        <p>Author: </p>
                    </div>

                    <div class="author1">
                        <p><?php echo $autor ?></p>
                    </div>
                    
                    
                    <br>
                    <div class="descBook">
                    <?php 
                        foreach ($paragraphs as $paragraph) {
                            echo "<p>" . $paragraph . "</p><br>";
                        }?>
                    </div>

                </div>


            </div>

            <div class="bookBox1">
                <div class="textMoney">
                    <h2><?php echo $cena ?>€</h2>
                 
                    <h3>
                        <?php 
                            if($inStock > 0) {
                                echo '<p class="inStock">In Stock</p>';
                            }
                            else if($inStock == 0){
                                echo '<p class="outOfStock">Out of Stock</p>';
                            }
                        ?>
                    </h3>
               
                </div>  
                <div class="textBot">
                    <div>
                        <p>Free delivery worldwide</p>
                    </div>
                    
                    <p>Available. Expected delivery to Slovakia in 6-11 business days.</p>
                    <p>Order now for expected delivery by 31. 1. 2022</p>
                    <div class="bookBtn">
                        <a href="">Add to cart</a>
                    </div>
                    <br>
                    <div class="bookBtn1">
                        <a href="">Add to wishlist</a>
                    </div>

                </div>
            </div>

            <div class="bookBox2">
                <h2>Product Details</h2>
                <div class="textDesc0">

                    
                    <div class="details">
                        <p>Format: </p>
                    </div>
                    <div class="details1">
                        <p>Hardback | 1248 pages</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Dimensions: </p>
                    </div>
                    <div class="details1">
                        <p>149 x 228 x 82mm | 1,980g</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Publication date </p>
                    </div>
                    <div class="details1">
                        <p>14 Oct 2021</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Publisher: </p>
                    </div>
                    <div class="details1">
                        <p>Royal Print</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Publication City/Country: </p>
                    </div>
                    <div class="details1">
                        <p>London, United Kingdom</p>
                    </div>

                </div>

                <div class="textDesc1">

                    <div class="details">
                        <p>Edition: </p>
                    </div>
                    <div class="details1">
                        <p>Special edition</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Edition Statement: </p>
                    </div>
                    <div class="details1">
                        <p>Deluxe single-volume illustrated edition</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>ISBN10: </p>
                    </div>
                    <div class="details1">
                        <p>0008471290</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>ISBN13: </p>
                    </div>
                    <div class="details1">
                        <p>9780008471293</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Bestsellers rank: </p>
                    </div>
                    <div class="details1">
                        <p>183</p>
                    </div>
                    <br>

                </div>
            </div>
        </div>

        </div>



    </section>
</body>


</html>