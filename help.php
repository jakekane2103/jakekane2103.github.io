<?php
    $page = "help";
    include 'header.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $query = "SELECT * FROM faq";
    $resultfaq = mysqli_query($conn, $query);

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="help.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop: Help</title>
</head>

<body>

      
  <div class="help">
      <div class="help1">
        <h2>FAQs</h2>
        
        <?php 
            while ($row = mysqli_fetch_assoc($resultfaq)) 
            {
                echo '<button type="button" class="collapsible">
                ' . $row['question'] . '</button>';
                echo '<div class="content">'; 
                echo '<p>' . $row['answer'] . '</p>'; 
                echo '</div>';
            }
        ?>

      </div>
  </div>
        
        
  <script>
      var coll = document.getElementsByClassName("collapsible");
      var i;
      
      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.display === "block") {
            content.style.display = "none";
          } else {
            content.style.display = "block";
          }
        });
      }
  </script>
        
       
</body>

</html>