<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) ) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
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

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../NEW_register_login.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../NEW_register_login.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
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
    $result;
    if (empty($nazov) || empty($img) || empty($autor) || empty($cena) || empty($rating) || empty($description) ) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


/*---------ADD PRODUCT----------*/

function addProduct($conn, $nazov, $img, $autor, $cena, $rating, $description) {
    $sql = "INSERT INTO produkt (nazov, img, autor, cena, rating, description) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }

        mysqli_stmt_bind_param($stmt, "ssssss", $nazov, $img, $autor, $cena, $rating, $description);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../adminPage.php?error=none");
        exit();
}


/*---------UPDATE PRODUCT----------*/

function updateProduct($conn, $id, $nazov, $img, $autor, $cena, $rating, $description) {
    $sql = "SELECT nazov, img, autor, cena, rating, description FROM produkt WHERE id = ?";
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
        if(empty($description)) $description = $row['description'];
    }
    mysqli_stmt_close($stmt);

    $sql = "UPDATE produkt SET nazov = ?, img = ?, autor = ?, cena = ?, rating = ?, description = ? WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminPage.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssssi", $nazov, $img, $autor, $cena, $rating, $description, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../adminPage.php?error=none");
    exit();
}


function idExists($conn, $id) {
    $sql = "SELECT id FROM produkt WHERE id = ?";
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


/*---------DELETE PRODUCT----------*/

function deleteProduct($conn, $id) {
    $sql = "DELETE FROM produkt WHERE id = ?;";
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

/*----------FAQ-----------*/

function emptyInputFaq($question, $answer) {
    $result;
    if (empty($question) || empty($answer)) {
        $result = true;
    }
    else {
        $result = false;
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
    $result;
    if (empty($name) || empty($email) || empty($message)) {
        $result = true;
    }
    else {
        $result = false;
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