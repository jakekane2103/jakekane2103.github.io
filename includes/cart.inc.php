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



if (isset($_POST["order"])) { 
    $userId = $_POST["userId"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    deleteCart($conn, $userId);
    header("Location: ../cart.php?orderSuccessful");
    exit();
}



else {
    header("location: ../adminPage.php?error=none");
        exit();
}

