<?php

session_start();
include("connection.php");
include("functions.php");



if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$salt = "login_sample_db";
	$pass = sha1($password . $salt);
	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "select * from users where user_name = '$user_name'";
		$result = mysqli_query($con, $query);


		if ($result && mysqli_num_rows($result) > 0) {

			$user_data = mysqli_fetch_assoc($result);

			if ($user_data['password'] == $pass) {


				$_SESSION['user_id'] = $user_data['user_id'];
				header("Location: index.php");
				die;
			}
		}


		echo "wrong username or password!";
	} else {
		echo "wrong username or password!";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Login | Zwolfe</title>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>


	<div class="container-fluid  bg-dark d-flex justify-content-center align-items-center vh-100 flex-column">
		<form method="post">
			<div class="box text-dark d-flex justify-content-center align-items-center flex-column">
				<a class="my-3 text-dark d-flex fles-column text-decoration-none" href="#"> <img src="img/logo_black.png" style="height: 50px; width: 50px; margin: 0px 0.5em;" alt="">
					<h1> Melih Zafer </h1>
				</a>

				<h2>Login</h2>

				<input type="text" name="user_name" class="form-control my-2" id="staticUser" placeholder="Type an username" required>

				<input type="password" name="password" class="form-control my-2" id="inputPassword" placeholder="Type a password" required>

				<input type="submit" class="btn btn-dark mt-4 " value="Login">
				<a href="signup.php" class="mt-2 text-dark">Create an account</a>
		</form>
	</div>
	</div>
</body>

</html>