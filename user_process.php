<?php
include("db-conn.php");

//BRANCH USER
if (isset($_POST['submit-contact'])) 
{
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
  
  //inserts into branch tbl
  $query = "INSERT INTO contact (name,email, message) VALUES('$name', '$email', '$message')";
  mysqli_query($db, $query);  	

            
}  


