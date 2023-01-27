<?php
    $page = "music";
    include 'header.php';
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
            <div class="price">

                <div class="choices1">
                    <div id="myBtnContainer">
                        <h3>Price </h3>
                        <a class="btn" onclick="filterSelection('under20')">Under 20€ </a> <br>
                        <a class="btn" onclick="filterSelection('20to30')"> 20€ to 30€ </a> <br>
                        <a class="btn" onclick="filterSelection('30to50')"> 30€ to 50€ </a> <br>
                        <a class="btn" onclick="filterSelection('above50')"> Above 50€ </a> <br>

                    </div>

                </div>
            </div>

            <div class="language">

                <div class="choices">
                    <div id="myBtnContainer">
                    <h3>Released</h3>
                    <a class="btn" onclick="filterSelection('50')">
                        <1959 </a> <br>
                            <a class="btn" onclick="filterSelection('60')">1960-1969</a> <br>
                            <a class="btn" onclick="filterSelection('70')">1970-1979</a> <br>
                            <a class="btn" onclick="filterSelection('80')">1980-1989</a> <br>
                            <a class="btn" onclick="filterSelection('90')">1990-1990</a> <br>
                            <a class="btn" onclick="filterSelection('00')">2001-2009</a> <br>
                            <a class="btn" onclick="filterSelection('10')">2010-2019</a> <br>
                            <a class="btn" onclick="filterSelection('20')">2020-2022</a>
                </div>
            </div>
            </div>



            <div class="choices">
                <h3>Rating</h3>

                <div class="rate">

                    <input class="btn" onclick="filterSelection('5')" type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input class="btn" onclick="filterSelection('4')" type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input class="btn" onclick="filterSelection('3')" type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input class="btn" onclick="filterSelection('2')" type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input class="btn" onclick="filterSelection('1')" type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div>
            </div>
            <br><br><br>
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

        <div class="container" id="myUL">
            <div class="products">

                <div class="row0">
                    <div class="filterDiv 20to30 80 vi out me 4">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/kill em.jpg" alt="">
                                <h3 class="title">Kill ’Em All</h3>
                                <h4>Metallica</h4>
                                <p class="bookPrice">12€</p>

                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary0 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 80 vi in me 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/Ridetl.png" alt="">
                                <h3 class="title">Ride the Lightning</h3>
                                <h4>Metallica</h4>
                                <p class="bookPrice">20€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary1 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 80 vi in me 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/master.jpg" alt="">
                                <h3 class="title">Master of Puppets</h3>
                                <h4>Metallica</h4>
                                <p class="bookPrice">25€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary2 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 30to50 80 vi in me 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/andJustice.jpg" alt="">
                                <h3 class="title">…And Justice for All </h3>
                                <h4>Metallica</h4>
                                <p class="bookPrice">25€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary3 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 30to50 90 c out me 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/blackAlbum.jpg" alt="">
                                <h3 class="title">Metallica</h3>
                                <h4>Metallica</h4>
                                <p class="bookPrice">27€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary4 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row1">
                    <div class="filterDiv 20to30 80 c out me 3">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/killingIs.jpg" alt="">
                                <h3 class="title">Killing Is My Business...</h3>
                                <h4>Megadeth</h4>
                                <p class="bookPrice">15€</p>

                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary0 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 80 c in me 3">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/peace.PNG" alt="">
                                <h3 class="title">Peace Sells... but Who's Buying?</h3>
                                <h4>Megadeth</h4>
                                <p class="bookPrice">16€</p>

                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary1 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 80 c out me 4">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/soFarSoGood.jpg" alt="">
                                <h3 class="title">So Far, So Good... So What!</h3>
                                <h4>Megadeth</h4>
                                <p class="bookPrice">15€</p>

                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary2 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 90 vi in me 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/rustInPeace.jpg" alt="">
                                <h3 class="title">Rust in Peace</h3>
                                <h4>Megadeth</h4>
                                <p class="bookPrice">24€</p>

                            </a>
                            <div class="shop-item-details 90">

                                <button class="btn btn-primary3 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 30to50 90 vi in me 5">
                        <div class="column0">
                            <a class="text" href="countdownMusic.html">
                                <img class="productImage" class="ima" src="images/countdown.jpg" alt="">
                                <h3 class="title">Countdown to Extinction</h3>
                                <h4>Megadeth</h4>
                                <p class="bookPrice">23€</p>

                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary4 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row2">
                    <div class="filterDiv 30to50 00 vi in os  5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/lotr1.jpg" alt="">
                                <h3 class="title">LOTR: The Fellowship of the Ring (OST)</h3>
                                <h4>Howard Shore</h4>
                                <p class="bookPrice">32€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary0 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 30to50 00 vi in os 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/lotr2.jpg" alt="">
                                <h3 class="title">LOTR: The Two Towers (OST)</h3>
                                <h4>Howard Shore</h4>
                                <p class="bookPrice">30€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary1 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 30to50 00 vi in os 5">
                        <div class="column0">
                            <a class="text" href="returnOfTheKingMusic.html">
                                <img class="productImage" src="images/lotr3.jpg" alt="">
                                <h3 class="title">LOTR: The Return of the King (OST)</h3>
                                <h4>Howard Shore</h4>
                                <p class="bookPrice">35€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary2 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 10 c pre os 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/witcher3.jpg" alt="">
                                <h3 class="title">Witcher 3: Wild Hunt (OST)</h3>
                                <h4>Marcin Przybyłowicz</h4>
                                <p class="bookPrice">41€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary3 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 10 d out os 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/skyrim1.jpg" alt="">
                                <h3 class="title">The Elder Scrolls V: Skyrim (OST)</h3>
                                <h4>Jeremy Soule</h4>
                                <p class="bookPrice">28€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary4 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row3">
                    <div class="filterDiv 30to50 00 d in me 4">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/primo.jpg" alt="">
                                <h3 class="title">Primo Victoria</h3>
                                <h4>Sabaton</h4>
                                <p class="bookPrice">15€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary0 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 00 d in me 3">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/attero.jpg" alt="">
                                <h3 class="title">Attero Dominatusk</h3>
                                <h4>Sabaton</h4>
                                <p class="bookPrice">17€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary1 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 00 c out me 3">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/metalizer.jpg" alt="">
                                <h3 class="title">Metalizer</h3>
                                <h4>Sabaton</h4>
                                <p class="bookPrice">16€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary2 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 00 c out me 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/theArt.jpg" alt="">
                                <h3 class="title">The Art of War</h3>
                                <h4>Sabaton</h4>
                                <p class="bookPrice">20€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary3 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 30to50 10 c in me 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/coat.jpg" alt="">
                                <h3 class="title">Coat of Arms</h3>
                                <h4>Sabaton</h4>
                                <p class="bookPrice">21€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary4 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row4">
                    <div class="filterDiv 30to50 90 vi in ro 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/nevermindMusic.jpg">
                                <h3 class="title">Nevermind</h3>
                                <h4>Nirvana</h4>
                                <p class="bookPrice">24€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary0 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 20to30 80 c out me 3">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/reignInBloodMusic.jpg" alt="">
                                <h3 class="title">Reign in Blood</h3>
                                <h4>Slayer</h4>
                                <p class="bookPrice">23€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary1 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 10to30 80 c in me 4">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/numberOfTheBeastMusic.jpg" alt="">
                                <h3 class="title">The Number of the Beast</h3>
                                <h4>Iron Maiden</h4>
                                <p class="bookPrice">66€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary2 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 30to50 90 vi in ro 4">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/useyourillusion2Music.jpg" alt="">
                                <h3 class="title">Use your Illusion II</h3>
                                <h4>Guns N’ Roses</h4>
                                <p class="bookPrice">26€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary3 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="filterDiv 30to50 80 v in me 5">
                        <div class="column0">
                            <a class="text" href="musicPage.html">
                                <img class="productImage" src="images/keeper1Music.jpg" alt="">
                                <h3 class="title">Keeper of the Seven Keys: Part I</h3>
                                <h4>Helloween</h4>
                                <p class="bookPrice">24€</p>
                            </a>
                            <div class="shop-item-details ">

                                <button class="btn btn-primary4 shop-item-button" type="button">ADD TO
                                    CART</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="background">
            <div class="l0">

            </div>

            <div class="l1">

            </div>

            <div class="l2">

            </div>

            <div class="l3">

            </div>

            <div class="l4">

            </div>
        </div>

        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">0€</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>

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

    function ready() {
        var removeCartItemButtons = document.getElementsByClassName('btn-danger')
        for (var i = 0; i < removeCartItemButtons.length; i++) {
            var button = removeCartItemButtons[i]
            button.addEventListener('click', removeCartItem)
        }

        var quantityInputs = document.getElementsByClassName('cart-quantity-input')
        for (var i = 0; i < quantityInputs.length; i++) {
            var input = quantityInputs[i]
            input.addEventListener('change', quantityChanged)
        }

        var addToCartButtons = document.getElementsByClassName('shop-item-button')
        for (var i = 0; i < addToCartButtons.length; i++) {
            var button = addToCartButtons[i]
            button.addEventListener('click', addToCartClicked)
        }

        document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
    }

    function purchaseClicked() {
        alert('Thank you for your purchase')
        var cartItems = document.getElementsByClassName('cart-items')[0]
        while (cartItems.hasChildNodes()) {
            cartItems.removeChild(cartItems.firstChild)
        }
        updateCartTotal()
    }

    function removeCartItem(event) {
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
        updateCartTotal()
    }

    function quantityChanged(event) {
        var input = event.target
        if (isNaN(input.value) || input.value <= 0) {
            input.value = 1
        }
        updateCartTotal()
    }

    function addToCartClicked(event) {
        var button = event.target
        var shopItem = button.parentElement.parentElement
        var title = shopItem.getElementsByClassName('title')[0].innerText
        var price = shopItem.getElementsByClassName('bookPrice')[0].innerText
        var imageSrc = shopItem.getElementsByClassName('productImage')[0].src
        addItemToCart(title, price, imageSrc)
        updateCartTotal()
    }

    function addItemToCart(title, price, imageSrc) {
        var cartRow = document.createElement('div')
        cartRow.classList.add('cart-row')
        var cartItems = document.getElementsByClassName('cart-items')[0]
        var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
        for (var i = 0; i < cartItemNames.length; i++) {
            if (cartItemNames[i].innerText == title) {
                alert('This item is already added to the cart')
                return
            }
        }
        var cartRowContents = `
    <div class="cart-item cart-column">
        <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
        <span class="cart-item-title">${title}</span>
    </div>
    <span class="cart-price cart-column">${price}</span>
    <div class="cart-quantity cart-column">
        <input class="cart-quantity-input" type="number" value="1">
        <button class="btn btn-danger" type="button">REMOVE</button>
    </div>`
        cartRow.innerHTML = cartRowContents
        cartItems.append(cartRow)
        cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
        cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
    }

    function updateCartTotal() {
        var cartItemContainer = document.getElementsByClassName('cart-items')[0]
        var cartRows = cartItemContainer.getElementsByClassName('cart-row')
        var total = 0
        for (var i = 0; i < cartRows.length; i++) {
            var cartRow = cartRows[i]
            var priceElement = cartRow.getElementsByClassName('cart-price')[0]
            var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
            var price = parseFloat(priceElement.innerText.replace('€', ''))
            var quantity = quantityElement.value
            total = total + (price * quantity)
        }

        document.getElementsByClassName('cart-total-price')[0].innerText = total + '€'
    }

</script>