<?php
    $page = "movies";
    include 'header.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $id = $_GET['id'];

    $query = "SELECT * FROM productmovies where id = $id;";
    $resultprodukt = mysqli_query($conn, $query);  
    $product = mysqli_fetch_assoc($resultprodukt);
    $nazov = $product['nazov'];
    $img = $product['img'];
    $director = $product['director'];
    $cena = $product['cena'];
    $rating = $product['rating'];
    $pocetRating = $product['pocetRating'];
    $linkRating = $product['linkRating'];
    $description = $product['description'];
    $inStock = $product['inStock'];
    $length = $product['length'];
    $format = $product['format'];
    $audio = $product['audio'];
    $age = $product['age'];
    $composer = $product['composer'];
    $year = $product['year'];
    $cast0 = $product['cast0'];
    $cast1 = $product['cast1'];
    $cast2 = $product['cast2'];
    $genre = $product['genre'];
    $studio = $product['studio'];
   
    $genre = explode(",", $product['genre']);
    $paragraphs = explode("/p", $description);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="moviePage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop/Movies</title>
</head>

<body>


    <section>
       
        <div class="moviePage">

            <div class="movieBox0">
                <img src="<?php echo $img ?>" alt="">
                <div class="text">
                    <h2><?php echo $nazov ?></h2>
                    <div class="ratingMovie">
                        <p class="stars">★</p>
                        <a><?php echo $rating ?> / 10 (<?php echo $pocetRating ?> ratings on </a>
                        <a href="<?php echo $linkRating ?>/">IMDb</a>
                        <a>)</a>
                    </div>
                    <div class="space">
                        <p><?php echo $year ?> | <?php echo $age ?> | <?php echo $length ?></p>
                    </div>



                    <div class="author">
                        <p>Director: </p>
                    </div>
                    <div class="author1">
                        <p><?php echo $director ?></p>
                    </div>
                    <br>

                    <div class="author">
                        <p>Composer: </p>
                    </div>
                    <div class="author1">
                        <p><?php echo $composer ?></p>
                    </div>
                    <br>

                    <div class="author">
                        <p>Cast: </p>
                    </div>
                    <div class="author1">
                        <p><?php echo $cast0 ?> | <?php echo $cast1 ?> | <?php echo $cast2 ?></p>
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
                    

                    <div class="descMovie">
                    <?php 
                        foreach ($paragraphs as $paragraph) {
                            echo "<p>" . $paragraph . "</p><br>";
                        }
                    ?>
                    </div>

                </div>


            </div>

            <div class="movieBox1">
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
                    <div class="movieBtn">
                        <a href="">Add to cart</a>
                    </div>
                    <br>
                    <div class="movieBtn1">
                        <a href="">Add to wishlist</a>
                    </div>

                </div>
            </div>

            <div class="movieBox2">
                <h2>Product Details</h2>
                <div class="textDesc0">


                    <div class="details">
                        <p>Format: </p>
                    </div>
                    <div class="details1">
                        <p><?php echo $format ?> | <?php echo $length ?></p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Publication date:</p>
                    </div>
                    <div class="details1">
                        <p><?php echo $year ?></p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Studio: </p>
                    </div>
                    <div class="details1">
                        <p><?php echo $studio ?></p>
                    </div>
                    <br>

                </div>

                <div class="textDesc1">

                    <div class="details">
                        <p>Edition: </p>
                    </div>
                    <div class="details1">
                        <p>Standard edition</p>
                    </div>
                    <br>

                    <div class="details">
                        <p>Our Catalogue Number:</p>
                    </div>
                    <div class="details1">
                        <p><?php echo $id ?></p>
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