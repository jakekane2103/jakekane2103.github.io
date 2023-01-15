<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'rocnikovy');

if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        // registration code
        $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit();
        }
        $password = password_hash($password, PASSWORD_BCRYPT);
        // check for duplicate email
        $query = "SELECT email FROM newregister WHERE email=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            echo "Email already exists";
            $stmt->close();
            exit();
        }
        $stmt = $conn->prepare("INSERT INTO newregister (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password);
        if ($stmt->execute()) {
            $_SESSION["email"] = $email;
            $_SESSION["name"] = $name;
            echo "Registration Successful";
        } else {
            echo "Error: " . $conn->error;
        }
        $stmt->close();
    } elseif (isset($_POST['login'])) {
        // login code
        $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        // check if email exists
        $query = "SELECT email, password FROM newregister WHERE email=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($email, $hashed_password);
        if ($stmt->num_rows > 0) {
            if ($stmt->fetch()) {
                //check if the entered password matches the stored hashed password
                if (password_verify($password, $hashed_password)) {
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
    }
}



	/*

	$firstName = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','rocnikovy');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into newregister(name, email, password) 
		values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

*/

	?>
