<?php

$page = "profile";
include 'header.php';

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        }
        
    }

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $query = "SELECT * FROM produkt";
    $resultprodukt = mysqli_query($conn, $query);

    $query = "SELECT * FROM users";
    $resultusers = mysqli_query($conn, $query);

    $query = "SELECT * FROM faq";
    $resultfaq = mysqli_query($conn, $query);

    $query = "SELECT * FROM contactMessage";
    $resultmessage = mysqli_query($conn, $query);
    

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
    <title>adminPage</title>
</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


<section class="forms">
    
    <div class="containerAdd">
        <div class="row col-md-12 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Add Product</h1>
                </div>       

                <form action="includes/adminPage.inc.php" method="post">
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
                        <label for="description">Descritpion</label> <br>
                        <textarea id="description" class="form-control" name="description" placeholder="to add new paragraph  write /p into text"></textarea>
                    </div>

                    <div class="formBtn">
                        <button type="submit" name="submit">ADD PRODUCT</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="containerUpdate">
        <div class="row col-md-12 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Update Product</h1>
                </div>     
                    <form action="includes/adminPage.inc.php" method="post">
                        <div class="form-group">
                                <label for="id">Product ID</label>
                                <input type="text" class="form-control" name="id" required>
                            </div>

                            <div class="form-group">
                                <label for="nazov">Product Name</label>
                                <input type="text" class="form-control" name="nazov">
                            </div>

                            <div class="form-group">
                                <label for="img">Product Image</label>
                                <input type="text" class="form-control" name="img">
                            </div>

                            <div class="form-group">
                                <label for="autor">Product Author</label>
                                <input type="text" class="form-control" name="autor">
                            </div>

                            <div class="form-group">
                                <label for="cena">Product Price</label>
                                <input type="text" class="form-control" name="cena">
                            </div>

                            <div class="form-group">
                                <label for="rating">Product Rating</label>
                                <input type="text" class="form-control" name="rating">
                            </div>

                            <div class="form-group">
                                <label for="description">Product Description</label><br>
                                <textarea id="description" class="form-control" name="description" placeholder="to add new paragraph  write /p into text"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="inStock">In Stock</label>
                                <input type="text" class="form-control" name="inStock">
                            </div>

                            <div class="formBtn">
                                <button type="submit" name="update">UPDATE PRODUCT</button>
                            </div>    
                    </form>

            </div>
        </div>
    </div>

    <div class="containerDelete">
        <div class="row col-md-12 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Delete Product</h1>
                </div>     
                    <form action="includes/adminPage.inc.php" method="post">
                        <div class="form-group">
                            <label for="id">Product ID</label>
                            <input type="text" class="form-control" name="id" required>
                        </div>

                        <div class="formBtn">
                            <button type="submit" name="delete">DELETE PRODUCT</button>
                        </div>    
                    </form>

            </div>
        </div>
    </div> 
</section>



<section class="tables">
<table class="adminTable">
    <h1>PRODUCTS</h1>
    <tr class="columnNames">
        <th>ID</th>
        <th>Nazov</th>
        <th>Autor</th>
        <th>Cena</th>
        <th>Rating</th>
        <th>Description</th>
        <th>In Stock</th>
    </tr>
    <?php 
        while ($row = mysqli_fetch_assoc($resultprodukt)) 
        {
            echo '<tr>';
            echo '<td class="id">' . $row['id'] . '</td>'; 
            echo '<td>' . $row['nazov'] . '</td>'; 
            echo '<td>' . $row['autor'] . '</td>';
            echo '<td>' . $row['cena'] . '</td>';
            echo '<td>' . $row['rating'] . '</td>';
            echo '<td>' . $row['description'] . '</td>';
            echo '<td>' . $row['inStock'] . '</td>';
            echo '</tr>';
        }
    ?>
</table>


<table class="adminTable">
    <h1>USERS</h1>
    <tr class="columnNames">
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Username</th>
    </tr>
    <?php 
        while ($row = mysqli_fetch_assoc($resultusers)) 
        {
            echo '<tr>';
            echo '<td class="id">' . $row['usersId'] . '</td>'; 
            echo '<td>' . $row['usersName'] . '</td>'; 
            echo '<td>' . $row['usersEmail'] . '</td>';
            echo '<td>' . $row['usersUid'] . '</td>';
            echo '</tr>';
        }
    ?>
</table>
    
<section class="forms">
    <div class="containerQuestionAdd">
        <div class="row col-md-12 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Add FAQ</h1>
                </div>       

                <form action="includes/adminPage.inc.php" method="post">
                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question" />
                    </div>

                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea id="description" class="form-control" name="answer"></textarea>
                    </div>

                    <div class="formBtn">
                        <button type="submit" name="faqAdd">ADD FAQ</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="containerQuestionDelete">
        <div class="row col-md-12 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Delete FAQ</h1>
                </div>       

                <form action="includes/adminPage.inc.php" method="post">
                    <div class="form-group">
                        <label for="id">FAQ ID</label>
                        <input type="text" class="form-control" name="id" required>
                    </div>

                    <div class="formBtn">
                        <button type="submit" name="faqDelete">DELETE FAQ</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<table class="adminTable">
    <h1>FAQ</h1>
    <tr class="columnNames">
        <th>ID</th>
        <th>Question</th>
        <th>Answer</th>
    </tr>
    <?php 
        while ($row = mysqli_fetch_assoc($resultfaq)) 
        {
            echo '<tr>';
            echo '<td class="id">' . $row['id'] . '</td>'; 
            echo '<td>' . $row['question'] . '</td>'; 
            echo '<td>' . $row['answer'] . '</td>';
            echo '</tr>';
        }
    ?>
</table>

<section class="forms">
    <div class="containerMessageDelete">
        <div class="row col-md-12 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Delete Message</h1>
                </div>       

                <form action="includes/adminPage.inc.php" method="post">
                    <div class="form-group">
                        <label for="id">Message ID</label>
                        <input type="text" class="form-control" name="id" required>
                    </div>

                    <div class="formBtn">
                        <button type="submit" name="messDelete">DELETE MESSAGE</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<table class="adminTable">
    <h1>MESSAGES</h1>
    <tr class="columnNames">
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    <?php 
        while ($row = mysqli_fetch_assoc($resultmessage)) 
        {
            echo '<tr>';
            echo '<td class="id">' . $row['id'] . '</td>'; 
            echo '<td>' . $row['name'] . '</td>'; 
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['message'] . '</td>';
            echo '</tr>';
        }
    ?>
</table>
</section>

        
</body>

</html>


