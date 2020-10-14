<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db_host = "us-cdbr-east-02.cleardb.com";	
$db_username = "be8cf40c5420d0";	
$db_password = "9b220eb2";	
$db_name = "heroku_a77ccaa19f9ed6f";

$db = mysqli_connect($db_host, $db_username, $db_password, $db_name);


//Student Login
if (isset($_POST['student_login'])) {
  $stuNum = mysqli_real_escape_string($db, $_POST['student_num']);
  $stuPassword = mysqli_real_escape_string($db, $_POST['student_password']);

  if (empty($stuNum)) {
  	array_push($errors, "Student Number is required");
  }
  if (empty($stuPassword)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {

  	$query = "SELECT * FROM student WHERE studentNum='$stuNum' AND studentPassword='$stuPassword'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['student_num'] = $stuPassword;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: studentDashboard.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

//Lecturer Login
if (isset($_POST['lecturer_login'])) {
  $lecEmail = mysqli_real_escape_string($db, $_POST['lecturer_email']);
  $lecPassword = mysqli_real_escape_string($db, $_POST['lecturer_password']);

  if (empty($username)) {
  	array_push($errors, "Lecturer Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM lecturer WHERE lecturer_email ='$lecEmail' AND lecturer_password='$lecPassword'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: lecturerDashboard.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>