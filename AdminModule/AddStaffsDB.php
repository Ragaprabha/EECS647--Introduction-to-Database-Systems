<?php
session_start(); // Starting Session
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

/*-- This function is executed when the submit button is clicked after entering Staff details ----*/
if(isset($_POST['submit'])) 
{
	/*-- Initializing PHP variables from PHP POST --*/
	$admin_name=$_POST['admin_name'];
	$admin_id=$_POST['admin_id'];
	$admin_pwd=$_POST['admin_pwd'];
	$e_mail=$_POST['e-mail'];
	$phone_no=$_POST['phone_no'];

	/*-- Database Query --*/
	$user_query = 'INSERT INTO Admin(adminid, adminname, password,email, phone)
    VALUES("'.mysql_real_escape_string($admin_id).'","'.mysql_real_escape_string($admin_name).'","'.mysql_real_escape_string($admin_pwd).'","'.mysql_real_escape_string($e_mail).'",'.mysql_real_escape_string($phone_no).')';

	if(!mysql_query($user_query,$database))
	{
		echo mysql_error();
	}
	
	
	/*--- Page redirection --*/
	header("Location: AddStaffSuccess.php");
}

/*-- This function is executed when the back button is clicked----*/
if(isset($_POST['back']))
{	
	/*--- Page redirection --*/
	header("Location: InquireStaff.php");
}
mysql_close($database); // Closing Connection
?>