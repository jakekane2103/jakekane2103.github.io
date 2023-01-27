<?php

$page = "profile";
include 'header.php';
    
    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $query = "SELECT * FROM users where usersUid = '$_SESSION[useruid]'";

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        $name = '<td>' . $row['usersName'] . '</td>';
        $mail = '<td>' . $row['usersEmail'] . '</td>';
        $uid = '<td>' . $row['usersUid'] . '</td>';
    }

   
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="profilePage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<section class="all">
<section class="left">
    <div class="profileImg">
        <img src="images/profile.png" alt="">

        <div class="content">

        <?php
        echo $name;
        ?>
    
        </div>
    </div>
    
    

</section>

<section class="right">
<div class="userInfo">
    
    <div class="info">

    <h2>Full Name</h2>
        <div class="php">
            <?php
                echo $name;
            ?>
        </div>
        
    </div>
    <div class="info">
        <h2>Username</h2>
        
        <div class="php">
            <?php
                echo $uid;
            ?>
        </div>
        
    </div>

    <div class="info">
        <h2>Email</h2>
        <div class="php">
            <?php
                echo $mail;
            ?>
        </div>

    </div>
   
</div>


</section>


<section class="rightBot">
<div class="purchases">
<h2>Recent Purchases</h2>
</div>
</section>
</section>


    
        
</body>

</html>


<?php
mysqli_close($conn);
?>