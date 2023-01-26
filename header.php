<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop</title>
</head>

<html>

    <div class="header">

            <div class="header1">
                <img src="images/1200px-JRRT_logo.svg.png" alt="">
                <div class="upperLeft">
                    <a href="index.php" <?php if($page == "index") echo "class='active'"; ?>><i class="fas fa-home fa-lg"></i></a> &emsp;&emsp;
                    <a href="contact.html" <?php if($page == "contact") echo "class='active'"; ?>>Contact Us</a> &emsp;&emsp;
                    <a href="help.html" <?php if($page == "help") echo "class='active'"; ?>>Help</a>
                </div>
                <div class="h">
                    <h1>Name</h1>
                </div>
                <div class="upperRight">
                    <a href="stores.html <?php if($page == "stores") echo "class='active'"; ?>">Stores </a> &emsp;&emsp;
                    <a href="cart.html"><i class="fas fa-shopping-basket fa-lg"></i></a>&emsp;&emsp; 

                <?php
                    if (isset($_SESSION['userisadmin']) && $_SESSION['userisadmin'] === 1) {
                        if($page == "profile") 
                        {                     
                                echo '<a href="adminPage.php" class="active">Admin Panel</a>&emsp;&emsp;';
                                echo '<a href="includes/logout.inc.php">Log Out</a>';     
                        }            
                        else 
                        {
                                echo '<a href="adminPage.php">Admin Panel</a>&emsp;&emsp;';
                                echo '<a href="includes/logout.inc.php">Log Out</a>';  
                        }
                    }    

                    else if (isset($_SESSION['userisadmin']) && $_SESSION['userisadmin'] !== 1)
                    {
                        if($page == "profile") 
                        {                          
                            echo '<a href="profilePage.php" class="active">Profile Page</a>&emsp;&emsp;';
                            echo '<a href="includes/logout.inc.php">Log Out</a>';     
                            
                            
                        }
                        else 
                        {
                            echo '<a href="profilePage.php">Profile Page</a>&emsp;&emsp;';
                            echo '<a href="includes/logout.inc.php">Log Out</a>'; 
                        }
                            
                    }
                                        
                    else {
                        echo '<a href="NEW_register_login.php" >Sign Up</a>&emsp;&emsp;';
                        echo '<a href="NEW_login.php">Login</a>';
                    }
                ?>
					
                </div>
            </div>

            <div class="header2">

                <div class="bottomLeft">
                    <a href="books.html" <?php if($page == "books") echo "class='active'"; ?> >Books</a>
                    <a href="movies.html" <?php if($page == "movies") echo "class='active'"; ?>">Movies</a>
                    <a href="music.html" <?php if($page == "music") echo "class='active'"; ?>>Music</a>
                </div>
                <div class="search">
                    <form action="/action_page.php">
                        <input class="searchArray" type="text"
                            placeholder="Search for books by keyword / title / author" name="search">
                        <button type="submit">
                            <p>Search</p>
                        </button>
                    </form>
                </div>
                <div class="bottomRight">
                    <a href="wishlist.html">Wishlist</a>
                </div>
            </div>

    </div>
</html>