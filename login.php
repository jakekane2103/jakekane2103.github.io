<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$conn = new mysqli('localhost', 'root', '', 'rocnikovy');

if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {
    // check if email exists
    $query = "SELECT email, password FROM newregister WHERE email=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($email, $hashed_password);
    if ($stmt->num_rows > 0) {
        if ($stmt->fetch()){
            //check if the entered password matches the stored hashed password
            if (password_verify($password, $hashed_password)){
                $_SESSION["email"] = $email;
                echo "Login Successful";
            } else {
                echo "Incorrect password";
            }
        }
    } else {
        echo "Email not found";
    }
    $stmt->close();
    $conn->close();
}

?>