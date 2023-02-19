<?php
$page = "books";
include 'header.php';

require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';


// Get the search query from the URL parameters
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Construct the SQL query to get the products
$sql = "SELECT * FROM productbooks";
if (!empty($query)) {
  // Add a WHERE clause to filter the results by the search query
  $sql .= " WHERE nazov LIKE '%$query%'";
}

// Execute the SQL query and fetch the results
$result = mysqli_query($conn, $sql);

if (!$result) {
  die("Error: " . mysqli_error($conn));
}

// Fetch the results as an associative array
$results = mysqli_fetch_all($result, MYSQLI_ASSOC);




// Get filter parameters from POST request
$language = isset($_POST['language']) ? $_POST['language'] : '';
$format = isset($_POST['format']) ? $_POST['format'] : '';
$genre = isset($_POST['genre']) ? $_POST['genre'] : '';
$inStock = isset($_POST['inStock']) ? $_POST['inStock'] : '';
$priceFrom = isset($_POST['priceFrom']) ? $_POST['priceFrom'] : '';
$priceTo = isset($_POST['priceTo']) ? $_POST['priceTo'] : '';



// Construct the SQL query
$sql = "SELECT * FROM productbooks WHERE 1=1";

if ($language) {
    $sql .= " AND language = '$language'";
}

if ($format) {
    $sql .= " AND format = '$format'";
}

if ($genre) {
    $genres = explode('|', $genre);
    $genreSql = "";
    foreach ($genres as $genre) {
        $genreSql .= " OR genre LIKE '%$genre%'";
    }
    $genreSql = ltrim($genreSql, " OR");
    $sql .= " AND ($genreSql)";
}



if ($inStock) {
    $sql .= " AND inStock = '$inStock'";
}

if ($priceFrom) {
    $sql .= " AND cena >= $priceFrom";
}

if ($priceTo) {
    $sql .= " AND cena <= $priceTo";
}

// Execute the query and display the results
$products = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="books.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Bookshop: Books</title>

</head>

<body>
    <section>
    <form method="post">
        <div class="filter">
            <div class="cost">
                <div id="myBtnContainer">
                    <div class="choices">
                        <h3>Price</h3>
                    </div>
                    <input type="number" step="0.01" class="priceRange" name="priceFrom" placeholder="From" min="1">
                    <input type="number" step="0.01" class="priceRange" name="priceTo" placeholder="To" min="1">
                </div>

            </div>

            <div class="language">
                <div class="choices">
                    <div id="myBtnContainer">
                      <h3>Language</h3>
                        <label><input type="radio" name="language" value="english">English</label><br>
                        <label><input type="radio" name="language" value="french">French</label><br>
                        <label><input type="radio" name="language" value="german">German</label><br>
                        <label><input type="radio" name="language" value="slovak">Slovak</label><br>
                        <label><input type="radio" name="language" value="czech">Czech</label><br>
                    </div>
                  </div>
                </div>

            <div class="cover">

                <div class="choices">
                    <h3>Format</h3>
                    <label><input type="radio" name="format" value="hardback">Hardback</label><br>
                    <label><input type="radio" name="format" value="paperback">Paperback</label>
                </div>
            </div>

            <div class="availability">
                <div class="choices">
                    <h3>Availability</h3>
                    <label><input type="radio" name="inStock" value="1" >In Stock</label><br>
                    <label><input type="radio" name="inStock" value="null" >Out of Stock</label><br>
                </div>
            </div>


            <div class="genre">
                <div class="choices">
                    <h3>Genre</h3>
                    <label><input type="radio" name="genre" value="Adventure">Adventure</label><br>
                    <label><input type="radio" name="genre" value="Comedy">Comedy</label><br>
                    <label><input type="radio" name="genre" value="Fantasy">Fantasy</label><br>
                    <label><input type="radio" name="genre" value="Horror">Horror </label><br>
                    <label><input type="radio" name="genre" value="Manga">Manga </label><br>
                    <label><input type="radio" name="genre" value="Mystery">Mystery</label><br>
                    <label><input type="radio" name="genre" value="Romance">Romance </label><br>
                    <label><input type="radio" name="genre" value="Sci-fi">Sci-Fi</label>
                </div>

              
                    <div class="btn">
                        <button class="filterBtn" type="submit">Filter</button>
                    </div>

                    <div class="btnReset">
                        <button class="filterBtn">Reset Filters</button>
                    </div>
            </div>
        

               
        </div>
    </form>

    <div class="books">
        <?php
                if (count($_POST) > 0) { 
                    foreach ($products as $item) : ?> 
                       <div class="book">
                           <img class="productImg" src="<?= $item['img'] ?>" alt="">
                           <div class="info">
                               <div class="upperProductInfo">

                                   <a href="bookPage.php?id=<?php echo $item['id']; ?>">
                                       <h4 class="name"> 
                                           <?php 
                                               if (strlen($item['nazov']) < 16) {
                                                   echo '<span style="font-size: 110%">' . $item['nazov'] . '</span>';
                                               }
                                               else if (strlen($item['nazov']) < 20) {
                                                   echo '<span style="font-size: 110%">' . $item['nazov'] . '</span>';
                                               }
                                               else {
                                                   echo '<span style="font-size: 100%">' . $item['nazov'] . '</span>';
                                               }
                                           ?>
                                       </h4>
                                   </a>
                                           
                                   <p class="author"> <?= $item['autor'] ?> </p>
                                   <p class="description"> <?= $item['description'] ?> </p>
                               </div>
                               <div class="lowerProductInfo">
                                   <p class="price"> <?= $item['cena'] ?>€ </p>
                                   <p class="inStock"> 
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
                    <?php endforeach; 
                }


                else { 
                    foreach ($results as $item) : ?> 
                       <div class="book">
                           <img class="productImg" src="<?= $item['img'] ?>" alt="">
                           <div class="info">
                               <div class="upperProductInfo">

                                   <a href="bookPage.php?id=<?php echo $item['id']; ?>">
                                       <h4 class="name"> 
                                           <?php 
                                               if (strlen($item['nazov']) < 16) {
                                                   echo '<span style="font-size: 110%">' . $item['nazov'] . '</span>';
                                               }
                                               else if (strlen($item['nazov']) < 20) {
                                                   echo '<span style="font-size: 110%">' . $item['nazov'] . '</span>';
                                               }
                                               else {
                                                   echo '<span style="font-size: 100%">' . $item['nazov'] . '</span>';
                                               }
                                           ?>
                                       </h4>
                                   </a>
                                           
                                   <p class="author"> <?= $item['autor'] ?> </p>
                                   <p class="description"> <?= $item['description'] ?> </p>
                               </div>
                               <div class="lowerProductInfo">
                                   <p class="price"> <?= $item['cena'] ?>€ </p>
                                   <p class="inStock"> 
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
                    <?php endforeach; 
                }?>
                

    </div>


<script>

    $('a').click(function () {
        $('*').removeClass("visited");

    });

    $('a').click(function () {

        $(this).addClass("visited");

    });


    function show(shown, hidden) {
        document.getElementById(shown).style.display = 'block';
        document.getElementById(hidden).style.display = 'none';
        return false;
    }


    function show(shown, hidden) {
        document.getElementById(shown).style.display = 'block';
        document.getElementById(hidden).style.display = 'none';
        return false;
    }


    if (document.readyState == 'loading') {
        document.addEventListener('DOMContentLoaded', ready)
    } else {
        ready()
    }


    /*-----------Adjust Name Size------------*/

    const title = document.querySelector('a h4');

    if (title.textContent.length < 16) {
      title.style.fontSize = '180%';
    } else if (title.textContent.length < 20) {
      title.style.fontSize = '110%';
    }
    else
    title.style.fontSize = '45%';



</script>

</body>