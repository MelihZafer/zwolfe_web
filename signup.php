<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$first_last_name = $_POST['first_last_name'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$salt = "login_sample_db";
		$pass = sha1($password.$salt);

		if(!empty($user_name) && !empty($first_last_name) && !empty($email) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password, first_last_name, email) values ('$user_id','$user_name','$pass', '$first_last_name', '$email')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}
		else
		{
			echo "Please enter some valid information!";
		}
	
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Zwolfe</title>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container_fluid bg-dark d-flex justify-content-center align-items-center vh-100">
	<form method="post"  action="signup.php">
	<div class="box text-dark d-flex justify-content-center align-items-center flex-column">
	<a class="my-3 text-dark d-flex fles-column text-decoration-none" href="#"> <img src="img/logo_black.png" style="height: 50px; margin: 0px 0.5em;" alt=""> <h1> Melih Zafer </h1></a>

	<h2>Sign Up</h2>
	
    
      <input type="text" name="first_last_name" class="form-control my-2" id="staticUser" placeholder="First Name and Last Name" required>

      <input type="email" name="email" class="form-control my-2" id="staticEmail" placeholder="Enter a valid email adress" required >

	  <input type="text"name="user_name" class="form-control my-2" id="staticUser" placeholder="Type an username" required>

      <input type="password" name="password" class="form-control my-2" id="inputPassword" placeholder="Type a password" required>

	  <input type="submit" class="btn btn-dark mt-4 " value="Sign Up">
	  <a href="login.php" class="mt-2 text-dark">Already have an account</a>
	</form>
	</div>
	</div>

</body>
</html>