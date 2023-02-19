<?php
    $page = "music";
    include 'header.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

     // Get the search query from the URL parameters
     $query = isset($_GET['query']) ? $_GET['query'] : '';

     // Construct the SQL query to get the products
     $sql = "SELECT * FROM productmusic
            JOIN band ON productmusic.bandId = band.bandId";
     if (!empty($query)) {
       // Add a WHERE clause to filter the results by the search query
       $sql .= " WHERE albumName LIKE '%$query%'";
     }
 
     // Execute the SQL query and fetch the results
     $result = mysqli_query($conn, $sql);
 
     if (!$result) {
       die("Error: " . mysqli_error($conn));
     }
 
     // Fetch the results as an associative array
     $results = mysqli_fetch_all($result, MYSQLI_ASSOC);


         /*---------------------------------*/
    /*-------------FILTERED------------*/
    /*---------------------------------*/

// Get filter parameters from POST request
$band = isset($_POST['band']) ? $_POST['band'] : '';
$format = isset($_POST['format']) ? $_POST['format'] : '';
$genre = isset($_POST['genre']) ? $_POST['genre'] : '';
$inStock = isset($_POST['inStock']) ? $_POST['inStock'] : '';
$priceFrom = isset($_POST['priceFrom']) ? $_POST['priceFrom'] : '';
$priceTo = isset($_POST['priceTo']) ? $_POST['priceTo'] : '';



// Construct the SQL query
$sql = "SELECT * FROM productmusic
        JOIN band ON band.bandId = productmusic.bandId WHERE 1=1";

if ($band) {
    $sql .= " AND bandName = '$band'";
}

if ($format) {
    $sql .= " AND format = '$format'";
}

if ($genre) {
    $sql .= " AND genre = '$genre'";
}

if ($inStock) {
    $sql .= " AND inStock = '$inStock'";
}

if ($priceFrom) {
    $sql .= " AND price >= $priceFrom";
}

if ($priceTo) {
    $sql .= " AND price <= $priceTo";
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
    <link rel="stylesheet" href="music.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop: Music</title>

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
                      <h3>Band</h3>
                        <label><input type="radio" name="band" value="AC/DC">AC/DC</label><br>
                        <label><input type="radio" name="band" value="Guns N' Roses">Guns N' Roses</label><br>
                        <label><input type="radio" name="band" value="Megadeth">Megadeth</label><br>
                        <label><input type="radio" name="band" value="Metallica">Metallica</label><br>
                        <label><input type="radio" name="band" value="Nirvana">Nirvana</label><br>
                        <label><input type="radio" name="band" value="Pink Floyd">Pink Floyd</label><br>
                        
                    </div>
                  </div>
                </div>

            <div class="cover">

                <div class="choices">
                    <h3>Format</h3>
                    <label><input type="radio" name="format" value="CD">CD</label><br>
                    <label><input type="radio" name="format" value="Digital">Digital</label><br>
                    <label><input type="radio" name="format" value="Vinyl">Vinyl</label><br>
                    
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
                    <label><input type="radio" name="genre" value="Country">Country</label><br>
                    <label><input type="radio" name="genre" value="Metal">Metal</label><br>
                    <label><input type="radio" name="genre" value="OST">OST</label><br>
                    <label><input type="radio" name="genre" value="Pop">Pop</label><br>
                    <label><input type="radio" name="genre" value="Rap">Rap</label><br>
                    <label><input type="radio" name="genre" value="Rock">Rock</label><br>
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

       
        <div class="albums">
            <?php $i = 1; 
            // Filters have been applied, so use $results to display the products
            if (count($_POST) > 0) { 
            ?>
            <?php foreach ($products as $item) : ?>
              <div class="album" style="background-color: <?php echo (($i - 1) / 4 % 2 == 0) ? '#e6e6e6' : '#d4d3d3'; ?>">
                <a href="musicPage.php?id=<?php echo $item['id']; ?>">
                  <img class="productImg" src="<?php echo $item['albumImg'] ?>" alt="">
                </a>
                <h3 style="white-space: nowrap;" class="title"><?php echo $item['albumName'] ?></h3>
                <h4><?php echo $item['bandName'] ?></h4>
                <p class="bookPrice"><?php echo $item['price'] ?> €</p>
              </div>
              <?php $i++; ?>
            <?php endforeach; 
            }

            else {
            ?>
            <?php foreach ($results as $item) : ?>
              <div class="album" style="background-color: <?php echo (($i - 1) / 4 % 2 == 0) ? '#e6e6e6' : '#d4d3d3'; ?>">
                <a href="musicPage.php?id=<?php echo $item['id']; ?>">
                  <img class="productImg" src="<?php echo $item['albumImg'] ?>" alt="">
                </a>
                <h3 style="white-space: nowrap;" class="title"><?php echo $item['albumName'] ?></h3>
                <h4><?php echo $item['bandName'] ?></h4>
                <p class="bookPrice"><?php echo $item['price'] ?> €</p>
              </div>
              <?php $i++; ?>
            <?php endforeach; 
            }?>
        </div>
    </section>

</body>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script>

    $('a').click(function () {
        $('*').removeClass("visited");

    });

    $('a').click(function () {

        $(this).addClass("visited");

    });



    filterSelection("all")
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }



    // Show filtered elements
    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current control button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }


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

</script>