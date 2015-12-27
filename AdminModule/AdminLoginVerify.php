<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

/*----------------------------------------------*/
/*-- Setting Database Username and Password ----*/
/*----------------------------------------------*/
$username = 'bdesu';
$password = 'password123!';
/*---------------------------*/
/*-- Database Connection ----*/
/*---------------------------*/
$database = @mysql_connect('mysql.eecs.ku.edu',$username, $password);

if(!$database){
	die('Could not connect:' . mysql_error());
}

if(!mysql_select_db($username, $database)){
	die('Could not select database' .mysql_error());
}

if (isset($_POST['admin_lgn'])) {
	if (empty($_POST['admin_id']) || empty($_POST['admin_pwd'])) {
		$error = "Username or Password is invalid";
	}
	else
	{
		/*-- Initializing PHP variables from PHP POST --*/
		$userid=$_POST['admin_id'];
		$pwd=$_POST['admin_pwd'];
		
		// To prevent MYSQL injection
		$userid = stripslashes($userid);
		$pwd = stripslashes($pwd);
		$userid = mysql_real_escape_string($userid);
		$pwd = mysql_real_escape_string($pwd);

		// SQL query to fetch information of registerd admins and finds admin match.
		$query = mysql_query("select * from Admin where password='$pwd' AND adminid='$userid'", $database);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user']=$userid; // Initializing Session variable
			header("location: AdminHome.php"); // Redirecting To Other Page
		} 
		else {
			header("location: AdminLogin.php");// Redirecting To Other Page
			$error = "Username or Password is invalid";
		}
	}
}
mysql_close($database); // Closing Connection
?>