<?php

if (isset($_POST["contact"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputMessage($name, $email, $message) !== false) {
        header("location: ../contact.php?error=emptyinput");
        exit();
    }

    sendMessage($conn, $name, $email, $message);
}