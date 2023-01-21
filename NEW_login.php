<?php

    session_start();

    //connect to the database
    $conn = mysqli_connect("localhost", "root", "", "rocnikovy");

    //get the form data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //query the database
    $query = "SELECT * FROM newregister WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    //check if there is a match
    if(mysqli_num_rows($result) == 1) {

        //login the user
        $_SESSION['email'] = $email;
        header("location: index.php");
    } else {
        //show an error message
        echo "Invalid email or password";
    }

    //close the connection
    $_SESSION['email'] = $email;
    mysqli_close($conn);
    }
    
    
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


<?php

$page = "login";
include 'header.php';

?>

    <div class="back">

        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>Login</h1>
                    </div>
                    <div class="panel-body">
                        <form action="NEW_login.php" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" />
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" />
                            </div>
                            <div>
                            <?php
                    	    if(isset($_SESSION['email'])){
								echo '<a href="logout.php" class="btn btn-primary">Logout </a>';
                     	    }

                     	   else{
					 	         echo '<input type="submit" class="btn btn-primary" value="Login" />'; 
                                
                     	   }                		
                             
						?>

                        <a href="NEW_register_login.php">Register Now!</a>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
          
        </div>

        
</body>

</html>


