<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	
	$conn = mysqli_connect("localhost", "root", "", "ARS");

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

	if (isset($_POST['submit'])) {
		if (empty($_POST['email'])) {
			$error = "Email is invalid";
			echo $error;
		}
		else
		{
		// Define $username and $password
			$username=$_POST['email'];
			// $password=$_POST['password'];

			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			// $conn = mysql_connect("localhost", "root", "", "ARS");
			// To protect MySQL injection for Security purpose
			$email = stripslashes($email);
			// $password = stripslashes($password);
			$username = mysql_real_escape_string($conn, $username);
			// $password = mysql_real_escape_string($password);
			// Selecting Database
			// $db = mysql_select_db("company", $conn);
			// SQL query to fetch information of registerd users and finds user match.
			$sql = "SELECT * FROM USER WHERE email ='$email';";
			$query = mysql_query($conn, $sql);
			$rows = mysql_num_rows($query);
			if ($rows == 1) {
				echo $query[0];
				$_SESSION['email']=$email; // Initializing Session
				// header("location: profile.php"); // Redirecting To Other Page
			} 
			else {
				$error = "Username or Password is invalid";
				echo $error;
			}
			mysql_close($conn); // Closing Connection
		}
	}
?>