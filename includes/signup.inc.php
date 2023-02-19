<?php
if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $address, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../NEW_register_login.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username) !== false) {
        header("location: ../NEW_register_login.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email) !== false) {
        header("location: ../NEW_register_login.php?error=emptyemail");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../NEW_register_login.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false) {
        header("location: ../NEW_register_login.php?error=usernametaken");
        exit();
    }
    createUser($conn, $name, $email, $address, $username, $pwd);
}
else{
    header("location: ../NEW_register_login.php");
    exit();
}