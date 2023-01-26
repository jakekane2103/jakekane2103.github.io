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

$page = "profile";
include 'header.php';

?>


<div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>Add Product</h1>
                    </div>       
                        <form action="includes/profilePage.inc.php" method="post">
                            <div class="form-group">
                                <label for="nazov">Name</label>
                                <input type="text" class="form-control" name="nazov" />
                            </div>
                      
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="text" class="form-control" name="img" />
                            </div>

                            <div class="form-group">
                                <label for="autor">Author</label>
                                <input type="text" class="form-control"  name="autor" />
                            </div>
                            
                            <div class="form-group">
                                <label for="cena">Price</label>
                                <input type="text" class="form-control"  name="cena" />
                            </div>

                            <div class="form-group">
                                <label for="rating">Rating</label>
                                <input type="text" class="form-control"  name="rating" />
                            </div>

                            <div class="form-group">
                                <label for="description">Descritpion</label>
                                <input type="text" class="form-control"  name="description" />
                            </div>

                            <div class="formBtn">
                                <button type="submit" name="submit">ADD PRODUCT</button>
                            </div>
                            
                        </form>


<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        }
        
    }
?>

                   
        </div>
    </div>
</div>

    
        
</body>

</html>


