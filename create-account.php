<!doctype html>
<html lang="en">
  <head>
    <title>HOSPITAL</title>

    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
 <body  background= "uno.png" background-size=cover  text= "black">
<div class="container">

	<?php
 include'errors.php';
	include 'conn.php';
	$errors = array(); 

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Query to check if the email already exist
	$checkEmail = "SELECT * FROM users WHERE Email = '$_POST[email]' ";

	// Variable $result hold the connection data and the query
	$result = $conn-> query($checkEmail);

	// Variable $count hold the result of the query
	$count = mysqli_num_rows($result);

	// If count == 1 that means the email is already on the database
	if ($count == 1) {
		
		header('location: error4.html');
	} else {	
	
	/*
	If the email don't exist, the data from the form is sended to the database
	and the account is created
	*/
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	// The password_hash() function convert the password in a hash before send it to the database
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	// Query to send Name, Email and Password hash to the database
	$query = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$passHash')";

	if (mysqli_query($conn, $query)) {
		header('location: login.html');	

		} else {
		header('location: error5.html');
		}	
	}	
	mysqli_close($conn);
	?>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>