<?php
session_start(); // Starting Session

$error=''; // Variable To Store Error Message
/*----------------------------------*/
/*-- Accessing Session Variable ----*/
/*----------------------------------*/

$login_user = $_SESSION['login_user'];
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


if(isset($_POST['submit'])) 
{
	/*-- Initializing PHP variables from PHP POST --*/
	$admin_name=$_POST['admin_name'];
	$admin_id=$_POST['admin_id'];
	$admin_pwd=$_POST['admin_pwd'];
	$e_mail=$_POST['e-mail'];
	$phone_no=$_POST['phone_no'];

	/*-- Database Query --*/
	$user_query = 'UPDATE Admin SET adminname ="'.mysql_real_escape_string($admin_name).'",password = "'.mysql_real_escape_string($admin_pwd).'",email = "'.mysql_real_escape_string($e_mail).'", phone = '.mysql_real_escape_string($phone_no).' WHERE adminid = "'.$admin_id.'"';

	if(!mysql_query($user_query,$database))
	{
		echo mysql_error();
	}
	header("Location: UpdateStaffSuccess.php");// Redirecting To Other Page
}

if(isset($_POST['delete']))
{
	/*-- Initializing PHP variables from PHP POST --*/
	$admin_id=$_POST['admin_id'];

	if($admin_id != $login_user)
	{
		/*-- Database Query --*/
		$user_query = 'DELETE FROM Admin WHERE adminid = "'.$admin_id.'"';
		header("Location: DeleteStaffSuccess.php");// Redirecting To Other Page
	}
	else
	{
		header("Location: StaffDetails.php");// Redirecting To Other Page
	}
	
	if(!mysql_query($user_query,$database))
	{
		echo mysql_error();
	}
}

if(isset($_POST['back']))
{
	header("Location: SearchStaffs.php");// Redirecting To Other Page
}
if(isset($_POST['ok']))
{
	header("Location: SearchStaffs.php");// Redirecting To Other Page
}
mysql_close($database); // Closing Connection
?>