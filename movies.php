<?php
    $page = "movies";
    include 'header.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $query = "SELECT * FROM productmovies";
    $resultprodukt = mysqli_query($conn, $query); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="movies.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop: Movies</title>

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
                        <h3>Audio</h3>
                        <a class="btn" onclick="filterSelection('english')">English</a> <br>
                        <a class="btn" onclick="filterSelection('french')">French</a> <br>
                        <a class="btn" onclick="filterSelection('german')">German</a> <br>
                        <a class="btn" onclick="filterSelection('czech')">Czech</a>

                    </div>
                </div>
            </div>

           
            <div class="cover">

                <div class="choices">
                    <h3>Cover</h3>
                    <a class="btn" onclick="filterSelection('hard')">Hardback</a> <br>
                    <a class="btn" onclick="filterSelection('paper')">Paperback</a>
                </div>
            </div>

            <div class="condition">

                <div class="choices">
                    <h3>Condition</h3>
                    <a class="btn" onclick="filterSelection('new')">New</a> <br>
                    <a class="btn" onclick="filterSelection('used')">Used</a>

                </div>
            </div>

            <div class="availability">
                <div class="choices">
                    <h3>Availability</h3>
                    <a class="btn" onclick="filterSelection('in')">In Stock</a> <br>
                    <a class="btn" onclick="filterSelection('pre')">Pre-order <br></a>
                    <a class="btn" onclick="filterSelection('out')">Out of Stock</a>
                </div>

            </div>

            <div class="genre"></div>
            <div class="choices">
                <h3>Genre</h3>
                <a class="btn" onclick="filterSelection('adv')">Adventure</a>
                <a class="btn" onclick="filterSelection('fan')">Fantasy</a> <br>
                <a class="btn" onclick="filterSelection('mys')">Mystery</a> <br>
                <a class="btn" onclick="filterSelection('poe')">Poetry</a> <br>
                <a class="btn" onclick="filterSelection('hor')">Horror </a> <br>
                <a class="btn" onclick="filterSelection('rom')">Romance <br></a>
                <a class="btn" onclick="filterSelection('sci')">Sci-Fi</a>
            </div>

            <div class="reset">
                <a class="btn" onclick="filterSelection('all')">Reset Filters</a>
            </div>
        </div>


        

        </div>


    <div class="movies">
        <?php foreach ($resultprodukt as $item) : ?>
            <div class="movie">
                <img class="productImg" src="<?= $item['img'] ?>" alt="">
                <div class="info">
                    <div class="upperProductInfo">
                        
                        <a href="moviePage.php?id=<?php echo $item['id']; ?>">
                            <h4 class="name">
                                <?php 
                                    if (strlen($item['nazov']) < 16) {
                                            echo '<span style="font-size: 110%">' . $item['nazov'] . '</span>';
                                        }
                                        else if (strlen($item['nazov']) < 20) {
                                            echo '<span style="font-size: 100%">' . $item['nazov'] . '</span>';
                                        }
                                        else {
                                            echo '<span style="font-size: 90%">' . $item['nazov'] . '</span>';
                                        } 
                                ?>
                            </h4>
                        </a>
                        
                        <p class="author"> <?= $item['director'] ?> </p>
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
        <?php endforeach; ?>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

  
    /*-----------Adjust Name Size------------*/

    const adjustText = () => {
    const elements = document.querySelectorAll(".upperProductInfo .name");
    elements.forEach(element => {
      const characters = element.textContent.length;
      if (characters <= 10) {
        element.style.fontSize = "140%";
      } else if (characters <= 20) {
        element.style.fontSize = "120%";
      } else {
        element.style.fontSize = "100%";
      }
    });
  };

  window.addEventListener("load", adjustText);
</script>