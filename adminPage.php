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

    $result = mysqli_query($conn, $query);

    $output = '<table>';
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $output .= '<tr>';
        $output .= '<td>' . $row['id'] . '</td>'; 
        $output .= '<td>' . $row['nazov'] . '</td>'; 
        $output .= '<td>' . $row['autor'] . '</td>';
        $output .= '<td>' . $row['cena'] . '</td>';
        $output .= '<td>' . $row['rating'] . '</td>';
        $output .= '<td>' . $row['description'] . '</td>';
        $output .= '</tr>';
    }
    $output .= '</table>';

?>

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



<div class="container">
            <div class="row col-md-6 col-md-offset-3">
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
                                <label for="description">Descritpion</label>
                                <input type="text" class="form-control"  name="description" />
                            </div>

                            <div class="formBtn">
                                <button type="submit" name="submit">ADD PRODUCT</button>
                            </div>
                            
                        </form>

        </div>
    </div>
</div>
         
<div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                <div class="panel-heading text-center">
                        <h1>Update Product</h1>
                    </div>     
<form action="includes/adminPage.inc.php" method="post">
<div class="form-group">
  <label for="id">Product ID:</label>
  <input type="text" id="id" name="id" required>
  </div>
  
  <div class="form-group">
  <label for="nazov">Product Name:</label>
  <input type="text" id="nazov" name="nazov" required>
  </div>

  <div class="form-group">
  <label for="img">Product Image:</label>
  <input type="text" id="img" name="img" required>
  </div>

  <div class="form-group">
  <label for="autor">Product Author:</label>
  <input type="text" id="autor" name="autor" required>
  </div>

  <div class="form-group">
  <label for="cena">Product Price:</label>
  <input type="text" id="cena" name="cena" required>
  </div>

  <div class="form-group">
  <label for="rating">Product Rating:</label>
  <input type="text" id="rating" name="rating" required>
  </div>

  <div class="form-group">
  <label for="description">Product Description:</label>
  <textarea id="description" name="description" required></textarea>
  </div>

  <div class="formBtn">
  <button type="submit" name="update">UPDATE PRODUCT</button>
  </div>    
</form>

</div>
    </div>
</div>
         

<?php
echo $output;
?>
    
        
</body>

</html>


