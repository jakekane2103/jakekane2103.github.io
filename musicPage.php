<?php
    $page = "music";
    include 'header.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $id = $_GET['id'];

    $query =    "SELECT * 
                FROM productmusic
                JOIN band ON productmusic.bandId = band.bandId
                JOIN bandmember ON bandmember.bandId = band.bandId
                JOIN songs ON songs.albumId = productmusic.id
                WHERE productmusic.id = $id;";

    $resultprodukt = mysqli_query($conn, $query);  
    $product = mysqli_fetch_assoc($resultprodukt);
    if ($product) {
    $albumName = $product['albumName'];
    $albumImg = $product['albumImg'];
    $genre = $product['genre'];
    $bandId = $product['bandId'];
    $format = $product['format'];
    $price = $product['price'];
    $length = $product['length'];
    $releaseDate = $product['releaseDate'];
    $recordLabel = $product['recordLabel'];
    $recordChart = $product['recordChart'];
    $inStock = $product['inStock'];
    $bandId = $product['bandId'];
    $bandName = $product['bandName'];
    $bandFormed = $product['bandFormed'];
    $bandCountry = $product['bandCountry'];
    $bandPhoto = $product['bandPhoto'];
    $bandMemberId = $product['bandMemberId'];
    $bandMemberName = $product['bandMemberName'];
    $bandMemberRole = $product['bandMemberRole'];
    $songId = $product['songId'];
    $songNumber = $product['songNumber'];
    $songName = $product['songName'];
    $songLength = $product['songLength'];
    $albumId = $product['albumId'];

    $bandMembers = array();

    while ($product = mysqli_fetch_assoc($resultprodukt)) {
    $bandMembers[] = array(
        'name' => $product['bandMemberName'],
        'role' => $product['bandMemberRole']
    );
    }

    $songs = array();
    // Replace this with your database query to fetch songs
    $songs = mysqli_query($conn, "SELECT * FROM songs WHERE songs.albumId = $id;");


}

    else {
        echo "NO PRODUCT FOUND";
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="musicPage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
    <title>Bookshop</title>
</head>

<body>
    <section>
        <div class="musicPage">
            <div class="musicBox0">
                <div class="box0_upperLeft">
                    <img src="<?php echo $albumImg ?>" alt="">
                </div>
                    <div class="box0_upperRight">
                        <div class="left">
                        <h2><?php echo $albumName ?></h2>
                        
                        <div class="author">
                            <p>Artist: </p>
                        </div>
                        <div class="author1">
                            <p>	<?php echo $bandName ?> </p>
                        </div>
                        <br>

                        <div class="author">
                            <p>Format: </p>
                        </div>
                        <div class="author1">
                            <p><?php echo $format ?></p>
                        </div>
                        <br>

                        <div class="author">
                            <p>Genre: </p>
                        </div>
                        <div class="author1">
                            <p><?php echo $genre ?></p>
                        </div>
                        <br>

                        <div class="author">
                            <p>Length: </p>
                        </div>
                        <div class="author1">
                            <p><?php echo $length ?></p>
                        </div>
                        <br>

                        <div class="author">
                            <p>Released: </p>
                        </div>
                        <div class="author1">
                            <p><?php echo $releaseDate ?></p>
                        </div>

                        </div>
                        

                        <div class="right">
                            <img src="<?php echo $bandPhoto ?>" alt="">
                        </div>
                    </div>   

                    <div class="box0_bottomRight">

                        <div class="tracklist">
                            <div class="tracksLabel">
                                <span class='songNumber'>No.</span>
                                <span class='songName'>Title</span>
                                <span class='songLength'>Length</span>
                            </div>
                            
                            <?php
                                // Check if there are any songs in the result set
                                if (mysqli_num_rows($songs) > 0) {
                                   // Loop through each song in the result set
                                   while ($song = mysqli_fetch_assoc($songs)) {
                                    echo "<div class='track'>";
                                    echo "<span class='songNumber'>" . $song['songNumber'] . ".</span>";
                                    echo "<span class='songName'>" . $song['songName'] . "</span>";
                                    echo "<span class='songLength'>" . $song['songLength'] . "</span>";
                                    echo "</div>";
                                   }
                                }
                            ?>
                        </div>  
                    </div>
                    <div class="box0_bottomLeft">
                            <?php
                                $uniqueBandMembers = array();
                                foreach ($bandMembers as $bandMember) {
                                    if (!in_array($bandMember['name'], $uniqueBandMembers)) {
                                        $uniqueBandMembers[] = $bandMember['name'];
                                        echo "<br>";
                                        echo "<div class='member'>";
                                        echo "<p>" . $bandMember['name'] . "-</p>";
                                        echo "</div>";
                                        echo "<div class='role'>";
                                        echo "<p> " . $bandMember['role'] . "</p>";
                                        echo "</div>";
                                    }
                                }
                            ?>
                    </div>
                </div>

                <div class="musicBox1">
                <div class="textMoney">
                    <h2><?php echo $price ?>€</h2>
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
                    <p>Order now for expected delivery by 31. 4. 2023</p>
                    <div class="musicBtn">
                        <a href="">Add to cart</a>
                    </div>
                    <br>
                    <div class="musicBtn1">
                        <a href="">Add to wishlist</a>
                    </div>

                </div>
                </div>

                <div class="musicBox2">
                    <h2>Product Details</h2>
                    <div class="textDesc0">


                        <div class="details">
                            <p>Format: </p>
                        </div>
                        <div class="details1">
                            <p><?php echo $format ?></p>
                        </div>
                        <br>

                        <div class="details">
                            <p>Genre: </p>
                        </div>
                        <div class="details1">
                            <p><?php echo $genre ?></p>
                        </div>
                        <br>

                        <div class="details">
                            <p>Release Date </p>
                        </div>
                        <div class="details1">
                            <p><?php echo $releaseDate ?></p>
                        </div>
                        <br>

                        <div class="details">
                            <p>Record Label: </p>
                        </div>
                        <div class="details1">
                            <p><?php echo $recordLabel ?></p>
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
                            <p>Our Catalogue Number: </p>
                        </div>
                        <div class="details1">
                            <p><?php echo $id ?></p>
                        </div>
                        <br>

                        <div class="details">
                            <p>Recorded In: </p>
                        </div>
                        <div class="details1">
                            <p><?php echo $bandCountry ?></p>
                        </div>
                        <br>

                        <div class="details">
                            <p>Record Chart: </p>
                        </div>
                        <div class="details1">
                            <p><?php if($recordChart < 200) {
                               echo $recordChart;
                            }
                            else {
                                echo "Not";
                            }
                             ?> on Billboard 200</p>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


<script>
    // Get the height of container-1
    const container1 = document.querySelector('.musicBox0');
    const container1Height = container1.offsetHeight;
  
    // Set the height of container-2 to be equal to container-1
    const container2 = document.querySelector('.musicBox1');
    container2.style.height = `${container1Height}px`;



    const title = document.querySelector('h2');

    if (title.textContent.length < 20) {
      title.style.fontSize = '180%';
    } else if (title.textContent.length < 29) {
      title.style.fontSize = '160%';
    }
    else
    title.style.fontSize = '145%';


    function showScrollbar() {
    var table = document.querySelector(".tracklist");
    var tableHeight = table.offsetHeight;
    var tableContentHeight = table.scrollHeight;

    if (tableContentHeight > tableHeight) {
      table.style.overflowY = "scroll";
    } else {
      table.style.overflowY = "hidden";
    }
}

</script>

</html>