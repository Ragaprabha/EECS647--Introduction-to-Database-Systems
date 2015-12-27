<?php
session_start(); // Starting Session
/*----------------------------------*/
/*-- Accessing Session Variable ----*/
/*----------------------------------*/

$admin = $_SESSION['login_user'];

/*---------------------------*/
/*-- PHP error reporting ----*/
/*---------------------------*/
$error=''; 
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
/*-- This function is executed when the submit button is clicked after entering Password details ----*/
if(isset($_POST['submit'])) 
{
	/*-- Initializing PHP variables from PHP POST --*/
	$new_password=$_POST['new_pwd'];
	$confirm_password=$_POST['conf_pwd'];

	/*--This function checks if the new password and confirm password are equal --*/
	if($new_password == $confirm_password)
	{
		/*-- Database Query --*/
		$user_query = 'UPDATE Admin SET password = "'.mysql_real_escape_string($new_password).'" WHERE adminID = "'.$admin.'"';

		if(!mysql_query($user_query,$database))
		{
			echo "<br /><br /><br />";
			echo mysql_error();
		}
		/*--- Page redirection --*/
		header("Location: UpdateStaffSuccess.php");
	}
	else
	{
		/*--- Page redirection --*/
		header("Location: AdminChangePwd.php");
	}
}
mysql_close($database); // Closing Connection
?>
