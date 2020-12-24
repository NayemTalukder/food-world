<?php
//initialising variable
$errors = array();

//connect to db
include('connect.php');

//Register user
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST["email"];
	$password_1 = $_POST["password1"];
	$password_2 = $_POST["password2"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$phone = $_POST["phone"];

	//form validation

	// check db for existing user with same username
	$user_check_query = "SELECT * FROM user WHERE username = '$username' or email ='$email' LIMIT 1";
	$results = mysqli_query($con, $user_check_query);
	$user = mysqli_fetch_assoc($results);

	if($user){
		if($user['username'] === $username){
			array_push($errors, "Username already exists");
			session_start();
			$_SESSION['regValidUser'] = $username;
			header("Location: index.php");
		}
		if($user['email'] === $email){
			array_push($errors, "This email id already has a username");
			session_start();
			$_SESSION['regValidEmail'] = $username;
			header("Location: index.php");
		}
	}

	// Registration the user if not error 
	if(count($errors)== 0){
		//$password_1 =md5($password_1); // this will encrypt the password
		$query = "INSERT INTO user (username, email, user_password, fname, lname, phone) VALUES ('$username','$email','$password_1', '$fname', '$lname', '$phone')";
		mysqli_query($con,$query);
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['register'] = $username;
		$_SESSION['login'] = $username;
		header("Location: index.php");
	}
}

//User Login
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password_1 = $_POST["password1"];
	
	//User validation
	$user_check_query = "SELECT * FROM user WHERE username = '$username' AND user_password ='$password_1' LIMIT 1";
	$results = mysqli_query($con, $user_check_query);
	$user = mysqli_fetch_assoc($results);

	//Confirmation
	if($user){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['login'] = $username;
		header("Location: index.php");
	}else{
		session_start();
		$_SESSION['loginincorrect'] = $username;
		header("Location: index.php");
	}
}

//User Rating
if(isset($_POST['rating'])){
	$taste = $_POST['taste'];
	$interior = $_POST["interior"];
	$food_quality = $_POST["food_quality"];
	$cost = $_POST["cost"];
	$services = $_POST["services"];
	$user_fk = $_POST["user_id"];
	$res_fk = $_POST["restaurant"];

	$summ = (int)$taste + (int)$interior + (int)$food_quality +(int)$cost +(int)$services;

	//Insert into review
	$query = "INSERT INTO review (taste, interior, food_quality, cost, services, user_fk, res_fk, summ) VALUES ('$taste','$interior','$food_quality', '$cost', '$services', '$user_fk', '$res_fk', '$summ')";
	mysqli_query($con,$query);

	//Rating Generate

	$sum1 = "SELECT AVG(summ) AS AverageRating FROM review WHERE res_fk='$res_fk'";
	$queryResult = mysqli_query($con,$sum1);
	$summ2 = mysqli_fetch_assoc($queryResult);

	$rating1 = ((float)$summ2['AverageRating'] * 2)/10;;
	$rating = round($rating1, 1);


	$query2 = "UPDATE restaurant SET rating = '$rating' WHERE res_name = '$res_fk'";
	mysqli_query($con,$query2);

	$query3 = "UPDATE review SET rating = '$rating' WHERE res_fk = '$res_fk'";
	mysqli_query($con,$query3);

	session_start();
	$_SESSION['reviewfeedback'] = $taste;
	$_SERVER['REQUEST_URI'];
	header("Location: index.php");
}

?>