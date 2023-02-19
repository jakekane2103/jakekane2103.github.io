<?php
    $page = "cart";
    include 'header.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';
    if (isset($_SESSION['userid']))
    {
        $userId = $_SESSION['userid'];
    }     
    else
    {
        $userId = 0;
    }
   
    $querybook = "SELECT * FROM cart
    JOIN productbooks on productbooks.id = cart.productId WHERE productType = 'book' AND userId = $userId;";
    $stmt = mysqli_prepare($conn, $querybook);
    mysqli_stmt_execute($stmt);
    $resultcartbook = mysqli_stmt_get_result($stmt);

    $querymovie = "SELECT * FROM cart
    JOIN productmovies on productmovies.id = cart.productId WHERE productType = 'movie' AND userId = $userId;";
    $stmt = mysqli_prepare($conn, $querymovie);
    mysqli_stmt_execute($stmt);
    $resultcartmovie = mysqli_stmt_get_result($stmt);

    $querymusic = "SELECT * FROM cart
    JOIN productmusic on productmusic.id = cart.productId
    JOIN band on band.bandId = productmusic.bandId WHERE productType = 'music' AND userId = $userId;";
    $stmt = mysqli_prepare($conn, $querymusic);
    mysqli_stmt_execute($stmt);
    $resultcartmusic = mysqli_stmt_get_result($stmt);

    $totalPrice = 0;
    $counter = 0;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop/Cart</title>
</head>
<body>
    <section>
        <div class="cart">
            
            <div class="cartBox">
                <div class="top">
                    <div class="cartTitle">
                        <h1>Your Cart (<?php echo mysqli_num_rows($resultcartbook) + mysqli_num_rows($resultcartmovie) + mysqli_num_rows($resultcartmusic); ?>)</h1>
                    </div>
                </div>
        
                <div class="cartProducts">

                <?php
                    if (!isset($_SESSION['userid']))
                    {
                        echo '<div class="warning">
                                <h1>You Need To Login to Add Products to the Cart!</h1>
                            </div>';
                    }     
                    else
                    
                ?>
                    
                    <?php foreach ($resultcartbook as $book) : ?>
                        
                        <div class="book">
                            <?php $totalPrice += $book['cena']; ?>
                            <a class="cartClick" href="bookPage.php?id=<?php echo $book['productId']; ?>">
                                <img class="productImg" src="<?= $book['img'] ?>" alt="">
                                <div class="info">
                                    <div class="upperProductInfo">
                                        <?php echo $book['userId'] ?>
                                        <?php if (strlen($book['nazov']) < 16) {
                                            echo '<h1 style="font-size: 160%">' . $book['nazov'] . '</h1>';
                                        } else if (strlen($book['nazov']) < 20) {
                                            echo '<h1 style="font-size: 150%">' . $book['nazov'] . '</h1>';
                                        } else {
                                            echo '<h1 style="font-size: 130%">' . $book['nazov'] . '</h1>';
                                        }?>
                                        <p class="productAuthor"> <?= $book['autor'] ?> </p>
                                    </div>
                                </div>
                                <p class="price"> <?php echo $book['cena'] ?>€ </p>
                            </a>
                            <form method="post" action="includes/cart.inc.php">
                                
                                <input type="hidden" name="productId" value="<?php echo $book['productId']; ?>">
                                <button type="submit" class="removeBtn" name="removeFromCart">Remove</button>
                            </form>  
                        </div>
                       
                    <?php endforeach; ?>
                   
                    <?php foreach ($resultcartmovie as $movie) : ?>
                       
                        <div class="book">
                            <?php $totalPrice += $movie['cena']; ?>
                            <a class="cartClick" href="moviePage.php?id=<?php echo $movie['productId']; ?>">
                                <img class="productImg" src="<?= $movie['img'] ?>" alt="">
                                <div class="info">
                                    <div class="upperProductInfo">
                                        <?php echo $movie['userId'] ?>
                                        <?php    if (strlen($movie['nazov']) < 16) {
                                        echo '<h1 style="font-size: 160%">' . $movie['nazov'] . '</h1>';
                                    }
                                    else if (strlen($movie['nazov']) < 20) {
                                        echo '<h1 style="font-size: 140%">' . $movie['nazov'] . '</h1>';
                                    }
                                    else {
                                        echo '<h1 style="font-size: 130%">' . $movie['nazov'] . '</h1>';
                                    }?>
                                        <p class="productAuthor"> <?= $movie['director'] ?> </p>
                                    </div>
                                </div>
                                    <p class="price"> <?php echo $movie['cena'] ?>€ </p>
                            </a>
                            <form method="post" action="includes/cart.inc.php">
                                <input type="hidden" name="productId" value="<?php echo $movie['productId']; ?>">
                                <button type="submit" class="removeBtn" name="removeFromCart">Remove</button>
                            </form>  
                            
                        </div>
                        <?php if ($counter % 5 == 0) echo '<br>'; ?>
                    <?php endforeach; ?>

                    <?php foreach ($resultcartmusic as $music) : ?>
                       
                        <div class="book">
                            <?php $totalPrice += $music['price']; ?>
                            <a class="cartClick" href="musicPage.php?id=<?php echo $music['productId']; ?>">
                                <img class="productImg" src="<?= $music['albumImg'] ?>" alt="">
                                <div class="info">
                                    <div class="upperProductInfo">
                                        <?php echo $music['userId'] ?>
                                        <?php    if (strlen($music['albumName']) < 16) {
                                        echo '<h1 style="font-size: 160%">' . $music['albumName'] . '</h1>';
                                    }
                                    else if (strlen($music['albumName']) < 20) {
                                        echo '<h1 style="font-size: 140%">' . $music['albumName'] . '</h1>';
                                    }
                                    else {
                                        echo '<h1 style="font-size: 130%">' . $music['albumName'] . '</h1>';
                                    }?>
                                        <p class="productAuthor"> <?= $music['bandName'] ?> </p>
                                    </div>
                                </div>
                                    <p class="price"> <?php echo $music['price'] ?>€ </p>
                            </a>
                            <form method="post" action="includes/cart.inc.php">
                                <input type="hidden" name="productId" value="<?php echo $music['productId']; ?>">
                                <button type="submit" class="removeBtn" name="removeFromCart">Remove</button>
                            </form>  
                            
                        </div>
                      
                    <?php endforeach; ?>
                    
                    
                </div>
               
                <div class="bottom">
                    <div class="order">
                        <p class="totalPrice">Total Price:  <?php echo $totalPrice ?>€</p>
                        <div class="orderBtn">
                            <form method="post" action="includes/cart.inc.php">
                                <input type="hidden" name="userId" value="<?php echo $userId ?>">
                                <input type="hidden" name="totalPrice" value="<?php echo $totalPrice ?>">
                                <button type="submit" name="order">Place Order</button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="bottomTitle">
                        <h3>Continue Shopping:</h3>
                    </div>
                    
                    <div class="browseBtn">
                        <a href="books.php">Books</a>&emsp;&emsp;
                        <a href="movies.php">Movies</a>&emsp;&emsp;
                        <a href="music.php">Music</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


<script>
    if (error) {
        alert("Product already in cart!");
    }
</script>

</html>
