<?php
    $page = "books";
    include 'header.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';
    
    $id = $_GET['id'];

    $query = "SELECT * FROM productbooks where id = $id;";
    $resultprodukt = mysqli_query($conn, $query);  
    $product = mysqli_fetch_assoc($resultprodukt);
    $nazov = $product['nazov'];
    $img = $product['img'];
    $autor = $product['autor'];
    $cena = $product['cena'];
    $rating = $product['rating'];
    $pocetRating = $product['pocetRating'];
    $linkRating = $product['linkRating'];
    $description = $product['description'];
    $inStock = $product['inStock'];
    $pocetStran = $product['pocetStran'];
    $format = $product['format'];
    $language = $product['language'];
    $genre = $product['genre'];
    $year = $product['year'];
    $publisher = $product['publisher'];
    $dimensions = $product['dimensions'];
    

    $genre = explode(",", $product['genre']);
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
    <title>Bookshop/Books</title>
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
                        <a><?php echo $rating ?> / 5 (<?php echo $pocetRating ?> ratings on </a>
                        <a href="<?php echo $linkRating ?>">goodreads</a>
                        <a>)</a>
                    </div>
                    <div class="author1">
                        <p><?php echo $format ?> | <?php echo $language ?></p>
                    </div> <br>
                    <div class="author">
                        <p>Author: </p>
                    </div>

                    <div class="author1">
                        <p><?php echo $autor ?></p> 
                    </div><br>
                    
                    <div class="author">
                        <p>Genre: </p>
                    </div>

                    <div class="author1">
                        <p>
                            <?php 
                                foreach ($genre as $genre) {
                                    echo "<p>" . $genre . "</p>";
                                } 
                            ?>
                        </p>
                    </div>
                    
                    <br>
                    <div class="descBook">
                    <?php 
                        foreach ($paragraphs as $paragraph) {
                            echo "<p>" . $paragraph . "</p><br>";
                        }
                    ?>
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
                        <p><?php echo $format ?> | <?php echo $pocetStran ?> pages</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Dimensions: </p>
                    </div>
                    <div class="details1">
                        <p><?php echo $dimensions ?></p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Publication date </p>
                    </div>
                    <div class="details1">
                        <p><?php echo $year ?></p>
                    </div>
                    <br>

                    

                </div>

                <div class="textDesc1">

                    <div class="details">
                        <p>Publisher: </p>
                    </div>
                    <div class="details1">
                        <p><?php echo $publisher ?></p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Edition: </p>
                    </div>
                    <div class="details1">
                        <p>Standard edition</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Our Catalogue Number: </p>
                    </div>
                    <div class="details1">
                        <p> <?php echo $id ?> </p>
                    </div>
                    <br>

                </div>
            </div>
        </div>

        </div>



    </section>
</body>

<script>
const container1 = document.querySelector('.bookBox0');
    const container1Height = container1.offsetHeight;
  
    // Set the height of container-2 to be equal to container-1
    const container2 = document.querySelector('.bookBox1');
    container2.style.height = `${container1Height}px`;

</script>

</html>