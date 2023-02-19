<?php
   $page = "index";
     include 'header.php';
    
    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $query = "SELECT * FROM productbooks WHERE bestNewUpcoming = 1";
    $resultbest = mysqli_query($conn, $query);  

    $query = "SELECT * FROM productbooks WHERE bestNewUpcoming = 2";
    $resultnew = mysqli_query($conn, $query);  

    $query = "SELECT * FROM productbooks WHERE bestNewUpcoming = 3";
    $resultupcoming = mysqli_query($conn, $query);  
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop</title>
</head>

<body>
    <?php ?>

    <section class="sideAdsProducts">
       
        
    
        <div class="php">
            <h2>Shop with Us</h2>
            <a href="books.php">
                <div class="christmasAd">
                    <h3>Great Book Selection</h3>
                    <img src="images/fantasySelection.webp" alt="">
                    <p>Browse a wide selection of books across many genres!</p>
                </div>
            </a>

            <a href="movies.php">
                <div class="christmasAd">
                    <h3>The Ultimate Movie Collection</h3>
                    <img src="images/moviesSelection.webp" alt="">
                    <p>Find your next favorite film in our wide array of the greatest movies ever made!</p>
                </div>
            </a>

            <a href="music.php">
                <div class="christmasAd">
                    <h3>Rock On</h3>
                    <img src="images/metalSelection.jpg" alt="">
                    <p>Explore Our Epic Collection of Metal and Rock Music!</p>
                </div>
            </a>

            <a href="">
                <div class="anniversary">
                <h3>Celebrating a Decade Together</h3>
                    <img src="images/anniversaryFree.png" alt="">
                    <div class="freeShiping">
                    </div>
                    <p>Celebrate 10th anniversary with us! <br> Free shiping until the end of April!</p>
                </div>
            </a>


            <a href="stores.php">
                <div class="visitUs">
                    <h3>Visit Us Now!</h3>
                    <img src="images/bigBookstore.jpg" alt="">
                    <p>Nine stores in six different countries</p>
                </div>
            </a>
      
        </div>

       
        <div class="products">
            <div class="bestSellers">
                <h2>Best Sellers</h2>
                <a href="books.html">More</a>
                <div class="box">
                    <?php foreach ($resultbest as $item) : ?>
                        <div class="column">
                            <a href="bookPage.php?id=<?php echo $item['id']; ?>">
                                <img src="<?php echo $item['img']?>" alt=""> <br>
                                <p class="title"><?php echo $item['nazov']?></p> <br>
                                <p class="author"><?php echo $item['autor']?></p>
                                <p class="bookPrice"><?php echo $item['cena']?> €</p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="newReleases">
                <h2>New Releases</h2>
                <a href="books.html">More</a>
                <div class="box">
                    <?php foreach ($resultnew as $item) : ?>
                        <div class="column">
                            <a href="bookPage.php?id=<?php echo $item['id']; ?>">
                                <img src="<?php echo $item['img']?>" alt=""> <br>
                                <p class="title"><?php echo $item['nazov']?></p> <br>
                                <p class="author"><?php echo $item['autor']?></p>
                                <p class="bookPrice"><?php echo $item['cena']?> €</p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="upcomingReleases">
                <h2>Upcoming Releases</h2>
                <a href="books.html">More</a>
                <div class="box">
                    <?php foreach ($resultupcoming as $item) : ?>
                        <div class="column">
                            <a href="bookPage.php?id=<?php echo $item['id']; ?>">
                                <img src="<?php echo $item['img']?>" alt=""> <br>
                                <p class="title"><?php echo $item['nazov']?></p> <br>
                                <p class="author"><?php echo $item['autor']?></p>
                                <p class="bookPrice"><?php echo $item['cena']?> €</p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

    </section>

</body>
</html>