<?php
    $page = "contact";
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop: Contact Us</title>
</head>

<body>
    <section class="contactWhole">

        <div class="contactWhole1">
                
            <div class="container">
                <div class="row col-md-12 col-md-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h1>Contact Us</h1>
                        </div>       

                        <form action="includes/contact.inc.php" method="post">
                            <div class="form-group">
                                <label for="nazov">Your Full Name</label>
                                <input type="text" class="form-control" name="name" />
                            </div>

                            <div class="form-group">
                                <label for="img">Your Email</label>
                                <input type="text" class="form-control" name="email" />
                            </div>

                            <div class="form-group">
                                <label for="description">Your Message</label> <br>
                                <textarea id="description" class="form-control" name="message"></textarea>
                            </div>

                            <div class="formBtn">
                                <button type="submit" name="contact">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </section>


</body>

</html>