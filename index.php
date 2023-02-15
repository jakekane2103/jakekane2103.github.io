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
    <section class="sideAdsProducts">
       
        

       
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

            <div class="sideAds">
            <a href="books.html">
                <div class="christmasAd">
                    <h3 class="center">Gift Guides</h3>
                    <img src="images/christmasBook.jpg" alt="">
                    <p>Click here to browse our selection of great book gifts </p>
                </div>
            </a>

            <a href="">
                <div class="anniversary">
                    <img src="images/anniversary.jpg" alt="">
                    <div class="freeShiping">
                        <img src="images/free shiping.png" alt="">
                    </div>

                    <p>Celebrate 10th anniversary with us! Free shiping until the end of November!</p>
                    
                </div>
            </a>


            <a href="stores.html">
                <div class="visitUs">
                    <h3 class="center1">Visit Us Now!</h3>
                    <img src="images/bigBookstore.jpg" alt="">
                    <p>Nine stores in six different countries</p>
                </div>
            </a>
        </div>



    </section>

</body>