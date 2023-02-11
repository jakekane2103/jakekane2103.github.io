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

    $query = "SELECT * FROM productbooks";
    $resultbook = mysqli_query($conn, $query);

    $query = "SELECT * FROM productmovies";
    $resultmovie = mysqli_query($conn, $query);

    $query = "SELECT * FROM productmusic
            JOIN band ON productmusic.bandId = band.bandId";
    $resultmusic = mysqli_query($conn, $query);

    $query = "SELECT * FROM band";
    $resultband = mysqli_query($conn, $query);

    $query = "SELECT * FROM bandmember
            JOIN band ON band.bandId = bandmember.bandId";
    $resultbandmember = mysqli_query($conn, $query);

       
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
    <link rel="stylesheet" href="register_log.css">
    <title>adminPage</title>
</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<div class="formBtn">
    <button id="bookForm">BOOKS</button>
    <button id="movieForm">MOVIES</button>
    <button id="musicForm">MUSIC</button>
    <button id="FAQForm">FAQ</button>
    <button id="messForm">MESSAGES</button>
    <button id="usersForm">USERS</button>
    
</div>

<div class="smallBtn">
    <button id="bandForm">BANDS</button>
    <button id="bandMemberForm">MEMBERS</button>
    <button id="songForm">SONGS</button>
</div>


<section class="forms">

    <div class="containerAdd" id="add">
        
        <div class="panel panel-primary">
                <form id="formBook1" action="includes/adminPage.inc.php" method="post">
               
                    <div class="panel-heading text-center">
                        <h1>Add Book Product</h1>
                    </div>       

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
                        <label for="pocetRating">Number of Ratings</label>
                        <input type="text" class="form-control"  name="pocetRating" />
                    </div>

                    <div class="form-group">
                        <label for="linkRating">Link Rating</label>
                        <input type="text" class="form-control"  name="linkRating" />
                    </div>

                    <div class="form-group">
                        <label for="description">Descritpion</label> <br>
                        <textarea id="description" class="form-control" name="description" placeholder="to add new paragraph  write /p into text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="pocetStran">Number of Pages</label>
                        <input type="text" class="form-control"  name="pocetStran" />
                    </div>

                    <div class="form-group">
                        <label for="year">Release Date</label>
                        <input type="date" class="form-control"  name="year" />
                    </div>

                    <div class="form-group">
                        <label for="format">Format</label>
                    </div>
                    <div class="form-groupOpt">
                        <label for="format" class="label">Hardback</label>
                        <input type="radio" class="form-control option" name="format" value="Hardback"/>
                        <label for="format" class="label">Paperback</label>
                        <input type="radio" class="form-control option" name="format" value="Paperback"/>
                    </div>

                    <div class="form-group">
                        <label for="inStock">Availability</label>
                    </div>
                    <div class="form-groupOpt">
                        <label for="inStock" class="label">In Stock</label>
                        <input type="radio" class="form-control option" name="inStock" value="1"/>
                        <label for="inStock" class="label">Out of Stock</label>
                        <input type="radio" class="form-control option" name="inStock" value="0"/>
                    </div>

                    <div class="form-group">
                        <label for="language">Language</label>
                    </div>
                    <div class="form-groupOpt">
                        <label for="language">English</label>
                        <input type="radio" class="form-control option" name="language" value="English"/>
                        <label for="language">French</label>
                        <input type="radio" class="form-control option" name="language" value="French"/>
                        <label for="language">German</label>
                        <input type="radio" class="form-control option" name="language" value="German"/>
                        <label for="language">Slovak</label>
                        <input type="radio" class="form-control option" name="language" value="Slovak"/>
                        <label for="language">Czech</label>
                        <input type="radio" class="form-control option" name="language" value="Czech"/>
                    </div>

                    <div class="form-group">
                        <label for="language">Genre</label>
                    </div>
                    <div class="form-groupCheck">
                        <div class="form-groupGenre">    
                            <label for="genre0" class="label">Adventure</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Adventure"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre1" class="label">Comedy</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Mystery"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre2" class="label">Fantasy</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Fantasy"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre3" class="label">Horror</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Horror"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre4" class="label">Manga</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Manga"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre5" class="label">Mystery</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Mystery"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre6" class="label">Romance</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Romance"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre7" class="label">Sci-Fi</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Sci-Fi"/>
                        </div>
                    </div>
                                 
                
                    <div class="formBtn">
                        <button type="submit" name="submit">ADD BOOK</button>
                    </div>

                </form>

                <form id="formMovie1" action="includes/adminPage.inc.php" method="post" style="display:none;">
               
                    <div class="panel-heading text-center">
                        <h1>Add Movie Product</h1>
                    </div>     

                    <div class="form-group">
                        <label for="nazov">Name</label>
                        <input type="text" class="form-control" name="nazov" />
                    </div>

                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="text" class="form-control" name="img" />
                    </div>

                    <div class="form-group">
                        <label for="autor">Director</label>
                        <input type="text" class="form-control"  name="director" />
                    </div>

                    <div class="form-group">
                        <label for="autor">Composer</label>
                        <input type="text" class="form-control"  name="composer" />
                    </div>

                    <div class="form-group">
                        <label for="cast0">Cast 1</label>
                        <input type="text" class="form-control"  name="cast0" />
                    </div>

                    <div class="form-group">
                        <label for="cast1">Cast 2</label>
                        <input type="text" class="form-control"  name="cast1" />
                    </div>

                    <div class="form-group">
                        <label for="cast2">Cast 3</label>
                        <input type="text" class="form-control"  name="cast2" />
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
                        <label for="pocetRating">Number of Ratings</label>
                        <input type="text" class="form-control"  name="pocetRating" />
                    </div>

                    <div class="form-group">
                        <label for="linkRating">Link Rating</label>
                        <input type="text" class="form-control"  name="linkRating" />
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label> <br>
                        <textarea id="description" class="form-control" name="description" placeholder="to add new paragraph  write /p into text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="length">Length</label>
                        <input type="text" class="form-control"  name="length" />
                    </div>

                    <div class="form-group">
                        <label for="length">Release Date</label>
                        <input type="text" class="form-control"  name="year" />
                    </div>

                    <div class="form-group">
                        <label for="format">Format</label>
                    </div>
                    <div class="form-groupOpt">
                        <input type="radio" class="form-control option" name="format" value="dvd"/>
                        <label for="format">DVD</label>
                        <input type="radio" class="form-control option" name="format" value="blue-ray"/>
                        <label for="format">Blue-ray</label>
                        <input type="radio" class="form-control option" name="format" value="digital"/>
                        <label for="format">Digital</label>
                    </div>

                    <div class="form-group">
                        <label for="inStock">Availability</label>
                    </div>
                    <div class="form-groupOpt">
                        <input type="radio" class="form-control option" name="inStock" value="1"/>
                        <label for="inStock">In Stock</label>
                        <input type="radio" class="form-control option" name="inStock" value="0"/>
                        <label for="inStock">Out of Stock</label>
                    </div>

                    <div class="form-group">
                        <label for="language">Audio</label>
                    </div>
                    <div class="form-groupOpt">
                        <input type="radio" class="form-control option" name="audio" value="English"/>
                        <label for="audio">English</label>
                        <input type="radio" class="form-control option" name="audio" value="French"/>
                        <label for="audio">French</label>
                        <input type="radio" class="form-control option" name="audio" value="German"/>
                        <label for="audio">German</label>
                        <input type="radio" class="form-control option" name="audio" value="Slovak"/>
                        <label for="audio">Slovak</label>
                        <input type="radio" class="form-control option" name="audio" value="Czech"/>
                        <label for="audio">Czech</label>
                    </div>

                    <div class="form-group">
                        <label for="age">Age Restriction</label>
                    </div>
                    <div class="form-groupOpt">
                        <input type="radio" class="form-control option" name="age" value="G"/>
                        <label for="age">G</label>
                        <input type="radio" class="form-control option" name="age" value="PG"/>
                        <label for="age">PG</label>
                        <input type="radio" class="form-control option" name="age" value="PG-13"/>
                        <label for="age">PG-13</label>
                        <input type="radio" class="form-control option" name="age" value="R"/>
                        <label for="age">R</label>
                        <input type="radio" class="form-control option" name="age" value="NC-17"/>
                        <label for="age">NC-17</label>
                    </div>

                    <div class="form-group">
                        <label for="language">Genre</label>
                    </div>
                    <div class="form-groupCheck">
                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Action"/>
                            <label for="genre0" class="label">Action</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Adventure"/>
                            <label for="genre0" class="label">Adventure</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Anime"/>
                            <label for="genre4" class="label">Anime</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Cartoon"/>
                            <label for="genre1" class="label">Cartoon</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Comedy"/>
                            <label for="genre1" class="label">Comedy</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Drama"/>
                            <label for="genre1" class="label">Drama</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Fantasy"/>
                            <label for="genre2" class="label">Fantasy</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Horror"/>
                            <label for="genre3" class="label">Horror</label>
                        </div>
                        
                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Mystery"/>
                            <label for="genre5" class="label">Mystery</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Romance"/>
                            <label for="genre6" class="label">Romance</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Sci-Fi"/>
                            <label for="genre7" class="label">Sci-Fi</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Western"/>
                            <label for="genre7" class="label">Western</label>
                        </div>
                    </div>
                                 
                
                    <div class="formBtn">
                        <button type="submit" name="submitMovie">ADD MOVIE</button>
                    </div>

                </form>

                <form id="formMusic1" action="includes/adminPage.inc.php" method="post" style="display:none;">
               
                    <div class="panel-heading text-center">
                        <h1>Add Music Product</h1>
                    </div>       

                    <div class="form-group">
                        <label for="albumName">Album Name</label>
                        <input type="text" class="form-control" name="albumName" />
                    </div>

                    <div class="form-group">
                        <label for="albumImg">Album Image</label>
                        <input type="text" class="form-control" name="albumImg" />
                    </div>

                    <div class="form-group">
                        <label for="language">Genre</label>
                    </div>
                    <div class="form-groupCheck">
                        <div class="form-groupGenre">    
                            <label for="genre1" class="label">Country</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="Country"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre1" class="label">Metal</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="Metal"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre1" class="label">OST</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="OST"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre7" class="label">Pop</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="Pop"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre6" class="label">Rap</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="Rap"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre6" class="label">Rock</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="Rock"/>
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <label for="bandID">Band ID</label>
                        <input type="text" class="form-control"  name="bandId" />
                    </div>

                    <div class="form-group">
                        <label for="cena">Format</label>
                            <div class="form-groupOpt">
                                <label for="format" class="label">Vinyl</label>
                                <input type="radio" class="form-control option" name="format" value="Vinyl"/>
                                <label for="format" class="label">CD</label>
                                <input type="radio" class="form-control option" name="format" value="CD"/>
                                <label for="format" class="label">Digital</label>
                                <input type="radio" class="form-control option" name="format" value="Digital"/>
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control"  name="price" />
                    </div>

                    <div class="form-group">
                        <label for="pocetRating">Length</label>
                        <input type="length" class="form-control"  name="length" />
                    </div>

                    <div class="form-group">
                        <label for="releaseDate">Release Date</label>
                        <input type="date" class="form-control"  name="releaseDate" />
                    </div>

                    <div class="form-group">
                        <label for="recordLabel">Record Label</label> 
                        <input type="text" class="form-control"  name="recordLabel" />
                    </div>

                    <div class="form-group">
                        <label for="recordChart">Record Chart</label>
                        <input type="text" class="form-control"  name="recordChart" />
                    </div>

                    <div class="form-group">
                        <label for="inStock">Availability</label>
                    </div>
                    <div class="form-groupOpt">
                        <label for="inStock" class="label">In Stock</label>
                        <input type="radio" class="form-control option" name="inStock" value="1"/>
                        <label for="inStock" class="label">Out of Stock</label>
                        <input type="radio" class="form-control option" name="inStock" value="0"/>
                    </div>                             
                
                    <div class="formBtn">
                        <button type="submit" name="submitMusic">ADD ALBUM</button>
                    </div>

                </form>

                <form id="formBand1" action="includes/adminPage.inc.php" method="post" style="display:none;">
               
                    <div class="panel-heading text-center">
                        <h1>Add Band</h1>
                    </div>       

                    <div class="form-group">
                        <label for="albumName">Band Name</label>
                        <input type="text" class="form-control" name="bandName" />
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Band Formed In (Year)</label>
                        <input type="text" class="form-control"  name="bandFormed" />
                    </div>

                    <div class="form-group">
                        <label for="pocetRating">Band Country</label>
                        <input type="text" class="form-control"  name="bandCountry" />
                    </div>

                                                
                
                    <div class="formBtn">
                        <button type="submit" name="submitBand">ADD BAND</button>
                    </div>

                </form>

                <form id="formBandMember1" action="includes/adminPage.inc.php" method="post" style="display:none;">
               
                    <div class="panel-heading text-center">
                        <h1>Add Band Member</h1>
                    </div>       

                    <div class="form-group">
                        <label for="albumName">Band Member Name</label>
                        <input type="text" class="form-control" name="bandMemberName" />
                    </div>
                    
                    <div class="form-group">
                        <label for="language">Role</label>
                    </div>
                    <div class="form-groupCheck">
                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Vocals"/>
                            <label for="genre0" class="label">Vocals</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Backing Vocals"/>
                            <label for="genre0" class="label">Backing Vocals</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Lead Guitar"/>
                            <label for="genre4" class="label">Lead Guitar</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Rhytm Guitar"/>
                            <label for="genre1" class="label">Rhytm Guitar</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Bass"/>
                            <label for="genre1" class="label">Bass</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Drums"/>
                            <label for="genre1" class="label">Drums</label>
                        </div>

                      </div>

                    <div class="form-group">
                        <label for="pocetRating">Band ID</label>
                        <input type="text" class="form-control"  name="bandId" />
                    </div>                                              
                
                    <div class="formBtn">
                        <button type="submit" name="submitBandMember">ADD BAND MEMBER</button>
                    </div>

                </form>

                <form id="formSong1" action="includes/adminPage.inc.php" method="post" style="display:none;">
               
                    <div class="panel-heading text-center">
                        <h1>Add Song</h1>
                    </div>       

                    <div class="form-group">
                        <label for="albumName">Song Number</label>
                        <input type="text" class="form-control" name="songNumber" />
                    </div>

                    <div class="form-group">
                        <label for="albumName">Song Name</label>
                        <input type="text" class="form-control" name="songName" />
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Song Length</label>
                        <input type="text" class="form-control"  name="songLength" />
                    </div>

                    <div class="form-group">
                        <label for="pocetRating">Album ID</label>
                        <input type="length" class="form-control"  name="albumId" />
                    </div>
                
                    <div class="formBtn">
                        <button type="submit" name="submitSong">ADD SONG</button>
                    </div>

                </form>

                <form id="formFAQ1" action="includes/adminPage.inc.php" method="post" style="display:none;">
                    <div class="panel-heading text-center">
                        <h1>Add FAQ</h1>
                    </div>       
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


    <div class="containerUpdate" id="update">
        
        <div class="panel panel-primary">
                
            <form id="formBook2" action="includes/adminPage.inc.php" method="post">
                
                    <div class="panel-heading text-center">
                        <h1>Update Book Product</h1>
                    </div>     

                    <div class="form-group">
                        <label for="id">Book ID</label>
                        <input type="text" class="form-control" name="id" required>
                    </div>

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
                        <label for="pocetRating">Number of Ratings</label>
                        <input type="text" class="form-control"  name="pocetRating" />
                    </div>

                    <div class="form-group">
                        <label for="linkRating">Link Rating</label>
                        <input type="text" class="form-control"  name="linkRating" />
                    </div>

                    <div class="form-group">
                        <label for="description">Descritpion</label> <br>
                        <textarea id="description" class="form-control" name="description" placeholder="to add new paragraph  write /p into text"></textarea>
                    </div>
                  
                    <div class="form-group">
                        <label for="pocetStran">Number of Pages</label>
                        <input type="text" class="form-control"  name="pocetStran" />
                    </div>

                    <div class="form-group">
                        <label for="year">Release Date</label>
                        <input type="date" class="form-control"  name="year" />
                    </div>

                    <div class="form-group">
                        <label for="format">Format</label>
                    </div>
                    <div class="form-groupOpt">
                        <label for="format" class="label">Hardback</label>
                        <input type="radio" class="form-control option" name="format" value="Hardback"/>
                        <label for="format" class="label">Paperback</label>
                        <input type="radio" class="form-control option" name="format" value="Paperback"/>
                    </div>

                    <div class="form-group">
                        <label for="inStock">Availability</label>
                    </div>
                    <div class="form-groupOpt">
                        <label for="inStock" class="label">In Stock</label>
                        <input type="radio" class="form-control option" name="inStock" value="1"/>
                        <label for="inStock" class="label">Out of Stock</label>
                        <input type="radio" class="form-control option" name="inStock" value="0"/>
                    </div>

                    <div class="form-group">
                        <label for="language">Language</label>
                    </div>
                    <div class="form-groupOpt">
                        <label for="language">English</label>
                        <input type="radio" class="form-control option" name="language" value="English"/>
                        <label for="language">French</label>
                        <input type="radio" class="form-control option" name="language" value="French"/>
                        <label for="language">German</label>
                        <input type="radio" class="form-control option" name="language" value="German"/>
                        <label for="language">Slovak</label>
                        <input type="radio" class="form-control option" name="language" value="Slovak"/>
                        <label for="language">Czech</label>
                        <input type="radio" class="form-control option" name="language" value="Czech"/>
                    </div>

                    <div class="form-group">
                        <label for="language">Genre</label>
                    </div>
                    <div class="form-groupCheck">
                        <div class="form-groupGenre">    
                            <label for="genre0" class="label">Adventure</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Adventure"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre1" class="label">Comedy</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Mystery"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre2" class="label">Fantasy</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Fantasy"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre3" class="label">Horror</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Horror"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre4" class="label">Manga</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Manga"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre5" class="label">Mystery</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Mystery"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre6" class="label">Romance</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Romance"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre7" class="label">Sci-Fi</label>
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Sci-Fi"/>
                        </div>
                    </div>
                            

                <div class="formBtn">
                    <button type="submit" name="update">UPDATE BOOK</button>
                </div>    
            </form>

            <form id="formMovie2" action="includes/adminPage.inc.php" method="post" style="display:none;">
           
                    <div class="panel-heading text-center">
                        <h1>Update Movie Product</h1>
                    </div>    

                    <div class="form-group">
                        <label for="id">Movie ID</label>
                        <input type="text" class="form-control" name="id" required>
                    </div>

                    <div class="form-group">
                        <label for="nazov">Name</label>
                        <input type="text" class="form-control" name="nazov" />
                    </div>

                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="text" class="form-control" name="img" />
                    </div>

                    <div class="form-group">
                        <label for="autor">Director</label>
                        <input type="text" class="form-control"  name="director" />
                    </div>

                    <div class="form-group">
                        <label for="autor">Composer</label>
                        <input type="text" class="form-control"  name="composer" />
                    </div>

                    <div class="form-group">
                        <label for="cast0">Cast 1</label>
                        <input type="text" class="form-control"  name="cast0" />
                    </div>

                    <div class="form-group">
                        <label for="cast1">Cast 2</label>
                        <input type="text" class="form-control"  name="cast1" />
                    </div>

                    <div class="form-group">
                        <label for="cast2">Cast 3</label>
                        <input type="text" class="form-control"  name="cast2" />
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
                        <label for="pocetRating">Number of Ratings</label>
                        <input type="text" class="form-control"  name="pocetRating" />
                    </div>

                    <div class="form-group">
                        <label for="linkRating">Link Rating</label>
                        <input type="text" class="form-control"  name="linkRating" />
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label> <br>
                        <textarea id="description" class="form-control" name="description" placeholder="to add new paragraph  write /p into text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="length">Length</label>
                        <input type="text" class="form-control"  name="length" />
                    </div>

                    <div class="form-group">
                        <label for="length">Release Date</label>
                        <input type="text" class="form-control"  name="year" />
                    </div>

                    <div class="form-group">
                        <label for="format">Format</label>
                    </div>
                    <div class="form-groupOpt">
                        <input type="radio" class="form-control option" name="format" value="dvd"/>
                        <label for="format">DVD</label>
                        <input type="radio" class="form-control option" name="format" value="blue-ray"/>
                        <label for="format">Blue-ray</label>
                        <input type="radio" class="form-control option" name="format" value="digital"/>
                        <label for="format">Digital</label>
                    </div>

                    <div class="form-group">
                        <label for="inStock">Availability</label>
                    </div>
                    <div class="form-groupOpt">
                        <input type="radio" class="form-control option" name="inStock" value="1"/>
                        <label for="inStock">In Stock</label>
                        <input type="radio" class="form-control option" name="inStock" value="0"/>
                        <label for="inStock">Out of Stock</label>
                    </div>

                    <div class="form-group">
                        <label for="language">Audio</label>
                    </div>
                    <div class="form-groupOpt">
                        <input type="radio" class="form-control option" name="audio" value="English"/>
                        <label for="audio">English</label>
                        <input type="radio" class="form-control option" name="audio" value="French"/>
                        <label for="audio">French</label>
                        <input type="radio" class="form-control option" name="audio" value="German"/>
                        <label for="audio">German</label>
                        <input type="radio" class="form-control option" name="audio" value="Slovak"/>
                        <label for="audio">Slovak</label>
                        <input type="radio" class="form-control option" name="audio" value="Czech"/>
                        <label for="audio">Czech</label>
                    </div>

                    <div class="form-group">
                        <label for="age">Age Restriction</label>
                    </div>
                    <div class="form-groupOpt">
                        <input type="radio" class="form-control option" name="age" value="G"/>
                        <label for="age">G</label>
                        <input type="radio" class="form-control option" name="age" value="PG"/>
                        <label for="age">PG</label>
                        <input type="radio" class="form-control option" name="age" value="PG-13"/>
                        <label for="age">PG-13</label>
                        <input type="radio" class="form-control option" name="age" value="R"/>
                        <label for="age">R</label>
                        <input type="radio" class="form-control option" name="age" value="NC-17"/>
                        <label for="age">NC-17</label>
                    </div>

                    <div class="form-group">
                        <label for="language">Genre</label>
                    </div>
                    <div class="form-groupCheck">
                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Action"/>
                            <label for="genre0" class="label">Action</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Adventure"/>
                            <label for="genre0" class="label">Adventure</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Anime"/>
                            <label for="genre4" class="label">Anime</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Cartoon"/>
                            <label for="genre1" class="label">Cartoon</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Comedy"/>
                            <label for="genre1" class="label">Comedy</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Drama"/>
                            <label for="genre1" class="label">Drama</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Fantasy"/>
                            <label for="genre2" class="label">Fantasy</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Horror"/>
                            <label for="genre3" class="label">Horror</label>
                        </div>
                        
                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Mystery"/>
                            <label for="genre5" class="label">Mystery</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Romance"/>
                            <label for="genre6" class="label">Romance</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Sci-Fi"/>
                            <label for="genre7" class="label">Sci-Fi</label>
                        </div>

                        <div class="form-groupGenre">    
                            <input type="checkbox" class="form-control checkbox" name="genre[]" value="Western"/>
                            <label for="genre7" class="label">Western</label>
                        </div>
                    </div>
                                

                <div class="formBtn">
                    <button type="submit" name="updateMovie">UPDATE MOVIE</button>
                </div>    
            </form>

            <form id="formMusic2" action="includes/adminPage.inc.php" method="post" style="display:none;">
               
                    <div class="panel-heading text-center">
                        <h1>Update Music Product</h1>
                    </div>       

                    <div class="form-group">
                        <label for="albumName">Album ID</label>
                        <input type="text" class="form-control" name="id" />
                    </div>

                    <div class="form-group">
                        <label for="albumName">Album Name</label>
                        <input type="text" class="form-control" name="albumName" />
                    </div>

                    <div class="form-group">
                        <label for="albumImg">Album Image</label>
                        <input type="text" class="form-control" name="albumImg" />
                    </div>

                    <div class="form-group">
                        <label for="language">Genre</label>
                    </div>
                    <div class="form-groupCheck">
                        <div class="form-groupGenre">    
                            <label for="genre1" class="label">Country</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="Metal"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre1" class="label">Metal</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="Metal"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre1" class="label">OST</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="OST"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre7" class="label">Pop</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="Pop"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre6" class="label">Rap</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="Rap"/>
                        </div>
                        <div class="form-groupGenre">    
                            <label for="genre6" class="label">Rock</label>
                            <input type="radio" class="form-control checkbox" name="genre" value="Rock"/>
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <label for="bandID">Band ID</label>
                        <input type="text" class="form-control"  name="bandId" />
                    </div>

                    <div class="form-group">
                        <label for="cena">Format</label>
                            <div class="form-groupOpt">
                                <label for="format" class="label">Vinyl</label>
                                <input type="radio" class="form-control option" name="format" value="Vinyl"/>
                                <label for="format" class="label">CD</label>
                                <input type="radio" class="form-control option" name="format" value="CD"/>
                                <label for="format" class="label">Digital</label>
                                <input type="radio" class="form-control option" name="format" value="Digital"/>
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control"  name="price" />
                    </div>

                    <div class="form-group">
                        <label for="pocetRating">Length</label>
                        <input type="length" class="form-control"  name="length" />
                    </div>

                    <div class="form-group">
                        <label for="releaseDate">Release Date</label>
                        <input type="date" class="form-control"  name="releaseDate" />
                    </div>

                    <div class="form-group">
                        <label for="recordLabel">Record Label</label> 
                        <input type="text" class="form-control"  name="recordLabel" />
                    </div>

                    <div class="form-group">
                        <label for="recordChart">Record Chart</label>
                        <input type="text" class="form-control"  name="recordChart" />
                    </div>

                    <div class="form-group">
                        <label for="inStock">Availability</label>
                    </div>
                    <div class="form-groupOpt">
                        <label for="inStock" class="label">In Stock</label>
                        <input type="radio" class="form-control option" name="inStock" value="1"/>
                        <label for="inStock" class="label">Out of Stock</label>
                        <input type="radio" class="form-control option" name="inStock" value="0"/>
                    </div>                             
                
                    <div class="formBtn">
                        <button type="submit" name="updateMusic">UPDATE ALBUM</button>
                    </div>

                </form>

              <form id="formBand2" action="includes/adminPage.inc.php" method="post" style="display:none;">
          
               
                    <div class="panel-heading text-center">
                        <h1>Update Band</h1>
                    </div>       

                    <div class="form-group">
                        <label for="bandID">Band ID</label>
                        <input type="text" class="form-control" name="bandId" />
                    </div>

                    <div class="form-group">
                        <label for="albumName">Band Name</label>
                        <input type="text" class="form-control" name="bandName" />
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Band Formed In (Year)</label>
                        <input type="text" class="form-control"  name="bandFormed" />
                    </div>

                    <div class="form-group">
                        <label for="pocetRating">Band Country</label>
                        <input type="length" class="form-control"  name="bandCountry" />
                    </div>                      
                
                    <div class="formBtn">
                        <button type="submit" name="updateBand">UPDATE BAND</button>
                    </div>

            </form>

            <form id="formBandMember2" action="includes/adminPage.inc.php" method="post" style="display:none;">
               
               <div class="panel-heading text-center">
                   <h1>Update Band Member</h1>
               </div>       

               <div class="form-group">
                   <label for="bandMemberId">Band Member ID</label>
                   <input type="text" class="form-control" name="bandMemberId" />
               </div>

               <div class="form-group">
                   <label for="bandMemberName">Band Member Name</label>
                   <input type="text" class="form-control" name="bandMemberName" />
               </div>
               
               <div class="form-group">
                   <label for="language">Role</label>
               </div>
               <div class="form-groupCheck">
                   <div class="form-groupGenre">    
                       <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Vocals"/>
                       <label for="genre0" class="label">Vocals</label>
                   </div>

                   <div class="form-groupGenre">    
                       <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Backing Vocals"/>
                       <label for="genre0" class="label">Backing Vocals</label>
                   </div>

                   <div class="form-groupGenre">    
                       <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Lead Guitar"/>
                       <label for="genre4" class="label">Lead Guitar</label>
                   </div>

                   <div class="form-groupGenre">    
                       <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Rhytm Guitar"/>
                       <label for="genre1" class="label">Rhytm Guitar</label>
                   </div>

                   <div class="form-groupGenre">    
                       <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Bass"/>
                       <label for="genre1" class="label">Bass</label>
                   </div>

                   <div class="form-groupGenre">    
                       <input type="checkbox" class="form-control checkbox" name="bandMemberRole[]" value="Drums"/>
                       <label for="genre1" class="label">Drums</label>
                   </div>

                 </div>

               <div class="form-group">
                   <label for="pocetRating">Band ID</label>
                   <input type="length" class="form-control"  name="bandId" />
               </div>                                              
           
               <div class="formBtn">
                   <button type="submit" name="updateBandMember">UPDATE BAND MEMBER</button>
               </div>

           </form>

           <form id="formSong2" action="includes/adminPage.inc.php" method="post" style="display:none;">
               
               <div class="panel-heading text-center">
                   <h1>Update Song</h1>
               </div>       

               <div class="form-group">
                   <label for="albumName">Song ID</label>
                   <input type="text" class="form-control" name="songId" />
               </div>

               <div class="form-group">
                   <label for="albumName">Song Number</label>
                   <input type="text" class="form-control" name="songNumber" />
               </div>

               <div class="form-group">
                   <label for="albumName">Song Name</label>
                   <input type="text" class="form-control" name="songName" />
               </div>
               
               <div class="form-group">
                   <label for="price">Song Length</label>
                   <input type="text" class="form-control"  name="songLength" />
               </div>

               <div class="form-group">
                   <label for="pocetRating">Album ID</label>
                   <input type="length" class="form-control"  name="albumId" />
               </div>
           
               <div class="formBtn">
                   <button type="submit" name="updateSong">UPDATE SONG</button>
               </div>

           </form>
        </div> 
        
    </div>

    <div class="containerDelete" id="delete">
        
        <div class="panel panel-primary">
                   
            <form id="formBook3" action="includes/adminPage.inc.php" method="post" >
                        <div class="panel-heading text-center">
                            <h1>Delete Book Product</h1>
                        </div>  

                        <div class="form-group">
                            <label for="id">Book ID</label>
                            <input type="text" class="form-control" name="id" required>
                        </div>

                        <div class="formBtn">
                            <button type="submit" name="delete">DELETE BOOK</button>
                        </div>    
            </form>

            <form id="formMovie3" action="includes/adminPage.inc.php" method="post" style="display:none;">
                        <div class="panel-heading text-center">
                            <h1>Delete Movie Product</h1>
                        </div>  


                        <div class="form-group">
                            <label for="id">Movie ID</label>
                            <input type="text" class="form-control" name="id" required>
                        </div>

                        <div class="formBtn">
                            <button type="submit" name="deleteMovie">DELETE MOVIE</button>
                        </div>    
            </form>

            <form id="formMusic3" action="includes/adminPage.inc.php" method="post" style="display:none;">
                        <div class="panel-heading text-center">
                            <h1>Delete Music Product</h1>
                        </div>  


                        <div class="form-group">
                            <label for="id">Album ID</label>
                            <input type="text" class="form-control" name="id" required>
                        </div>

                        <div class="formBtn">
                            <button type="submit" name="deleteMusic">DELETE ALBUM</button>
                        </div>    
            </form>

            <form id="formBand3" action="includes/adminPage.inc.php" method="post" style="display:none;">
                        <div class="panel-heading text-center">
                            <h1>Delete Band</h1>
                        </div>  


                        <div class="form-group">
                            <label for="id">Band ID</label>
                            <input type="text" class="form-control" name="bandId" required>
                        </div>

                        <div class="formBtn">
                            <button onclick="confirmDelete()" type="submit" name="deleteBand">DELETE BAND</button>
                        </div>    
            </form>

            <form id="formBandMember3" action="includes/adminPage.inc.php" method="post" style="display:none;">
                        <div class="panel-heading text-center">
                            <h1>Delete Band Member</h1>
                        </div>  


                        <div class="form-group">
                            <label for="id">Band Member ID</label>
                            <input type="text" class="form-control" name="bandMemberId" required>
                        </div>

                        <div class="formBtn">
                            <button type="submit" name="deleteBandMember">DELETE BAND MEMBER</button>
                        </div>    
            </form>

            <form id="formSong3" action="includes/adminPage.inc.php" method="post" style="display:none;">
               
               <div class="panel-heading text-center">
                   <h1>Delete Song</h1>
               </div>       

               <div class="form-group">
                   <label for="albumName">Song ID</label>
                   <input type="text" class="form-control" name="songId" />
               </div>

               <div class="formBtn">
                   <button type="submit" name="deleteSong">DELETE SONG</button>
               </div>

           </form>

            <form id="formFAQ3" action="includes/adminPage.inc.php" method="post" style="display:none;">
                        <div class="panel-heading text-center">
                            <h1>Delete FAQ</h1>
                        </div>  

                        <div class="form-group">
                            <label for="id">FAQ ID</label>
                            <input type="text" class="form-control" name="id" required>
                        </div>

                        <div class="formBtn">
                            <button type="submit" name="faqDelete">DELETE FAQ</button>
                        </div>
            </form>
            
            <form id="formMess3" action="includes/adminPage.inc.php" method="post" style="display:none;">
                <div class="panel-heading text-center">
                    <h1>Delete Message</h1>
                </div>       
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
</section>



<section class="tables">

    <div id="tableBooks">
        <table class="adminTable">
            <h1>PRODUCTS BOOKS</h1>
            <tr class="columnNames">
                <th>ID</th>
                <th>NAME</th>
                <th>AUTHOR</th>
                <th>PRICE</th>
                <th>RATING</th>
                <th>NUMBER OF RATINGS</th>
                <th>PAGES</th>
                <th>YEAR</th>
                <th>FORMAT</th>
                <th>LANGUAGE</th>
                <th>GENRE</th>
                <th>DESCRIPTION</th>
                <th>IN STOCK</th>
            </tr>
            <?php 
                while ($row = mysqli_fetch_assoc($resultbook)) 
                {
                    echo '<tr>';
                    echo '<td class="id">' . $row['id'] . '</td>'; 
                    echo '<td style="white-space: nowrap;">' . $row['nazov'] . '</td>'; 
                    echo '<td style="white-space: nowrap;">' . $row['autor'] . '</td>';
                    echo '<td>' . $row['cena'] . '</td>';
                    echo '<td>' . $row['rating'] . '</td>';
                    echo '<td>' . $row['pocetRating'] . '</td>';
                    echo '<td>' . $row['pocetStran'] . '</td>';
                    echo '<td>' . $row['year'] . '</td>';
                    echo '<td>' . $row['format'] . '</td>';
                    echo '<td>' . $row['language'] . '</td>';
                    $genre = explode(" ", $row['genre']);        
                    foreach($genre as $g) {
                        echo '<td>' .  $g . '</td>';
                    } 
                    $description = $row['description'];
                    $lastSpace = strrpos(substr($description, 0, 80), ' ');
                    echo '<td>' . substr($description, 0, $lastSpace) . '...</td>';
                    echo '<td>' . $row['inStock'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>    
    </div>

    <div id="tableMovies" style="display:none; overflow-x: scroll;">
        <table class="adminTable">
            <h1>PRODUCTS MOVIES</h1>
            <tr class="columnNames">
                <th>ID</th>
                <th>NAME</th>
                <th>DIRECTOR</th>
                <th>COMPOSER</th>
                <th>CAST 1</th>
                <th>CAST 2</th>
                <th>CAST 3</th>
                <th>PRICE</th>
                <th>RATING</th>
                <th>NUMBER OF RATINGS</th>
                <th>LENGTH</th>
                <th>YEAR</th>
                <th>FORMAT</th>
                <th>AUDIO</th>
                <th>AGE</th>
                <th>GENRE</th>
                <th>DESCRIPTION</th>
                <th>IN STOCK</th>
            </tr>
            <?php 
                while ($row = mysqli_fetch_assoc($resultmovie)) 
                {
                    
                    echo '<tr>';
                    echo '<td class="id">' . $row['id'] . '</td>'; 
                    echo '<td style="white-space: nowrap;">' . $row['nazov'] . '</td>'; 
                    echo '<td>' . $row['director'] . '</td>';
                    echo '<td>' . $row['composer'] . '</td>';
                    echo '<td>' . $row['cast0'] . '</td>';
                    echo '<td>' . $row['cast1'] . '</td>';
                    echo '<td>' . $row['cast2'] . '</td>';
                    echo '<td>' . $row['cena'] . '</td>';
                    echo '<td>' . $row['rating'] . '</td>';
                    echo '<td>' . $row['pocetRating'] . '</td>';
                    echo '<td>' . $row['length'] . '</td>';
                    echo '<td>' . $row['year'] . '</td>';
                    echo '<td>' . $row['format'] . '</td>';
                    echo '<td>' . $row['audio'] . '</td>';
                    echo '<td>' . $row['age'] . '</td>';
                    $genre = explode(" ", $row['genre']);        
                    foreach($genre as $g) {
                        echo '<td>' .  $g . '</td>';
                    } 
                    $description = $row['description'];
                    $lastSpace = strrpos(substr($description, 0, 70), ' ');
                    echo '<td>' . substr($description, 0, $lastSpace) . '...</td>';
                    echo '<td>' . $row['inStock'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>


    <div id="tableMusic" style="display:none; overflow-x: scroll;">
        <table class="adminTable">
            <h1>PRODUCTS MUSIC</h1>
            <tr class="columnNames">
                <th>ID</th>
                <th>ALBUM NAME</th>
                <th>GENRE</th>
                <th>BAND NAME</th>
                <th>MEMBERS</th>
                <th>FORMAT</th>
                <th>PRICE</th>
                <th>LENGTH</th>
                <th>RELEASE DATE</th>
                <th>RECORD LABEL</th>
                <th>RECORD CHART</th>
                <th>IN STOCK</th>
            </tr>
            <?php 
                while ($row = mysqli_fetch_assoc($resultmusic)) 
                {
                  $band_name = $row['bandId'];
                  $members_query = "SELECT bandMemberName FROM bandmember WHERE bandId='$band_name'";
                  $members_result = mysqli_query($conn, $members_query);
                  $members = "";
                  while ($member = mysqli_fetch_assoc($members_result)) {
                    $members .= $member['bandMemberName'] . ", ";
                  }
                  $members = rtrim($members, ", ");
            
                  echo '<tr>';
                  echo '<td class="id">' . $row['id'] . '</td>'; 
                  echo '<td style="white-space: nowrap;">' . $row['albumName'] . '</td>'; 
                  echo '<td>' . $row['genre'] . '</td>';
                  echo '<td>' . $row['bandName'] . '</td>';
                  echo '<td style="white-space: nowrap;">' . $members . '</td>';
                  echo '<td>' . $row['format'] . '</td>';
                  echo '<td>' . $row['price'] . '</td>';
                  echo '<td>' . $row['length'] . '</td>';
                  echo '<td>' . $row['releaseDate'] . '</td>';
                  echo '<td>' . $row['recordLabel'] . '</td>';
                  echo '<td>' . $row['recordChart'] . '</td>';
                  echo '<td>' . $row['inStock'] . '</td>';
                  echo '</tr>';
                }
            ?>
        </table>
    </div>

    <div id="tableBands" style="display:none;">
        <table class="adminTable">
            <h1>Bands</h1>
            <tr class="columnNames">
                <th>ID</th>
                <th>NAME</th>
                <th>YEAR</th>
                <th>COUNTRY</th>
            </tr>
            <?php 
                while ($row = mysqli_fetch_assoc($resultband)) 
                {
                    echo '<tr>';
                    echo '<td class="id">' . $row['bandId'] . '</td>'; 
                    echo '<td>' . $row['bandName'] . '</td>'; 
                    echo '<td>' .  $row['bandFormed'] . '</td>';
                    echo '<td>' . $row['bandCountry'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>

    <div id="tableBandMembers" style="display:none;">
        <table class="adminTable">
            <h1>Band Members</h1>
            <tr class="columnNames">
                <th>ID</th>
                <th>NAME</th>
                <th>ROLE</th>
                <th>BAND</th>
            </tr>
            <?php 
                while ($row = mysqli_fetch_assoc($resultbandmember)) 
                {
                    echo '<tr>';
                    echo '<td class="id">' . $row['bandMemberId'] . '</td>'; 
                    echo '<td>' . $row['bandMemberName'] . '</td>'; 
                    echo '<td>' .  $row['bandMemberRole'] . '</td>';
                    echo '<td>' . $row['bandName'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>


    <div id="tableFAQ" style="display:none;">
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
    </div>


    <div id="tableMess" style="display:none;">
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
    </div>
    

    <div id="tableUsers" style="display:none;">
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
    </div>

</section>
    
        

<script>


  $("#bookForm").click(function() {
    $("#formBook1").show();
    $("#formBook2").show();
    $("#formBook3").show();
    $("#tableBooks").show();
    $("#formMovie1").hide();
    $("#formMovie2").hide();
    $("#formMovie3").hide();
    $("#tableMovies").hide();
    $("#formMusic1").hide();
    $("#formMusic2").hide();
    $("#formMusic3").hide();
    $("#tableMusic").hide();
    $("#formBand1").hide();
    $("#formBand2").hide();
    $("#formBand3").hide();
    $("#tableBands").hide();
    $("#formBandMember1").hide();
    $("#formBandMember2").hide();
    $("#formBandMember3").hide();
    $("#tableBandMembers").hide();
    $("#formSong1").hide();
    $("#formSong2").hide();
    $("#formSong3").hide();
    $("#formFAQ1").hide();
    $("#formFAQ3").hide();
    $("#tableFAQ").hide();
    $("#formMess3").hide();
    $("#tableMess").hide();
    $("#tableUsers").hide();
    $("#update").show();
    $("#add").show();
    $("#delete").show();

    localStorage.setItem("activeForm", "bookForm");
  });

  $("#movieForm").click(function() {
    $("#formBook1").hide();
    $("#formBook2").hide();
    $("#formBook3").hide();
    $("#tableBooks").hide();
    $("#formMovie1").show();
    $("#formMovie2").show();
    $("#formMovie3").show();
    $("#tableMovies").show();
    $("#formMusic1").hide();
    $("#formMusic2").hide();
    $("#formMusic3").hide();
    $("#tableMusic").hide();
    $("#formBand1").hide();
    $("#formBand2").hide();
    $("#formBand3").hide();
    $("#tableBands").hide();
    $("#formBandMember1").hide();
    $("#formBandMember2").hide();
    $("#formBandMember3").hide();
    $("#tableBandMembers").hide();
    $("#formSong1").hide();
    $("#formSong2").hide();
    $("#formSong3").hide();
    $("#formFAQ1").hide();
    $("#formFAQ3").hide();
    $("#tableFAQ").hide();
    $("#formMess3").hide();
    $("#tableMess").hide();
    $("#tableUsers").hide();
    $("#update").show();
    $("#add").show();
    $("#delete").show();
  });

  $("#musicForm").click(function() {
    $("#formBook1").hide();
    $("#formBook2").hide();
    $("#formBook3").hide();
    $("#tableBooks").hide();
    $("#formMovie1").hide();
    $("#formMovie2").hide();
    $("#formMovie3").hide();
    $("#tableMovies").hide();
    $("#formMusic1").show();
    $("#formMusic2").show();
    $("#formMusic3").show();
    $("#tableMusic").show();
    $("#formBand1").hide();
    $("#formBand2").hide();
    $("#formBand3").hide();
    $("#tableBands").hide();
    $("#formBandMember1").hide();
    $("#formBandMember2").hide();
    $("#formBandMember3").hide();
    $("#tableBandMembers").hide();
    $("#formSong1").hide();
    $("#formSong2").hide();
    $("#formSong3").hide();
    $("#formFAQ1").hide();
    $("#formFAQ3").hide();
    $("#tableFAQ").hide();
    $("#formMess3").hide();
    $("#tableMess").hide();
    $("#tableUsers").hide();
    $("#update").show();
    $("#add").show();
    $("#delete").show();
  });

  $("#bandForm").click(function() {
    $("#formBook1").hide();
    $("#formBook2").hide();
    $("#formBook3").hide();
    $("#tableBooks").hide();
    $("#formMovie1").hide();
    $("#formMovie2").hide();
    $("#formMovie3").hide();
    $("#tableMovies").hide();
    $("#formMusic1").hide();
    $("#formMusic2").hide();
    $("#formMusic3").hide();
    $("#tableMusic").hide();
    $("#formBand1").show();
    $("#formBand2").show();
    $("#formBand3").show();
    $("#tableBands").show();
    $("#formBandMember1").hide();
    $("#formBandMember2").hide();
    $("#formBandMember3").hide();
    $("#tableBandMembers").hide();
    $("#formSong1").hide();
    $("#formSong2").hide();
    $("#formSong3").hide();
    $("#formFAQ1").hide();
    $("#formFAQ3").hide();
    $("#tableFAQ").hide();
    $("#formMess3").hide();
    $("#tableMess").hide();
    $("#tableUsers").hide();
    $("#update").show();
    $("#add").show();
    $("#delete").show();
  });

  $("#bandMemberForm").click(function() {
    $("#formBook1").hide();
    $("#formBook2").hide();
    $("#formBook3").hide();
    $("#tableBooks").hide();
    $("#formMovie1").hide();
    $("#formMovie2").hide();
    $("#formMovie3").hide();
    $("#tableMovies").hide();
    $("#formMusic1").hide();
    $("#formMusic2").hide();
    $("#formMusic3").hide();
    $("#tableMusic").hide();
    $("#formBand1").hide();
    $("#formBand2").hide();
    $("#formBand3").hide();
    $("#tableBands").hide();
    $("#formBandMember1").show();
    $("#formBandMember2").show();
    $("#formBandMember3").show();
    $("#tableBandMembers").show();
    $("#formSong1").hide();
    $("#formSong2").hide();
    $("#formSong3").hide();
    $("#formFAQ1").hide();
    $("#formFAQ3").hide();
    $("#tableFAQ").hide();
    $("#formMess3").hide();
    $("#tableMess").hide();
    $("#tableUsers").hide();
    $("#update").show();
    $("#add").show();
    $("#delete").show();
  });

  $("#songForm").click(function() {
    $("#formBook1").hide();
    $("#formBook2").hide();
    $("#formBook3").hide();
    $("#tableBooks").hide();
    $("#formMovie1").hide();
    $("#formMovie2").hide();
    $("#formMovie3").hide();
    $("#tableMovies").hide();
    $("#formMusic1").hide();
    $("#formMusic2").hide();
    $("#formMusic3").hide();
    $("#tableMusic").hide();
    $("#formBand1").hide();
    $("#formBand2").hide();
    $("#formBand3").hide();
    $("#tableBands").hide();
    $("#formBandMember1").hide();
    $("#formBandMember2").hide();
    $("#formBandMember3").hide();
    $("#tableBandMembers").hide();
    $("#formSong1").show();
    $("#formSong2").show();
    $("#formSong3").show();
    $("#formFAQ1").hide();
    $("#formFAQ3").hide();
    $("#tableFAQ").hide();
    $("#formMess3").hide();
    $("#tableMess").hide();
    $("#tableUsers").hide();
    $("#update").show();
    $("#add").show();
    $("#delete").show();
  });

  $("#FAQForm").click(function() {
    $("#formBook1").hide();
    $("#formBook2").hide();
    $("#formBook3").hide();
    $("#tableBooks").hide();
    $("#formMovie1").hide();
    $("#formMovie2").hide();
    $("#formMovie3").hide();
    $("#tableMovies").hide();
    $("#formMusic1").hide();
    $("#formMusic2").hide();
    $("#formMusic3").hide();
    $("#tableMusic").hide();
    $("#formBand1").hide();
    $("#formBand2").hide();
    $("#formBand3").hide();
    $("#tableBands").hide();
    $("#formBandMember1").hide();
    $("#formBandMember2").hide();
    $("#formBandMember3").hide();
    $("#tableBandMembers").hide();
    $("#formSong1").hide();
    $("#formSong2").hide();
    $("#formSong3").hide();
    $("#formFAQ1").show();
    $("#formFAQ3").show();
    $("#tableFAQ").show();
    $("#formMess3").hide();
    $("#tableMess").hide();
    $("#tableUsers").hide();
    $("#update").hide();
    $("#add").show();
    $("#delete").show();
  });

  $("#messForm").click(function() {
    $("#formBook1").hide();
    $("#formBook2").hide();
    $("#formBook3").hide();
    $("#tableBooks").hide();
    $("#formMovie1").hide();
    $("#formMovie2").hide();
    $("#formMovie3").hide();
    $("#tableMovies").hide();
    $("#formMusic1").hide();
    $("#formMusic2").hide();
    $("#formMusic3").hide();
    $("#tableMusic").hide();
    $("#formBand1").hide();
    $("#formBand2").hide();
    $("#formBand3").hide();
    $("#tableBands").hide();
    $("#formBandMember1").hide();
    $("#formBandMember2").hide();
    $("#formBandMember3").hide();
    $("#tableBandMembers").hide();
    $("#formSong1").hide();
    $("#formSong2").hide();
    $("#formSong3").hide();
    $("#formFAQ1").hide();
    $("#formFAQ3").hide();
    $("#tableFAQ").hide();
    $("#formMess3").show();
    $("#tableMess").show();
    $("#tableUsers").hide();
    $("#update").hide();
    $("#add").hide();
    $("#delete").show();
  });

  $("#usersForm").click(function() {
    $("#formBook1").hide();
    $("#formBook2").hide();
    $("#formBook3").hide();
    $("#tableBooks").hide();
    $("#formMovie1").hide();
    $("#formMovie2").hide();
    $("#formMovie3").hide();
    $("#tableMovies").hide();
    $("#formMusic1").hide();
    $("#formMusic2").hide();
    $("#formMusic3").hide();
    $("#tableMusic").hide();
    $("#formBand1").hide();
    $("#formBand2").hide();
    $("#formBand3").hide();
    $("#tableBands").hide();
    $("#formBandMember1").hide();
    $("#formBandMember2").hide();
    $("#formBandMember3").hide();
    $("#tableBandMembers").hide();
    $("#formSong1").hide();
    $("#formSong2").hide();
    $("#formSong3").hide();
    $("#formFAQ1").hide();
    $("#formFAQ3").hide();
    $("#tableFAQ").hide();
    $("#formMess3").hide();
    $("#tableMess").hide();
    $("#tableUsers").show();
    $("#update").hide();
    $("#add").hide();
    $("#delete").hide();
  });
</script>



</script>



</body>

</html>


