<?php

$page = "login";
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    
    <link rel="stylesheet" href="register_log.css">

</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 



    <div class="back">



        <div class="container">
           
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>Log In</h1>
                    </div>
                    <div class="panel-body">
                        <form action="includes/login.inc.php" method="post">
                            <div class="form-group">
                                <label for="name">Username/Email</label>
                                <input type="text" class="form-control" name="uid" />
                            </div>
                      
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control"  name="pwd" />
                            </div>

                            <div class="formBtn">
                            <button type="submit" name="submit">Log In</button>
                            </div>

                        </form>
                    </div>
                </div>
        </div>

    </div>


        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login information!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords don't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
?>
        
</body>

</html>


