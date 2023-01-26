<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="register_log.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<?php

$page = "register";
include 'header.php';

?>

    <div class="back">



        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>Sign Up</h1>
                    </div>
                    <div class="panel-body">
                        <form action="includes/signup.inc.php" method="post">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                      
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" />
                            </div>

                            <div class="form-group">
                                <label for="uid">Username</label>
                                <input type="text" class="form-control"  name="uid" />
                            </div>
                            
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control"  name="pwd" />
                            </div>

                            <div class="form-group">
                                <label for="pwdrepeat">Repeat Password</label>
                                <input type="password" class="form-control"  name="pwdrepeat" />
                            </div>

                            <div class="formBtn">
                                <button type="submit" name="submit">Sign Up</button>
                            </div>
                            
                        </form>


<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
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

                    </div>

                </div>
            </div>
        </div>

    </div>

    
        
</body>

</html>


