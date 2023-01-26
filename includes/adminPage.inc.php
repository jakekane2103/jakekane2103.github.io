<?php

if (isset($_POST["submit"])) {
   
    $nazov = $_POST["nazov"];
    $img = $_POST["img"];
    $autor = $_POST["autor"];
    $cena = $_POST["cena"];
    $rating = $_POST["rating"];
    $description = $_POST["description"];
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputProduct($nazov, $img, $autor, $cena, $rating, $description) !== false) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }

    addProduct($conn, $nazov, $img, $autor, $cena, $rating, $description);
}

if(isset($_POST["update"])) {
   
    $id = $_POST["id"];
    $nazov = $_POST["nazov"];
    $img = $_POST["img"];
    $autor = $_POST["autor"];
    $cena = $_POST["cena"];
    $rating = $_POST["rating"];
    $description = $_POST["description"];
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputProduct($id, $nazov, $img, $autor, $cena, $rating, $description) !== false) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }

    updateProduct($conn, $id, $nazov, $img, $autor, $cena, $rating, $description);
}

else {
    header("location: ../adminPage.php?error=none");
        exit();
}