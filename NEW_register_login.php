<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $conn = new mysqli('localhost', 'root', '', 'rocnikovy');
    if ($conn->connect_error) {
        die("Connection Failed : " . $conn->connect_error);
    } else {
        // check for duplicate email
        $query = "SELECT email FROM newregister WHERE email=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            echo "Email already exists";
            $stmt->close();
            $conn->close();
            exit();
        }
        //validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            $stmt->close();
            $conn->close();
            exit();
        }
        $stmt = $conn->prepare("INSERT INTO newregister (name, email, password) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $password);
        if($stmt->execute()){
            $_SESSION["email"] = $email;
            $_SESSION["name"] = $name;
            echo "Registration Successful";
        }else{
            echo "Error: " . $conn->error;
        }
        $stmt->close();
        $conn->close();
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
