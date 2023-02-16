<?php


/*--------------------------------*/
/*-------------BOOKS-------------*/
/*--------------------------------*/

if (isset($_POST["submit"])) {
   
    $nazov = $_POST["nazov"];
    $img = $_POST["img"];
    $autor = $_POST["autor"];
    $cena = $_POST["cena"];
    $rating = $_POST["rating"];
    $pocetRating = $_POST["pocetRating"];
    $linkRating = $_POST["linkRating"];
    $description = $_POST["description"];
    $inStock = $_POST["inStock"];
    $pocetStran = $_POST["pocetStran"];
    $format = $_POST["format"];
    $language = $_POST["language"];
    $genre = $_POST["genre"];
    $genre = implode("|", $_POST['genre']);
    $year = $_POST["year"];
    $publisher = $_POST["publisher"];
    $dimensions = $_POST["dimensions"];

        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if(emptyInputProduct($nazov, $img, $autor, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $pocetStran, $format, $language, $genre, $year, $publisher, $dimensions) !== false) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    $format = ucwords($format);
    $language = ucwords($language);
    
    addProductBook($conn, $nazov, $img, $autor, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $pocetStran, $format, $language, $genre, $year, $publisher, $dimensions);
}
    
if(isset($_POST["update"])) {
       
    $id = $_POST["id"];
    $nazov = $_POST["nazov"];
    $img = $_POST["img"];
    $autor = $_POST["autor"];
    $cena = $_POST["cena"];
    $rating = $_POST["rating"];
    $pocetRating = $_POST["pocetRating"];
    $linkRating = $_POST["linkRating"];
    $description = $_POST["description"];
    if (empty($_POST['inStock'])) {
        $inStock = $row['inStock'];
    } else {
        $inStock = $_POST['inStock'];
    }
    $pocetStran = $_POST["pocetStran"];
    if (empty($_POST['format'])) {
        $format = $row['format'];
    } else {
        $format = $_POST['format'];
    }
    if (empty($_POST['language'])) {
        $language = $row['language'];
    } else {
        $language = $_POST['language'];
    }
    if (empty($_POST['genre'])) {
        $genre = $row['genre'];
    } else {
        $genre = implode("|", $_POST['genre']);
    }   
    $year = $_POST["year"];

    if (empty($_POST['publisher'])) {
        $publisher = $row['publisher'];
    } else {
        $publisher = $_POST['publisher'];
    }
    if (empty($_POST['dimensions'])) {
        $dimensions = $row['dimensions'];
    } else {
        $dimensions = $_POST['dimensions'];
    }   
    $year = $_POST["year"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    
    $format = ucwords($format);
    $language = ucwords($language);
    
    updateProductBook($conn, $id, $nazov, $img, $autor, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $pocetStran, $format, $language, $genre, $year, $publisher, $dimensions);
}
    
if(isset($_POST["delete"])) {
    
    $id = $_POST["id"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if(empty($id)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    if(!idExistsBook($conn, $id)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }
    deleteProductBook($conn, $id);
}


/*--------------------------------*/
/*-------------MOVIES-------------*/
/*--------------------------------*/

if (isset($_POST["submitMovie"])) {

$nazov = $_POST["nazov"];
$img = $_POST["img"];
$director = $_POST["director"];
$cena = $_POST["cena"];
$rating = $_POST["rating"];
$pocetRating = $_POST["pocetRating"];
$linkRating = $_POST["linkRating"];
$description = $_POST["description"];
$inStock = $_POST["inStock"];
$length = $_POST["length"];
$format = $_POST["format"];
$audio = $_POST["audio"];
$age = $_POST["age"];
$composer = $_POST["composer"];
$year = $_POST["year"];
$cast0 = $_POST["cast0"];
$cast1 = $_POST["cast1"];
$cast2 = $_POST["cast2"];
if (empty($_POST['genre'])) {
    $genre = $row['genre'];
} else {
    $genre = implode("|", $_POST['genre']);
}   
$year = $_POST["year"];
$studio = $_POST["studio"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(emptyInputProduct($nazov, $img, $director, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $length, $format, $audio, $age, $composer, $year, $cast0, $cast1, $cast2, $genre, $studio) !== false) {
    header("location: ../adminPage.php?error=emptyinput");
    exit();
}

$audio = ucwords($audio);
$age = strtoupper($age);
$format = strtoupper($format);

addProductMovie($conn, $nazov, $img, $director, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $length, $format, $audio, $age, $composer, $year, $cast0, $cast1, $cast2, $genre, $studio);
}

if(isset($_POST["updateMovie"])) {
   
$id = $_POST["id"];
$nazov = $_POST["nazov"];
$img = $_POST["img"];
$director = $_POST["director"];
$cena = $_POST["cena"];
$rating = $_POST["rating"];
$pocetRating = $_POST["pocetRating"];
$linkRating = $_POST["linkRating"];
$description = $_POST["description"];

if (empty($_POST['inStock'])) {
    $inStock = $row['inStock'];
} else {
    $inStock = $_POST['inStock'];
}

$length = $_POST["length"];

if (empty($_POST['format'])) {
    $format = $row['format'];
} else {
    $format = $_POST['format'];
}

if (empty($_POST['audio'])) {
    $audio = $row['audio'];
} else {
    $audio = $_POST['audio'];
}

if (empty($_POST['age'])) {
    $age = $row['age'];
} else {
    $age = $_POST['age'];
}

$composer = $_POST["composer"];
$year = $_POST["year"];
$cast0 = $_POST["cast0"];
$cast1 = $_POST["cast1"];
$cast2 = $_POST["cast2"];


if (empty($_POST['genre'])) {
    $genre = $row['genre'];
} else {
    $genre = implode("|", $_POST['genre']);
}   

$year = $_POST["year"];
$studio = $_POST["studio"];


require_once 'dbh.inc.php';
require_once 'functions.inc.php';


$format = strtoupper($format);
$audio = ucwords($audio);
$age = ucwords($age);
$genre = ucwords($genre);

updateProductMovie($conn, $id, $nazov, $img, $director, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $length, $format, $audio, $age, $composer, $year, $cast0, $cast1, $cast2, $genre, $year, $studio);
}

if(isset($_POST["deleteMovie"])) {

$id = $_POST["id"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(empty($id)) {
    header("location: ../adminPage.php?error=emptyinput");
    exit();
}
if(!idExistsMovie($conn, $id)) {
    header("location: ../adminPage.php?error=idnotfound");
    exit();
}
deleteProductMovie($conn, $id);
}


/*--------------------------------*/
/*-------------MUSIC--------------*/
/*--------------------------------*/

if (isset($_POST["submitMusic"])) {

    $albumName = $_POST["albumName"];
    $albumImg = $_POST["albumImg"];
    $genre = $_POST["genre"];
    $bandId = $_POST["bandId"];
    $format = $_POST["format"];
    $price = $_POST["price"];
    $length = $_POST["length"];
    $releaseDate = $_POST["releaseDate"];
    $recordLabel = $_POST["recordLabel"];
    $recordChart = $_POST["recordChart"];
    $inStock = $_POST["inStock"];
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if (isset($_POST["submitMusic"])) {

        $albumName = $_POST["albumName"];
        $albumImg = $_POST["albumImg"];
        $genre = $_POST["genre"];
        $bandId = $_POST["bandId"];
        $format = $_POST["format"];
        $price = $_POST["price"];
        $length = $_POST["length"];
        $releaseDate = $_POST["releaseDate"];
        $recordLabel = $_POST["recordLabel"];
        $recordChart = $_POST["recordChart"];
        $inStock = $_POST["inStock"];
            
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
  
        
        $format = ucwords($format);
        $albumName = ucwords($albumName);
        $genre = ucwords($genre);
        
        addProductMusic($conn, $albumName, $albumImg, $genre, $bandId, $format, $price, $length, $releaseDate, $recordLabel, $recordChart, $inStock);
    }
    
    $format = ucwords($format);
    $albumName = ucwords($albumName);
    $genre = ucwords($genre);
    
    addProductMusic($conn, $albumName, $albumImg, $genre, $bandId, $format, $price, $length, $releaseDate, $recordLabel, $recordChart, $inStock);
}
    

if(isset($_POST["updateMusic"])) {
   
    $id = $_POST["id"];
    if (empty($_POST['albumName'])) {
        $albumName = $row['albumName'];
    } else {
        $albumName = $_POST['albumName'];
    }
    if (empty($_POST['albumImg'])) {
        $albumImg = $row['albumImg'];
    } else {
        $albumImg = $_POST['albumImg'];
    }
    if (empty($_POST['genre'])) {
        $genre = $row['genre'];
    } else {
        $genre = $_POST['genre'];
    }
    if (empty($_POST['bandId'])) {
        $bandId = $row['bandId'];
    } else {
        $bandId = $_POST['bandId'];
    }
    if (empty($_POST['format'])) {
        $format = $row['format'];
    } else {
        $format = $_POST['format'];
    }
    if (empty($_POST['price'])) {
        $price = $row['price'];
    } else {
        $price = $_POST['price'];
    }
    if (empty($_POST['length'])) {
        $length = $row['length'];
    } else {
        $length = $_POST['length'];
    }
    if (empty($_POST['releaseDate'])) {
        $releaseDate = $row['releaseDate'];
    } else {
        $releaseDate = $_POST['releaseDate'];
    }
    if (empty($_POST['recordLabel'])) {
        $recordLabel = $row['recordLabel'];
    } else {
        $recordLabel = $_POST['recordLabel'];
    }
    if (empty($_POST['recordChart'])) {
        $recordChart = $row['recordChart'];
    } else {
        $recordChart = $_POST['recordChart'];
    }
    if (empty($_POST['inStock'])) {
        $inStock = $row['inStock'];
    } else {
        $inStock = $_POST['inStock'];
    }
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    
    $format = ucwords($format);
    $genre = ucwords($genre);
    
    updateProductMusic($conn, $id, $albumName, $albumImg, $genre, $bandId, $format, $price, $length, $releaseDate, $recordLabel, $recordChart, $inStock);
}



if(isset($_POST["deleteMusic"])) {

    $id = $_POST["id"];
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
        
    if(empty($id)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    if(!idExistsMusic($conn, $id)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }
    deleteProductMusic($conn, $id);
}

/*--------------------------------*/
/*-------------BANDS--------------*/
/*--------------------------------*/

if (isset($_POST["submitBand"])) {

    $bandName = $_POST["bandName"];
    $bandFormed = $_POST["bandFormed"];
    $bandCountry = $_POST["bandCountry"];
    $bandPhoto = $_POST["bandPhoto"];
    
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if(emptyInputBand($bandName, $bandFormed, $bandCountry, $bandPhoto) !== false) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
       
    addBand($conn, $bandName, $bandFormed, $bandCountry, $bandPhoto);
}


if (isset($_POST["updateBand"])) {

    $bandId = $_POST["bandId"];
    
    if (empty($_POST['bandName'])) {
        $bandName = $row['bandName'];
    } else {
        $bandName = $_POST['bandName'];
    }

    if (empty($_POST['bandFormed'])) {
        $bandFormed = $row['bandFormed'];
    } else {
        $bandFormed = $_POST['bandFormed'];
    }

    if (empty($_POST['bandCountry'])) {
        $bandCountry = $row['bandCountry'];
    } else {
        $bandCountry = $_POST['bandCountry'];
    }

    if (empty($_POST['bandPhoto'])) {
        $bandPhoto = $row['bandPhoto'];
    } else {
        $bandPhoto = $_POST['bandPhoto'];
    }
    
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    updateBand($conn, $bandId, $bandName, $bandFormed, $bandCountry, $bandPhoto);
}


if(isset($_POST["deleteBand"])) {

    $bandId = $_POST["bandId"];
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
        
    if(empty($bandId)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    if(!idExistsBand($conn, $bandId)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }
    deleteBand($conn, $bandId);
}

/*-------------------------------------*/
/*------------BAND MEMBERS-------------*/
/*-------------------------------------*/

if (isset($_POST["submitBandMember"])) {

    $bandMemberName = $_POST["bandMemberName"];
    $bandMemberRole = $_POST["bandMemberRole"];


    if (empty($_POST['bandMemberRole'])) {
        $bandMemberRole = $row['bandMemberRole'];
    } else {
        $bandMemberRole = implode(", ", $_POST['bandMemberRole']);
    }   


    $bandId = $_POST["bandId"];
    
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    emptyInputBandMember($bandMemberName, $bandMemberRole, $bandId);
    
    addBandMember($conn, $bandMemberName, $bandMemberRole, $bandId);
}


if (isset($_POST["updateBandMember"])) {

    $bandMemberId = $_POST["bandMemberId"];

    if (empty($_POST['bandMemberName'])) {
        $bandMemberName = $row['bandMemberName'];
    } else {
        $bandMemberName = $_POST['bandMemberName'];
    }

    if (empty($_POST['bandMemberRole'])) {
        $bandMemberRole = $row['bandMemberRole'];
    } else {
        $bandMemberRole = implode(", ", $_POST['bandMemberRole']);
    }

    if (empty($_POST['bandId'])) {
        $bandId = $row['bandId'];
    } else {
        $bandId = $_POST['bandId'];
    }
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
  
    if (!idExistsBandMember($conn, $bandMemberId)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }

    updateBandMember($conn, $bandMemberId, $bandMemberName, $bandMemberRole, $bandId);
}

if(isset($_POST["deleteBandMember"])) {

    $bandMemberId = $_POST["bandMemberId"];
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
        
    if(empty($bandMemberId)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    if(!idExistsBandMember($conn, $bandMemberId)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }
    deleteBandMember($conn, $bandMemberId);
}



/*--------------------------------*/
/*--------------SONGS-------------*/
/*--------------------------------*/

if (isset($_POST["submitSong"])) {

    $songNumber = $_POST["songNumber"];
    $songName = $_POST["songName"];
    $songLength = $_POST["songLength"];
    $albumId = $_POST["albumId"];
    
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if(emptyInputSong($songNumber, $songName, $songLength, $albumId)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    
    addSong($conn, $songNumber, $songName, $songLength, $albumId);
}


if (isset($_POST["updateSong"])) {

    $songId = $_POST["songId"];

    if (empty($_POST['songNumber'])) {
        $songNumber = $row['songNumber'];
    } else {
        $songNumber = $_POST['songNumber'];
    }

    if (empty($_POST['songName'])) {
        $songName = $row['songName'];
    } else {
        $songName = $_POST['songName'];
    }

    if (empty($_POST['songLength'])) {
        $songLength = $row['songLength'];
    } else {
        $songLength = implode(", ", $_POST['songLength']);
    }

    if (empty($_POST['albumId'])) {
        $albumId = $row['albumId'];
    } else {
        $albumId = $_POST['albumId'];
    }
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (!idExistsSong($conn, $songId)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }

    updateSong($conn, $songId, $songNumber, $songName, $songLength, $albumId);
}

if(isset($_POST["deleteSong"])) {

    $songId = $_POST["songId"];
        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
        
    if(empty($songId)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    if(!idExistsSong($conn, $songId)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }
    deleteSong($conn, $songId);
}

if($_GET['function'] == "deleteProduct") {
    if (isset($_POST["songId"]) && !empty($_POST["songId"])) {
      $songId = $_POST["songId"];
  
      require_once 'dbh.inc.php';
      require_once 'functions.inc.php';
  
      if(!idExistsSong($conn, $songId)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
      }
      deleteSong($conn, $songId);
    } else {
      header("location: ../adminPage.php?error=emptyinput");
      exit();
    }
  }



/*--------------------------------*/
/*--------------FAQ---------------*/
/*--------------------------------*/

if(isset($_POST["faqAdd"])) {

    $question = $_POST["question"];
    $answer = $_POST["answer"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputFaq($question, $answer)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    
    addFaq($conn, $question, $answer);
}

if(isset($_POST["faqDelete"])) {

    $id = $_POST["id"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(empty($id)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    if(!idExistsFaq($conn, $id)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }
    deleteFaq($conn, $id);
}

if(isset($_POST["messDelete"])) {

    $id = $_POST["id"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(empty($id)) {
        header("location: ../adminPage.php?error=emptyinput");
        exit();
    }
    if(!idExistsFaq($conn, $id)) {
        header("location: ../adminPage.php?error=idnotfound");
        exit();
    }
    deleteMess($conn, $id);
}


else {
    header("location: ../adminPage.php?error=none");
        exit();
}



