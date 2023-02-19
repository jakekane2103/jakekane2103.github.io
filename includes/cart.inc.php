<?php

/*-----------------------------*/
/*-------ADD TO CART BOOK------*/
/*-----------------------------*/

if(isset($_POST["addToCartBook"])) {

    $productId = $_POST["productId"];
    $userId = $_POST["userId"];
    $productType = $_POST["productType"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(alreadyInCart($conn, $productId, $productType) !== false){
        header("location: ../cart.php?error=alreadyInCart");
        echo 'Already in Cart';
        exit();
    }
    addToCartBook($conn, $productId, $userId, $productType);
}

if(isset($_POST["removeFromCart"])) {

    $productId = $_POST["productId"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    removeFromCart($conn, $productId);
}


/*-----------------------------*/
/*------ADD TO CART MOVIE------*/
/*-----------------------------*/

if(isset($_POST["addToCartMovie"])) {

    $productId = $_POST["productId"];
    $userId = $_POST["userId"];
    $productType = $_POST["productType"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    
     if(alreadyInCart($conn, $productId, $productType) == true){
        header("location: ../cart.php?error=alreadyInCart");
        
        
        echo 'Already in Cart';
        exit();
    }
    addToCartMovie($conn, $productId, $userId, $productType);
}


/*-----------------------------*/
/*------ADD TO CART MUSIC------*/
/*-----------------------------*/

if(isset($_POST["addToCartMusic"])) {

    $productId = $_POST["productId"];
    $userId = $_POST["userId"];
    $productType = $_POST["productType"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    
    if(alreadyInCart($conn, $productId, $productType) == true){
        header("location: ../cart.php?error=alreadyInCart");        
        echo 'Already in Cart';
        exit();
    }
    addToCartMusic($conn, $productId, $userId, $productType);
}


/*-----------------------------*/
/*------------ORDER------------*/
/*-----------------------------*/

if (isset($_POST["order"])) { 
    $userId = $_POST["userId"];
    $totalPrice = $_POST["totalPrice"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // Insert a new order into the orders table
    $orderId = addOrder($conn, $userId, $totalPrice);

    // Retrieve the product IDs from the products table
    $productIds = getCartProductIds($conn, $userId);
/*
    // Insert each product ID into the order_items table, associated with the new order ID
    foreach ($productIds as $productId) {
        echo "Product ID: " . $productId . "<br>";
        addOrderItem($conn, $orderId, $productId);
    }
*/

    // Delete the cart for the current user
    deleteCart($conn, $userId);

    // Redirect to the cart page with an order success message
    header("location: ../cart.php?order");
    exit();
}




else {
    header("location: ../adminPage.php?error=none");
        exit();
}

