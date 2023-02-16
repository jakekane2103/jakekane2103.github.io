<?php
    $page = "music";
    include 'header.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $sql = "SELECT * FROM productmusic
            JOIN band ON productmusic.bandId = band.bandId";
        
    $resultprodukt = mysqli_query($conn, $sql);
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
       
        <div class="filter">
        <div class="cost">
                <div class="choices">
                    <div id="myBtnContainer">
                        <h3>Price</h3>
                        <input class="priceRange" type="text" placeholder="From"> 
                        <input class="priceRange" type="text" placeholder="To">
                        <button class="priceFilterBtn">Filter Price</button>
                    </div>

                </div>
            </div>
            <div class="language">

                <div class="choices">
                    <div id="myBtnContainer">
                    <h3>Released</h3>
                            <a class="btn" onclick="filterSelection('60')">1960-1969</a> <br>
                            <a class="btn" onclick="filterSelection('70')">1970-1979</a> <br>
                            <a class="btn" onclick="filterSelection('80')">1980-1989</a> <br>
                            <a class="btn" onclick="filterSelection('90')">1990-1990</a> <br>
                            <a class="btn" onclick="filterSelection('00')">2001-2009</a> <br>
                            <a class="btn" onclick="filterSelection('10')">2010-2019</a> <br>
                            <a class="btn" onclick="filterSelection('20')">2020-now</a>
                </div>
            </div>
            </div>

            <div class="cover">

                <div class="choices">
                    <h3>Type</h3>
                    <a class="btn" onclick="filterSelection('vi')">Vinyl</a> <br>
                    <a class="btn" onclick="filterSelection('c')">CD</a> <br>
                    <a class="btn" onclick="filterSelection('d')">Digital</a>
                </div>
            </div>

            <div class="availability">
                <div class="choices">
                    <h3>Availability</h3>
                    <a class="btn" onclick="filterSelection('in')">In Stock</a> <br>
                    <a class="btn" onclick="filterSelection('pre')">Pre-order</a> <br>
                    <a class="btn" onclick="filterSelection('out')">Out of Stock</a>
                </div>

            </div>

            <div class="genre"></div>
            <div class="choices">
                <h3>Genre</h3>
                <a class="btn" onclick="filterSelection('bl')">Blues</a>
                <a class="btn" onclick="filterSelection('cl')">Classical</a><br>
                <a class="btn" onclick="filterSelection('co')">Country</a><br>
                <a class="btn" onclick="filterSelection('ja')">Jazz</a><br>
                <a class="btn" onclick="filterSelection('me')">Metal</a><br>
                <a class="btn" onclick="filterSelection('os')">OST</a> <br>
                <a class="btn" onclick="filterSelection('pu')">Punk</a><br>
                <a class="btn" onclick="filterSelection('ro')">Rock</a><br>
            </div>
            <div class="reset">
                <a class="btn" onclick="filterSelection('all')">Reset Filters</a>
            </div>

        </div>

       
        <div class="albums">
            <?php $i = 1; ?>
            <?php foreach ($resultprodukt as $item) : ?>
              <div class="album" style="background-color: <?php echo (($i - 1) / 4 % 2 == 0) ? '#e6e6e6' : '#d4d3d3'; ?>">
                <a href="musicPage.php?id=<?php echo $item['id']; ?>">
                  <img class="productImg" src="<?php echo $item['albumImg'] ?>" alt="">
                </a>
                <h3 style="white-space: nowrap;" class="title"><?php echo $item['albumName'] ?></h3>
                <h4><?php echo $item['bandName'] ?></h4>
                <p class="bookPrice"><?php echo $item['price'] ?> €</p>
              </div>
              <?php $i++; ?>
            <?php endforeach; ?>
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