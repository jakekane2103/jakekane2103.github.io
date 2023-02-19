<?php


function emptyInputSignup($name, $email, $address, $username, $pwd, $pwdRepeat) {
    $result = false;
    if (empty($name) || empty($email) || empty($address) || empty($username) || empty($pwd) || empty($pwdRepeat) ) {
        $result = true;
    }
  
    return $result;
}

function invalidUid($username) {
    $result = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
 
    return $result;
}

function invalidEmail($email) {
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
  
    return $result;
}



function pwdMatch($pwd, $pwdRepeat) {
    $result = false;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
  
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../NEW_register_login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $address, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, userAddress, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../NEW_register_login.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $address, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../NEW_register_login.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result = false;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }

    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../NEW_login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../NEW_login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["userisadmin"] = $uidExists["usersIsAdmin"];

        header("location: ../index.php");
        
        exit();
    }
    
}

function emptyInputProduct($nazov, $img, $autor, $cena, $rating, $description) {
    $result = false;
    if (empty($nazov) || empty($img) || empty($autor) || empty($cena) || empty($rating) || empty($description) ) {
        $result = true;
    }
  
    return $result;
}

/*------------------------------*/
/*-----------ADD BOOK-----------*/
/*------------------------------*/

function addProductBook($conn, $nazov, $img, $autor, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $pocetStran, $format, $language, $genre, $year, $publisher, $dimensions) {
    $sql = "INSERT INTO productBooks (nazov, img, autor, cena, rating, pocetRating, linkRating, description, inStock, pocetStran, format, language, genre, year, publisher, dimensions) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }

        mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $nazov, $img, $autor, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $pocetStran, $format, $language, $genre, $year, $publisher, $dimensions);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../adminPage.php?error=none");
        exit();
}

/*---------------------------------*/
/*-----------UPDATE BOOK-----------*/
/*---------------------------------*/

function updateProductBook($conn, $id, $nazov, $img, $autor, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $pocetStran, $format, $language, $genre, $year, $publisher, $dimensions) {
    $sql = "SELECT nazov, img, autor, cena, rating, pocetRating, linkRating, description, inStock, pocetStran, format, language, genre, year, publisher, dimensions FROM productbooks WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        if(empty($nazov)) $nazov = $row['nazov'];
        if(empty($img)) $img = $row['img'];
        if(empty($autor)) $autor = $row['autor'];
        if(empty($cena)) $cena = $row['cena'];
        if(empty($rating)) $rating = $row['rating'];
        if(empty($pocetRating)) $pocetRating = $row['pocetRating'];
        if(empty($linkRating)) $linkRating = $row['linkRating'];
        if(empty($description)) $description = $row['description'];
        if(empty($inStock)) $inStock = $row['inStock'];
        if(empty($pocetStran)) $pocetStran = $row['pocetStran'];
        if(empty($format)) $format = $row['format'];
        if(empty($language)) $language = $row['language'];
        if(empty($genre)) $genre = $row['genre'];
        if(empty($year)) $year = $row['year'];
        if(empty($publisher)) $publisher = $row['publisher'];
        if(empty($dimensions)) $dimensions = $row['dimensions'];

    }
    mysqli_stmt_close($stmt);

    $sql = "UPDATE productbooks SET nazov = ?, img = ?, autor = ?, cena = ?, rating = ?, pocetRating = ?, linkRating = ?, description = ?, inStock = ?, pocetStran = ?, format = ?, language = ?, genre = ?, year = ?, publisher = ?, dimensions = ? WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssssssssssssssi", $nazov, $img, $autor, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $pocetStran, $format, $language, $genre, $year, $publisher, $dimensions, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}


function idExistsBook($conn, $id) {
    $sql = "SELECT id FROM productbooks WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            return true;
        } else {
            return false;
        }
    }
}


/*---------------------------------*/
/*---------DELETE BOOK----------*/
/*---------------------------------*/

function deleteProductBook($conn, $id) {
    $sql = "DELETE FROM productbooks WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        header("location: ../adminPage.php?success=deleted");
        exit();
    }
}


/*------------------------------*/
/*----------ADD MOVIE-----------*/
/*------------------------------*/

function addProductMovie($conn, $nazov, $img, $director, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $length, $format, $audio, $age, $composer, $year, $cast0, $cast1, $cast2, $genre, $studio) {
    $sql = "INSERT INTO productmovies (nazov, img, director, cena, rating, pocetRating, linkRating, description, inStock, length, format, audio, age, composer, year, cast0, cast1, cast2, genre, studio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }

        mysqli_stmt_bind_param($stmt, "ssssssssssssssssssss", $nazov, $img, $director, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $length, $format, $audio, $age, $composer, $year, $cast0, $cast1, $cast2, $genre, $studio);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../adminPage.php?error=none");
        exit();
}

/*---------------------------------*/
/*----------UPDATE MOVIE-----------*/
/*---------------------------------*/
function emptyInputMovie($nazov, $img, $director, $cena, $rating, $description) {
    $result = false;
    if (empty($nazov) || empty($img) || empty($director) || empty($cena) || empty($rating) || empty($description) ) {
        $result = true;
    }
 
    return $result;
}

function updateProductMovie($conn, $id, $nazov, $img, $director, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $length, $format, $audio, $age, $composer, $year, $cast0, $cast1, $cast2, $genre, $studio) {
    $sql = "SELECT nazov, img, director, cena, rating, pocetRating, linkRating, description, inStock, length, format, audio, age, composer, year, cast0, cast1, cast2, genre, studio FROM productmovies WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        if(empty($nazov)) $nazov = $row['nazov'];
        if(empty($img)) $img = $row['img'];
        if(empty($director)) $director = $row['director'];
        if(empty($cena)) $cena = $row['cena'];
        if(empty($rating)) $rating = $row['rating'];
        if(empty($pocetRating)) $pocetRating = $row['pocetRating'];
        if(empty($linkRating)) $linkRating = $row['linkRating'];
        if(empty($description)) $description = $row['description'];
        if(empty($inStock)) $inStock = $row['inStock'];
        if(empty($length)) $length = $row['length'];
        if(empty($format)) $format = $row['format'];
        if(empty($audio)) $audio = $row['audio'];
        if(empty($age)) $age = $row['age'];
        if(empty($composer)) $composer = $row['composer'];
        if(empty($year)) $year = $row['year'];
        if(empty($cast0)) $cast0 = $row['cast0'];
        if(empty($cast1)) $cast1 = $row['cast1'];
        if(empty($cast2)) $cast2 = $row['cast2'];
        if(empty($genre)) $genre = $row['genre'];
        if(empty($studio)) $studio = $row['studio'];

    }
    mysqli_stmt_close($stmt);

    $sql = "UPDATE productmovies SET nazov = ?, img = ?, director = ?, cena = ?, rating = ?, pocetRating = ?, linkRating = ?, description = ?, inStock = ?, length = ?, format = ?, audio = ?, age = ?, composer = ?, year = ?, cast0 = ?, cast1 = ?, cast2 = ?, genre = ?, studio = ? WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssi", $nazov, $img, $director, $cena, $rating, $pocetRating, $linkRating, $description, $inStock, $length, $format, $audio, $age, $composer, $year, $cast0, $cast1, $cast2, $genre, $studio, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}


function idExistsMovie($conn, $id) {
    $sql = "SELECT id FROM productmovies WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            return true;
        } else {
            return false;
        }
    }
}


/*---------------------------------*/
/*----------DELETE MOVIE-----------*/
/*---------------------------------*/

function deleteProductMovie($conn, $id) {
    $sql = "DELETE FROM productmovies WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        header("location: ../adminPage.php?success=deleted");
        exit();
    }
}



/*--------------------------------*/
/*-----------ADD MUSIC------------*/
/*--------------------------------*/

function emptyInputMusic($albumName, $albumImg, $genre, $bandId, $format, $price, $length, $releaseDate, $recordLabel, $recordChart, $inStock) {
    $result = false;
    if (empty($albumName) || empty($albumImg) || empty($genre) || empty($bandId) || empty($format) || empty($length) || 
        empty($releaseDate) || empty($recordLabel) || empty($recordChart) || empty($inStock)) {
        $result = true;
    }

    return $result;
}


function addProductMusic($conn, $albumName, $albumImg, $genre, $bandId, $format, $price, $length, $releaseDate, $recordLabel, $recordChart, $inStock) {
    $sql = "INSERT INTO productmusic (albumName, albumImg, genre, bandId, format, price, length, releaseDate, recordLabel, recordChart, inStock) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssss", $albumName, $albumImg, $genre, $bandId, $format, $price, $length, $releaseDate, $recordLabel, $recordChart, $inStock);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}



/*--------------------------------*/
/*----------UPDATE MUSIC----------*/
/*--------------------------------*/


function updateProductMusic($conn, $id, $albumName, $albumImg, $genre, $bandId, $format, $price, $length, $releaseDate, $recordLabel, $recordChart, $inStock) {
    $sql = "SELECT albumName, albumImg, genre, bandId, format, price, length, releaseDate, recordLabel, recordChart, inStock FROM productmusic WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        if(empty($albumName)) $albumName = $row['albumName'];
        if(empty($albumImg)) $albumImg = $row['albumImg'];
        if(empty($genre)) $genre = $row['genre'];
        if(empty($bandId)) $bandId = $row['bandId'];
        if(empty($format)) $format = $row['format'];
        if(empty($price)) $price = $row['price'];
        if(empty($length)) $length = $row['length'];
        if(empty($releaseDate)) $releaseDate = $row['releaseDate'];
        if(empty($recordLabel)) $recordLabel = $row['recordLabel'];
        if(empty($recordChart)) $recordChart = $row['recordChart'];
        if(empty($inStock)) $inStock = $row['inStock'];
    }
    mysqli_stmt_close($stmt);

    $sql = "UPDATE productmusic SET albumName = ?, albumImg = ?, genre = ?, bandId = ?, format = ?, price = ?, length = ?, releaseDate = ?, recordLabel = ?, recordChart = ?, inStock = ? WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssssssssssi", $albumName, $albumImg, $genre, $bandId, $format, $price, $length, $releaseDate, $recordLabel, $recordChart, $inStock, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}


/*--------------------------------*/
/*----------DELETE MUSIC----------*/
/*--------------------------------*/

function idExistsMusic($conn, $id) {
    $sql = "SELECT id FROM productmusic WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            return true;
        } else {
            return false;
        }
    }
}

function deleteProductMusic($conn, $id) {
    $sql = "DELETE FROM productmusic WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        header("location: ../adminPage.php?success=deleted");
        exit();
    }
}




/*------------------------------*/
/*------------BANDS-------------*/
/*------------------------------*/
function emptyInputBand($bandName, $bandFormed, $bandCountry, $bandPhoto) {
    $result = false;
    if (empty($bandName) || empty($bandFormed) || empty($bandCountry) || empty($bandPhoto)) {
        $result = true;
    }
   
    return $result;
}


function idExistsBand($conn, $bandId) {
    $sql = "SELECT bandId FROM band WHERE bandId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    } else {
        mysqli_stmt_bind_param($stmt, "i", $bandId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            return true;
        } else {
            return false;
        }
    }
}



function addBand($conn, $bandName, $bandFormed, $bandCountry, $bandPhoto){
    $sql = "INSERT INTO band (bandName, bandFormed, bandCountry, bandPhoto) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $bandName, $bandFormed, $bandCountry, $bandPhoto);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}



function updateBand($conn, $bandId, $bandName, $bandFormed, $bandCountry, $bandPhoto) {
    $sql = "SELECT bandId, bandName, bandFormed, bandCountry, bandPhoto FROM band WHERE bandId = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $bandId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        
        if(empty($bandName)) $bandName = $row['bandName'];
        if(empty($bandFormed)) $bandFormed = $row['bandFormed'];
        if(empty($bandCountry)) $bandCountry = $row['bandCountry'];
        if(empty($bandPhoto)) $bandPhoto = $row['bandPhoto'];
        
    }
    mysqli_stmt_close($stmt);

    $sql = "UPDATE band SET bandName = ?, bandFormed = ?, bandCountry = ?, bandPhoto = ? WHERE bandId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssi", $bandName, $bandFormed, $bandCountry, $bandPhoto, $bandId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}


function deleteBand($conn, $bandId) {
    $sql = "DELETE FROM band WHERE bandId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $bandId);
        mysqli_stmt_execute($stmt);
        header("location: ../adminPage.php?success=deleted");
        exit();
    }
}



/*-------------------------------------*/
/*------------BAND MEMBERS-------------*/
/*-------------------------------------*/

function idExistsBandMember($conn, $bandMemberId) {
    $sql = "SELECT bandMemberId FROM bandmember WHERE bandMemberId = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    } else {
        mysqli_stmt_bind_param($stmt, "i", $bandMemberId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            return true;
        } else {
            return false;
        }
    }
}


function emptyInputBandMember($bandMemberName, $bandMemberRole, $bandId) {
    $result = false;
    if (empty($bandMemberName) || empty($bandMemberRole) || empty($bandId)) {
        $result = true;
    }
   
    return $result;
}

function addBandMember($conn, $bandMemberName, $bandMemberRole, $bandId){
    $sql = "INSERT INTO bandmember (bandMemberName, bandMemberRole, bandId) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $bandMemberName, $bandMemberRole, $bandId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}


function updateBandMember($conn, $bandMemberId, $bandMemberName, $bandMemberRole, $bandId) {
    $sql = "SELECT bandMemberId, bandMemberName, bandMemberRole, bandId FROM bandmember WHERE bandMemberId = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $bandMemberId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        
        if(empty($bandMemberName)) $bandMemberName = $row['bandMemberName'];
        if(empty($bandMemberRole)) $bandMemberRole = $row['bandMemberRole'];
        if(empty($bandId)) $bandId = $row['bandId'];
    }
    mysqli_stmt_close($stmt);

    $sql = "UPDATE bandmember SET bandMemberName = ?, bandMemberRole = ?, bandId = ? WHERE bandMemberId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssi", $bandMemberName, $bandMemberRole, $bandId, $bandMemberId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}


function deleteBandMember($conn, $bandMemberId) {
    $sql = "DELETE FROM bandmember WHERE bandMemberId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $bandMemberId);
        mysqli_stmt_execute($stmt);
        header("location: ../adminPage.php?success=deleted");
        exit();
    }
}



/*-------------------------------------*/
/*---------------SONGS-----------------*/
/*-------------------------------------*/

function idExistsSong($conn, $songId) {
    $sql = "SELECT songId FROM songs WHERE songId = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    } else {
        mysqli_stmt_bind_param($stmt, "i", $songId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            return true;
        } else {
            return false;
        }
    }
}





function  emptyInputSong($songNumber, $songName, $songLength, $albumId) {
    $result = false;
    if (empty(($songNumber) || $songName) || empty($songLength) || empty($albumId)) {
        $result = true;
    }
  
    return $result;
}

function addSong($conn, $songNumber, $songName, $songLength, $albumId){
    $sql = "INSERT INTO songs (songNumber, songName, songLength, albumId) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $songNumber, $songName, $songLength, $albumId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}


function updateSong($conn, $songId, $songNumber, $songName, $songLength, $albumId) {
    $sql = "SELECT songId, songNumber, songName, songLength, albumId FROM songs WHERE songId = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $songId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {

        if(empty($songNumber)) $songNumber = $row['songNumber'];
        if(empty($songName)) $songName = $row['songName'];
        if(empty($songLength)) $songLength = $row['songLength'];
        if(empty($albumId)) $albumId = $row['albumId'];
    }
    mysqli_stmt_close($stmt);

    $sql = "UPDATE songs SET songNumber = ?, songName = ?, songLength = ?, albumId = ? WHERE songId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssi", $songNumber, $songName, $songLength, $albumId, $songId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}


function deleteSong($conn, $songId) {
    $sql = "DELETE FROM songs WHERE songId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $songId);
        mysqli_stmt_execute($stmt);
        header("location: ../adminPage.php?success=deleted");
        exit();
    }
}




/*------------------------------*/
/*-------------FAQ--------------*/
/*------------------------------*/

function emptyInputFaq($question, $answer) {
    $result = false;
    if (empty($question) || empty($answer)) {
        $result = true;
    }
  
    return $result;
}

function addFaq($conn, $question, $answer) {
    $sql = "INSERT INTO faq (question, answer) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $question, $answer);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}

function idExistsFaq($conn, $id) {
    $sql = "SELECT id FROM faq WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            return true;
        } else {
            return false;
        }
    }
}

function deleteFaq($conn, $id) {
    $sql = "DELETE FROM faq WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        header("location: ../adminPage.php?success=deleted");
        exit();
    }
}

/*--------CONTACT US---------*/

function emptyInputMessage($name, $email, $message) {
    $result = false;
    if (empty($name) || empty($email) || empty($message)) {
        $result = true;
    }
   
    return $result;
}

function sendMessage($conn, $name, $email, $message) {
    $sql = "INSERT INTO contactMessage (name, email, message) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../contact.php?error=stmtfailed");
        exit();
    }

        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../contact.php?error=none");
        exit();
}


/*--------MESSAGES--------*/

function deleteMess($conn, $id) {
    $sql = "DELETE FROM contactmessage WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        header("location: ../adminPage.php?success=deleted");
        exit();
    }
}



/*--------------------------------*/
/*-------ADD BOOK TO CART---------*/
/*--------------------------------*/
function addToCartBook($conn, $productId, $userId, $productType) {
    $sql = "SELECT * FROM users WHERE usersId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../books.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $userId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (!$row = mysqli_fetch_assoc($result)) {
        // User with the given ID does not exist in the database
        header("location: ../cart.php?error=usernotfound");
        exit();
    }

    // User with the given ID exists in the database, proceed with adding book to cart
    $sql1 = "INSERT INTO cart (productId, userId, productType) VALUES (?, ?, ?);";
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1, $sql1)) {
        header("location: ../books.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt1, "sss", $productId, $userId, $productType);
    mysqli_stmt_execute($stmt1);
    mysqli_stmt_close($stmt1);
    header("location: ../books.php?error=none");
    exit();
}



function removeFromCart($conn, $productId) {
    $sql = "DELETE FROM cart WHERE productId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../cart.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $productId);
        mysqli_stmt_execute($stmt);
        header("location: ../cart.php?success=deleted");
        exit();
    }
}

function alreadyInCart($conn, $productId, $productType) {
    $sql = "SELECT * FROM cart WHERE productType = ? and productId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../cart.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $productType, $productId);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


/*--------------------------------*/
/*-------ADD MOVIE TO CART--------*/
/*--------------------------------*/

function addToCartMovie($conn, $productId, $userId, $productType) {
    $sql = "SELECT * FROM users WHERE usersId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../movie.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $userId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (!$row = mysqli_fetch_assoc($result)) {
        // User with the given ID does not exist in the database
        header("location: ../cart.php?error=usernotfound");
        exit();
    }

    // User with the given ID exists in the database, proceed with adding book to cart
    $sql = "INSERT INTO cart (productId, userId, productType) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../movies.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $productId, $userId, $productType);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../movies.php?error=none" );
    exit();
}



/*--------------------------------*/
/*-------ADD MUSIC TO CART--------*/
/*--------------------------------*/

function addToCartMusic($conn, $productId, $userId, $productType) {
    $sql = "SELECT * FROM users WHERE usersId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../music.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $userId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (!$row = mysqli_fetch_assoc($result)) {
        // User with the given ID does not exist in the database
        header("location: ../cart.php?error=usernotfound");
        exit();
    }

    // User with the given ID exists in the database, proceed with adding book to cart
    $sql = "INSERT INTO cart (productId, userId, productType) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../music.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $productId, $userId, $productType);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../music.php?error=none" );
    exit();
}

/*--------------------------------*/
/*-------------ORDER--------------*/
/*--------------------------------*/
// Adds a new order to the orders table and returns the order ID
function addOrder($conn, $userId, $totalPrice) {
    $stmt = mysqli_stmt_init($conn);
    $query = "INSERT INTO orders (userId, totalPrice) VALUES (?, ?)";
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "ii", $userId, $totalPrice);
        mysqli_stmt_execute($stmt);
        $orderId = mysqli_stmt_insert_id($stmt);
        mysqli_stmt_close($stmt);
        return $orderId;
    } else {
        die("Failed to prepare statement: " . mysqli_error($conn));
    }
}

// Retrieves the product IDs for the current user's cart
function getCartProductIds($conn, $userId) {
    $productIds = array();
    $query = "SELECT productId FROM cart WHERE userId = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "i", $userId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
            $productIds[] = $row['productId'];
        }
        mysqli_stmt_close($stmt);
    } else {
        die("Failed to prepare statement: " . mysqli_error($conn));
    }
    return $productIds;
}

// Adds a new order item to the orderitems table
function addOrderItem($conn, $orderId, $productId) {
    $stmt = mysqli_stmt_init($conn);
    $query = "INSERT INTO orderitems (orderId, productId) VALUES (?, ?)";
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "ii", $orderId, $productId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        die("Failed to prepare statement: " . mysqli_error($conn));
    }
}

// Deletes all cart items for the current user
function deleteCart($conn, $userId) {
    $stmt = mysqli_stmt_init($conn);
    $query = "DELETE FROM cart WHERE userId = ?";
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "i", $userId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        die("Failed to prepare statement: " . mysqli_error($conn));
    }
}
