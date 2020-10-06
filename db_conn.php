<?php 	
// connects to the database
$db_host = "us-cdbr-east-02.cleardb.com";	
$db_username = "be8cf40c5420d0";	
$db_password = "9b220eb2";	
$db_name = "heroku_a77ccaa19f9ed6f";

$db = mysqli_connect($db_host, $db_username, $db_password, $db_name);	

	//check connection
	if(mysqli_connect_error())
	{
		echo "<h3>Failed to connect to mySQL: </h3>" .mysqli_connect_error();
	}
	else
	{
		echo "<h3>Connected!</h3>"; //comment out row when it connects
	}		
?> 


