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
/*
    if(emptyInputProduct($nazov, $img, $autor, $cena, $rating, $description) !== false) {
        header("location: ../profilePage.php?error=emptyinput");
        exit();
    }
*/
    addProduct($conn, $nazov, $img, $autor, $cena, $rating, $description);
}
else {
    header("location: ../profilePage.php?error=none");
        exit();
}