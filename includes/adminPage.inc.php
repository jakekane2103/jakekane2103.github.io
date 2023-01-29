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

    updateProduct($conn, $id, $nazov, $img, $autor, $cena, $rating, $description);
}

if(isset($_POST["delete"])) {

    $id = $_POST["id"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(empty($id)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    if(!idExists($conn, $id)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }
    deleteProduct($conn, $id);
}

if(isset($_POST["faqAdd"])) {

    $question = $_POST["question"];
    $answer = $_POST["answer"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputFaq($question, $answer)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    
    addFaq($conn, $question, $answer);
}

if(isset($_POST["faqDelete"])) {

    $id = $_POST["id"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(empty($id)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    if(!idExistsFaq($conn, $id)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }
    deleteFaq($conn, $id);
}


else {
    header("location: ../adminPage.php?error=none");
        exit();
}