<?php
    $page = "wishlist";
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop: Wishlist</title>
</head>

<body>


    <section>
    
    <div class="Log">
        
        <p></p>
        <div class="logForm">
            <div class="login">
                
                <h2>Login</h2>
                <div class="contactForm">
                    <div class="eachForm">
                        
                        <form action="/action_page.php">
                            <input class="searchArray1" type="text" placeholder="Email" name="">
                            </button>
                        </form>
                    </div>

                    <div class="eachForm">
                        <form action="/action_page.php">
                            <input class="searchArray1" type="password" placeholder="Password" name="">
                            </button>
                        </form>
                    </div>
                    <a href="">Forgot Password?</a>

                </div>

                <div class="language0">

                    <div class="choices0">

                        <a href=""><input type="checkbox" id="" name="English" checked>
                            <label for="English">Show password</label></a> <br><br>
                        <a href=""><input type="checkbox" id="" name="French" checked>
                            <label for="French">Keep me signed in</label></a> <br>

                    </div>
                </div>

            </div>

            <div class="signUp">

                <h2>Sign Up</h2>
                <div class="contactForm1">
                    <div class="eachForm">
                        
                        <form action="/action_page.php">
                            <input class="searchArray1" type="text" placeholder="Name" name="">
                            </button>
                        </form>
                    </div>

                    <div class="eachForm1">
                        <form action="/action_page.php">
                            <input class="searchArray1" type="text" placeholder="Email" name="">
                            </button>
                        </form>
                    </div>

                    <div class="eachForm1">
                        <form action="/action_page.php">
                            <input class="searchArray1" type="password" placeholder="Password" name="">
                            </button>
                        </form>
                    </div>
                    <a href="">Forgot Password?</a>
                </div>

                <div class="language1">

                    <div class="choices1">

                        <a href=""><input type="checkbox" id="" name="English" checked>
                            <label for="English">Show password</label></a> <br>

                    </div>
                </div>


            </div>


        </div>

        <div class="bottomLeft1">
            <a href="">Login</a>&emsp;&emsp;
            <a href="">Create your Account</a>&emsp;&emsp;
        </div>
        <h1 class="warn">You need to Login/Sign Up first!</h1>
    </div>
</section>



</html>